<!DOCTYPE html>
<html>
<head>
  <title>Request Results</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2>Request Results</h2>

  <!-- District selection box and button -->
  <div class="form-group"><form method='POST ' action="{{url('findreq')}}">
   @csrf
   @method('POST') <label for="district">Select District:</label>
    <select class="form-control" name="district" id="district">
        <option value="Ariyalur">Ariyalur</option>
        <option value="Chennai">Chennai</option>
        <option value="Coimbatore">Coimbatore</option>
        <option value="Cuddalore">Cuddalore</option>
        <option value="Dharmapuri">Dharmapuri</option>
        <option value="Dindigul">Dindigul</option>
        <option value="Erode">Erode</option>
        <option value="Kanchipuram">Kanchipuram</option>
        <option value="Kanyakumari">Kanyakumari</option>
        <option value="Karur">Karur</option>
        <option value="Krishnagiri">Krishnagiri</option>
        <option value="Madurai">Madurai</option>
        <option value="Nagapattinam">Nagapattinam</option>
        <option value="Namakkal">Namakkal</option>
        <option value="Nilgiris">Nilgiris</option>
        <option value="Perambalur">Perambalur</option>
        <option value="Pudukkottai">Pudukkottai</option>
        <option value="Ramanathapuram">Ramanathapuram</option>
        <option value="Salem">Salem</option>
        <option value="Sivaganga">Sivaganga</option>
        <option value="Thanjavur">Thanjavur</option>
        <option value="Theni">Theni</option>
        <option value="Thoothukudi">Thoothukudi</option>
        <option value="Tiruchirappalli">Tiruchirappalli</option>
        <option value="Tirunelveli">Tirunelveli</option>
        <option value="Tiruppur">Tiruppur</option>
        <option value="Tiruvallur">Tiruvallur</option>
        <option value="Tiruvannamalai">Tiruvannamalai</option>
        <option value="Tiruvarur">Tiruvarur</option>
        <option value="Vellore">Vellore</option>
        <option value="Viluppuram">Viluppuram</option>
        <option value="Virudhunagar">Virudhunagar</option>

      <!-- Add more districts here -->
    </select><br>
    <button type="submit"  class="btn btn-primary" id="selectBtn">Find </button>
  </div></form>

  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Product Type</th>
        <th>Quantity </th>
        <th>Accept</th>
        <th>Decline</th>
        <th>See OnMap </th>
             </tr>
    </thead>
    <tbody>
        @forelse($datareq as $request)
            <tr>
                <td>{{ $request->name }}</td>
                <td>{{ $request->address }}</td>
                <td>{{ $request->contact }}</td>
                <td>{{ $request->product_type }}</td>
                <td>{{ $request->quantity }}</td>
                <td>
                    <form action="{{ url('accept', ['id' => $request->id]) }}" method="POST">
                        @csrf

                        @if ($request->accepted)
                            <button type="button" class="btn btn-success" disabled>&#10004; Accepted</button>
                        @else
                            <button type="submit" class="btn btn-success">Accept</button>
                        @endif
                    </form>
                </td>
                <td>
                    <button class="btn btn-danger">Decline</button>
                </td>
                <td>
                    <a href="https://www.google.com/maps?q={{ $request->latitude }},{{ $request->longitude }}" target="_blank" class="btn btn-primary">View Location</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8">No requests found.</td>
            </tr>
        @endforelse
    </tbody>

{{--192.168.1.14
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var forms = document.querySelectorAll('form[id^="accept-form-"]');
            forms.forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    event.preventDefault();
                    var tr = event.target.closest('tr');
                    // Use the 'tr' variable to access the clicked row and perform further actions
                    console.log('Clicked row:', tr);
                    // Submit the form via AJAX if needed
                    // form.submit();
                });
            });
        });
    </script> --}}



  </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
<!--










Full texts
id
name
address
contact
payment_mode
district
product_type
quantity
unit
latitude
longitude
created_at
updated_at
email







-->
