<!DOCTYPE html>
<html>
<head>
  <title>Request Results</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2>Request Results</h2><a href="{{url('Myorders')}}"><button  class="btn btn-success">My Orders</button></a>

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


                            <button  onclick="showAcceptedMessage({{ $request->id }})" type="submit" id="c" class="btn btn-success">Accept</button>

                    </form>
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
<body>
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>

@endif

</body>


{{--192.168.1.14
    --}}



  </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>









