<!DOCTYPE html>
<html>
<head>
    <title>Booking Status</title>
</head>
<body>
    <h1>Booking Status</h1>
    <p>Your booking has been accepted. Here are the details:</p>
    <p>Booking ID: {{ $booking->id }}</p>
    <p>Car Model: {{ $booking->car->propname }}</p>
    <p><strong>Start Date:</strong> {{ $booking->start_date }}</p>
    <p><strong>Return Date:</strong> {{ $booking->return_date }}</p>
    <p><strong>Total Price:</strong> RM {{ $booking->total_price }}</p>
    <p>Thank you for using our platform.</p>
</body>
</html>
