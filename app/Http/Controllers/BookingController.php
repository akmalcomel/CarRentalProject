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



class BookingController extends Controller
{
    //
    public function create(house $car)
    {
        return view('booking.create', compact('car'));
    }

    public function store(Request $request, house $car)
    {
        // Validate the form data
        $request->validate([
            'start_date' => 'required|date',
            'return_date' => 'required|date|after:start_date',
            'receipt' => 'required|file|mimes:jpeg,png,pdf|max:2048',
        ]);

        // Calculate the total price based on the car's price and booking duration
        $totalPrice = $car->price * (strtotime($request->return_date) - strtotime($request->start_date)) / (60 * 60 * 24);

        // Create the booking record
        $booking = new Booking();
        $booking->car_id = $car->id;
        $booking->renter_id = Auth::guard('user2')->user()->id;
        $booking->start_date = $request->start_date;
        $booking->return_date = $request->return_date;
        $booking->total_price = $totalPrice;

        // Save the receipt file
        if ($request->hasFile('receipt')) {
            $receiptPath = $request->file('receipt')->store('receipts', 'public');
            $booking->receipt_path = $receiptPath;
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
