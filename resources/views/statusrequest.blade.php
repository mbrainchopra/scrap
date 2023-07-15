@extends('layouts.appuser')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .live-dot {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: green;
            margin-left: 5px;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class="centered">
        <div class="card" style="width: 18rem;">
            <div class="card-body animate__animated animate__fadeIn">
                <h5 class="card-title animate__animated animate__bounceIn">REQUEST DETAILS</h5>
                <p class="card-text animate__animated animate__slideInUp"><span class="label">Request ID:</span> 123456789</p>
                <p class="card-text animate__animated animate__slideInUp"><span class="label">Dealer Name:</span> John Doe</p>

                <h5 class="card-title animate__animated animate__bounceIn">PROJECT</h5>
                <p class="card-text animate__animated animate__slideInUp"><span class="label">Status:</span> <span class="live-dot"></span> Live</p>
                <div class="btn-group" role="group">
                    <button class="btn btn-secondary" onclick="cancel()">Cancel</button>
                    <button class="btn btn-primary" onclick="track()">Track</button>
                    <button class="btn btn-success" onclick="contact()">Contact</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>
    <script>
        function cancel() {
            // Add your cancel logic here
            alert('Cancel button clicked');
        }

        function track() {
            // Add your track logic here
            alert('Track button clicked');
        }

        function contact() {
            // Add your contact logic here
            alert('Contact button clicked');
        }
    </script>
</body>
</html>
@endsection
