<!DOCTYPE html>
<html>
<head>
    <title>My Orders</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>@extends('layouts.appd')
@section('content')
<body>

    <div class="container">
        <h2>My Orders</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Product Type</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Location</th>
                    <th>Chat</th>
                    <th>Update Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($accepts as $accept)
                <tr>
                    <td>{{ $accept->name }}</td>
                    <td>{{ $accept->address }}</td>
                    <td>{{ $accept->contact }}</td>
                    <td>{{ $accept->product_type }}</td>
                    <td>{{ $accept->quantity }}</td>
                    <td>
                        @if($accept->status == 1)
                        <span class="badge badge-success">Accepted</span>
                        @elseif($accept->status == 2)
                        <span class="badge badge-info">Payment Processing</span>
                        @elseif($accept->status == 3)
                        <span class="badge badge-primary">Package Shipped</span>
                        @elseif($accept->status == 4)
                        <span class="badge badge-secondary">Finished</span>
                        @endif
                    </td>
                    <td>
                        <a href="https://www.google.com/maps?q={{ $accept->latt }},{{ $accept->lang }}" target="_blank" class="btn btn-primary">Location</a>
                    </td>
                    <td>
                        <button class="btn btn-secondary book-btn" data-id="{{ $accept->id }}">Chat</button>
                    </td>
                    <td>
                        <form action="{{ url('update-status', ['id' => $accept->id]) }}" method="POST" class="status-form">
                            @csrf
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="statusDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Update Status
                                </button>
                                <div class="dropdown-menu" aria-labelledby="statusDropdown">
                                    <button class="dropdown-item status-option" type="submit" name="status" value="1">Accepted</button>
                                    <button class="dropdown-item status-option" type="submit" name="status" value="2">Payment Processing</button>
                                    <button class="dropdown-item status-option" type="submit" name="status" value="3">Package Shipped</button>
                                    <button class="dropdown-item status-option" type="submit" name="status" value="4">Finished</button>
                                </div>
                            </div>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>@endsection
</html>
