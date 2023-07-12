<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div class="container">
        <h1>Products</h1> <a class="btn btn-danger" href="{{ url('homeback') }}">Back to Home</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Unit</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <div class="container mt-5">
                    <div class="alert alert-success" role="alert" id="successAlert">
                        Success! Your correction was completed.
                    </div>
                </div>

                <!-- Bootstrap JS -->
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <script>
                    // Hide success alert after 2 seconds
                    setTimeout(function() {
                        document.getElementById('successAlert').style.display = 'none';
                    }, 2000);
                </script>
               <!-- jQuery -->
               @foreach ($products as $pro)
    <tr>
        <td>
            <form action="{{ url('products.update', $pro->id) }}" method="POST">
                @csrf
                @method('PUT')
                <span class="editable" data-field="name">{{ $pro->name }}</span>
                <input type="text" class="form-control d-none" name="name" value="{{ $pro->name }}">
                <input type="hidden" name="product_id" value="{{ $pro->id }}">
        </td>
        <td>
            <span class="editable" data-field="price">{{ $pro->price }}</span>
            <input type="text" class="form-control d-none" name="price" value="{{ $pro->price }}">
        </td>
        <td>
            <span class="editable" data-field="unit">{{ $pro->unit }}</span>
            <input type="text" class="form-control d-none" name="unit" value="{{ $pro->unit }}">
        </td>
        <td>
            <span class="editable" data-field="description">{{ $pro->description }}</span>
            <input type="text" class="form-control d-none" name="description" value="{{ $pro->description }}">
        </td>
        <td>
            <button type="submit" class="btn btn-sm btn-success save-btn d-none">Save</button></form>
            <button type="button" class="btn btn-sm btn-primary edit-btn">Edit</button>
        </td>
        <td>
            <form action="{{ route('products.destroy', $pro->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
    </tr>
@endforeach






            </tbody>
        </table>
    </div>
<!-- jQuery -->
<script>
    $(document).ready(function() {
        $('.edit-btn').click(function() {
            var row = $(this).closest('tr');
            row.find('.editable').addClass('d-none');
            row.find('.form-control').removeClass('d-none');
            $(this).addClass('d-none');
            row.find('.save-btn').removeClass('d-none');
        });

        $('.save-btn').click(function() {
            var row = $(this).closest('tr');
            row.find('.editable').each(function() {
                var fieldName = $(this).data('field');
                var newValue = row.find('input[name="' + fieldName + '"]').val();
                $(this).text(newValue);
            });
            row.find('.editable').removeClass('d-none');
            row.find('.form-control').addClass('d-none');
            $(this).addClass('d-none');
            row.find('.edit-btn').removeClass('d-none');
        });
    });
    </script>
<!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
