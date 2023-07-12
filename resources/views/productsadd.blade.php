<!DOCTYPE html>
<html>

<head>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles for the form */
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #000000;
            border-radius: 10px;
            animation: slideIn 1s ease-in-out;
        }

        @keyframes slideIn {
            0% {
                transform: translateY(-50px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>@if($errors->any())
    <ul>
    @foreach ($errors->all() as $error )
   <li>
    {{ $error}}

    </li>
    @endforeach</ul>
    @endif
    <div class= "container-fluid bg-dark  py-5">
        <div class="row  justify-content-md-center">
            <div class="col-md-6">
                <div class="form-container bg-white">
                    <h3 class="text-center mb-4">Add Products</h3>
                    <form method="POST" action="{{url('addprodb')}}">
                        @csrf
                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input name="name" type="text" class="form-control" id="productName"
                                placeholder="Enter product name" required>
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Product Price</label>
                            <input name="price" type="text" class="form-control" id="productPrice"
                                placeholder="Enter product price" required>
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Quantity Unit </label>
                            <input  name="unit" type="text" class="form-control" id="productPrice"
                                placeholder="Enter product unit" required>
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Description</label>
                            <textarea name="description" class="form-control" id="productDescription" placeholder="Enter about product" required></textarea>
                          </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-danger" href="{{ url('homeback') }}">Back to Home</a> <a class="btn btn-secondary" href="{{ url('viewproduct') }}">View Products</a>
                        <br><br>
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Add the following code wherever you want to display the success message -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.form-container').addClass('animated');
        });
    </script>
</body>

</html>
