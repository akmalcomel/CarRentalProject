<!DOCTYPE html>
<html>
<head>
    <title>Booking Invoice</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for A4 border */
        .invoice-container {
            border: 1px solid #000;
            padding: 20px;
            width: 21cm; /* A4 width */
            height: 29.7cm; /* A4 height */
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        hr {
            border: 1px solid #000;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 invoice-container d-flex justify-content-center"> <!-- Center-align content -->
                <div>
                    <h2 class="text-center mb-4">Booking Invoice</h2>

                    <form action="{{ route('booking.confirmDate', $car->id) }}" method="post">
                        @csrf
                        <label for="start_date">Start Date:</label>
                        <input type="date" name="start_date" required>

                        <label for="return_date">Return Date:</label>
                        <input type="date" name="return_date" required>

                        <button type="submit" class="btn btn-primary">Confirm Date</button>
                    </form>

                    @if (isset($totalPrice))
                        <hr>
                        <h4>Car Model: {{ $car->propname }}</h4>
                        <p><strong>Start Date:</strong> {{ \Carbon\Carbon::parse($startDate)->format('Y-m-d') }}</p>
                        <p><strong>Return Date:</strong> {{ \Carbon\Carbon::parse($returnDate)->format('Y-m-d') }}</p>
                        <p><strong>Price Per Day (After Discount):</strong> RM {{ $car->price }}</p>
                <hr><p><strong>Total Price:</strong> RM {{ $totalPrice }}</p><hr>

                        <form action="{{ route('booking.store', $car->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="start_date" value="{{ old('start_date', $startDate) }}">
                            <input type="hidden" name="return_date" value="{{ old('return_date', $returnDate) }}">
                            <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                            <p>Bank Details: {{$car->bank}}</p>
                            <p>Please send the Bank receipt Below:  </p>
                            <label for="receipt">Upload Receipt:</label>
                            <input type="file" name="receipt" required>
                            <p><button type="submit" class="btn btn-primary mt-3">Confirm Booking</button></p>
                        </form>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
