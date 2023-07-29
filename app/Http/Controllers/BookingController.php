<?php

namespace App\Http\Controllers;
use App\Models\house;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\User2;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingNotification;



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
        $booking->save();

        // Redirect to a success page or display a success message
        return redirect()->route('booking.success')->with('success', 'Booking successful!');
    }

    public function success()
{
    // Logic to display the booking success page
    return view('booking.success'); // Replace 'booking.success' with the actual view name for your success page
}

}
