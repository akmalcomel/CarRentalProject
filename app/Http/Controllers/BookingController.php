<?php

namespace App\Http\Controllers;
use App\Models\house;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\User2;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingNotification;
use App\Mail\BookingStatusNotification;
use Illuminate\Support\Carbon;



class BookingController extends Controller
{
    //
    public function create(house $car)
    {
        return view('booking.create', compact('car'));
    }

    public function confirmDate(Request $request, house $car)
{
    // Validate the form data
    $request->validate([
        'start_date' => 'required|date',
        'return_date' => 'required|date|after:start_date',
    ]);

    $startDate = Carbon::createFromFormat('Y-m-d', $request->input('start_date'));
    $returnDate = Carbon::createFromFormat('Y-m-d', $request->input('return_date'));

    // Query to check availability based on the selected dates
    $isAvailable = Booking::where('car_id', $car->id)
        ->where(function ($query) use ($startDate, $returnDate) {
            $query->whereBetween('start_date', [$startDate, $returnDate])
                ->orWhereBetween('return_date', [$startDate, $returnDate])
                ->orWhere(function ($q) use ($startDate, $returnDate) {
                    $q->where('start_date', '<=', $startDate)
                        ->where('return_date', '>=', $returnDate);
                });
        })
        ->whereIn('status', ['accepted', 'complete'])
        ->doesntExist();

    if ($isAvailable) {
        // Calculate the total price based on the car's price and booking duration
        $totalPrice = ($car->price - ($car->price * $car->floor / 100)) * (strtotime($returnDate) - strtotime($startDate)) / (60 * 60 * 24);


        // Pass the calculated price and selected dates back to the view
        return view('booking.create', compact('car', 'totalPrice', 'startDate', 'returnDate'));
    } else {
        return redirect()->back()->with('error', 'The selected dates are not available.');
    }
}

    public function store(Request $request, house $car)
    {
        // Validate the form data
        $request->validate([
            'start_date' => 'required|date',
            'return_date' => 'required|date|after:start_date',
            'receipt' => 'required|file|mimes:jpeg,png,pdf|max:2048',
        ]);


        // Create the booking record
        $booking = new Booking();
        $booking->car_id = $car->id;
        $booking->renter_id = Auth::guard('user2')->user()->id;
        $booking->start_date = $request->start_date;
        $booking->return_date = $request->return_date;
        $booking->total_price =  $request->total_price;

        // Save the receipt file

        if($request->hasFile('receipt')){
            $file= $request->file('receipt');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/receipts'), $filename);
            $booking['receipt_path']= $filename;
        }



        $ownerEmail = $booking->car->owners->email;
 // Assuming the car owner's email is stored in the 'email' column of the 'users' table.
Mail::to($ownerEmail)->send(new BookingNotification($booking));
$booking->rate = $request->rating;
        $booking->save();

         // Calculate the average rating for the car based on all the ratings from its bookings
    $averageRating = Booking::where('car_id', $car->id)->whereNotNull('rate')->avg('rate');

    // Update the car's 'rate' column with the newly calculated average rating
    DB::table('houses')->where('id', $car->id)->update(['rate' => $averageRating]);
    $car->rate = $averageRating;
    $car->save();

        // Redirect to a success page or display a success message
        return redirect()->route('booking.success')->with('success', 'Booking successful!');
    }

    public function success()
{
    // Logic to display the booking success page
    return view('booking.success'); // Replace 'booking.success' with the actual view name for your success page
}


public function confirmstatus()
{
    $ownerId = Auth::id();
    $bookings = Booking::whereHas('car', function ($query) use ($ownerId) {
        $query->where('ownerID', $ownerId);
    })->get();

    return view('confirmstats', compact('bookings'));
}

public function markReturned(Booking $booking)
{
    $booking->status = 'complete'; // or 'returned', depending on your preference for the status value
    $booking->save();

    // You can also send an email notification to the renter here (optional).

    return redirect()->route('confirmstats');
}

public function acceptBooking(Booking $booking)
{
    $booking->status = 'accepted';
    $booking->save();

    // You can also send an email notification to the renter here (optional).
    Mail::to($booking->renter->email)->send(new BookingStatusNotification($booking, 'accepted'));
    return redirect()->route('confirmstats');
}

public function rejectBooking(Booking $booking)
{
    $booking->status = 'rejected';
    $booking->save();

    // You can also send an email notification to the renter here (optional).
    Mail::to($booking->renter->email)->send(new BookingStatusNotification($booking, 'rejected'));


    return redirect()->route('confirmstats');
}


public function renterBookings()
{
    $renterId = Auth::guard('user2')->user()->id;
    $pendingBookings = Booking::where('renter_id', $renterId)
                             ->where('status', 'pending')
                             ->get();

    $bookingHistory = Booking::where('renter_id', $renterId)
                             ->where('status', '!=', 'pending')
                             ->get();

    return view('pending_bookings', compact('pendingBookings', 'bookingHistory'));
}

public function rate(Request $request, Booking $booking)
{
    // Validate the rate (you can add more validation rules if needed)
    $request->validate([
        'rate' => 'required|integer|min:1|max:5',
    ]);

    // Update the booking's rate
    $booking->rate = $request->input('rate');
    $booking->save();

    return redirect()->route('renter.bookings')->with('success', 'Thank you for rating the car!');
}



}
