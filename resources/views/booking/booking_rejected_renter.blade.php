<!DOCTYPE html>
<html>
<head>
    <title>Booking Status</title>
</head>
<body>
    <h1>Booking Status</h1>
    <p>Your booking has been rejected. Here are the details:</p>
    <p>Booking ID: {{ $booking->id }}</p>
    <p>Car Model: {{ $booking->car->propname }}</p>

    <p>Your money will be refunded back within 3 days. Thank you for using our platform.</p>
</body>
</html>
