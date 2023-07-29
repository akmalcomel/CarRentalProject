<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Booking Confirmation</h1>
    <p>Dear {{ $booking->car->owners->name }},</p>
    <p>A new booking has been made for your car "{{ $booking->car->propname }}". Below are the booking details:</p>
    <p><strong>Start Date:</strong> {{ $booking->start_date }}</p>
    <p><strong>Return Date:</strong> {{ $booking->return_date }}</p>
    <p><strong>Total Price:</strong> RM {{ $booking->total_price }}</p>
    <p>Please login to your account to manage the bookings.</p>
    <p>Thank you for using our platform.</p>
</body>
</html>
