<!DOCTYPE html>
<html>
<head>
    <title>Location Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .center-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #f2f2f2;
            border-radius: 5px;
            padding: 20px;
            width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            max-height: 500px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="number"] {
            -moz-appearance: textfield;
        }

        .form-group button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .form-group small {
            color: #999;
        }

        .form-group .location-field {
            background-color: #fff;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <div class="center-form">
        <div class="form-container">
            <h2 class="text-center">Book your dealer here ...</h2>
            <form method="POST" action="{{ url('makereq') }}">
                @csrf
                <!-- Your form fields and submit button here -->
                @php
                $user = Auth::user();
                $email = $user->email;
            @endphp
            <input type="hidden" name="email" value="{{ $email }}">
        
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" placeholder="Enter your address" required>
                </div>

                <div class="form-group">
                    <label for="contact">Contact:</label>
                    <input type="tel" id="contact" name="contact" placeholder="Enter your contact number" required>
                </div>

                <div class="form-group">
                    <label for="payment_mode">Payment Mode:</label>
                    <select id="payment_mode" name="payment_mode" required>
                        <option value="">Select payment mode</option>
                        <option value="credit_card">Credit Card</option>
                        <option value="debit_card">Debit Card</option>
                        <option value="cash">Cash</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="district">District:</label>
                    <input type="text" id="district" name="district" placeholder="Enter your district" required>
                </div>

                <div class="form-group">
                    <label for="product_type">Product Type:</label>
                    <input type="text" id="product_type" name="product_type" placeholder="Enter the product type" required>
                </div>

                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" placeholder="Enter the quantity" required>
                </div>

                <div class="form-group">
                    <label for="unit">Unit:</label>
                    <input type="text" id="unit" name="unit" placeholder="Enter the unit" required>
                </div>

                <div class="form-group">
                    <label for="latitude">Latitude:</label>
                    <input type="text" id="latitude" name="latitude" placeholder="Enter the latitude" required>
                </div>

                <div class="form-group">
                    <label for="longitude">Longitude:</label>
                    <input type="text" id="longitude" name="longitude" placeholder="Enter the longitude" required>
                </div>

                <div class="form-group">
                    <label for="current_location">Current Location:</label>
                    <input type="text" id="current_location" name="current_location" class="location-field" placeholder="Current Location" readonly>
                    <small id="current_location_help">Click the button to get your current location.</small>
                </div>

                <div class="form-group">
                    <button type="button" onclick="getCurrentLocation()">Get Current Location</button>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script>
        function getCurrentLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert('Geolocation is not supported by this browser.');
            }
        }

        function showPosition(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
            document.getElementById('latitude').value = latitude;
            document.getElementById('longitude').value = longitude;
            document.getElementById('current_location').value = 'Latitude: ' + latitude + ', Longitude: ' + longitude;
        }
    </script>
</body>
</html>
