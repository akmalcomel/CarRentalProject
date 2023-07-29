
<h2>Book Car - {{ $car->name }}</h2>

<form action="{{ route('booking.store', $car->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="start_date">Start Date:</label>
    <input type="date" name="start_date" required>

    <label for="return_date">Return Date:</label>
    <input type="date" name="return_date" required>

    <label for="receipt">Receipt:</label>
    <input type="file" name="receipt" required>

    <button type="submit" class="btn btn-primary">Confirm Booking</button>
</form>
