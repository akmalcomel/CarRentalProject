<h3>{{$car->propname}}</h3>
<p>Price: RM{{$car->price}} per day</p>

<!-- Booking form -->
<form action="{{ route('confirm-booking') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <label for="start-date">Start Date:</label>
  <input type="date" id="start-date" name="start_date">
  <label for="return-date">Return Date:</label>
  <input type="date" id="return-date" name="return_date">

  <!-- Receipt Upload -->
  <label for="receipt">Upload Receipt:</label>
  <input type="file" id="receipt" name="receipt">

  <!-- Add other form fields for other booking details if needed -->

  <button type="submit">Confirm Booking</button>
</form>
