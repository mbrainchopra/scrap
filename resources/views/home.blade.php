@extends('layouts.appd')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}





<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <x-statuscard  d="5" t="Request Jobs " tx="Requests are waiting for you" c="warning" />
        </div>
        <div class="col-lg-4">
            <x-statuscard d="2" t="Completed Jobs " tx="Tasks are done by you." c="primary" />
        </div>
        <div class="col-lg-4">
            <x-statuscard d="200" t=" Total Revenue " tx="Amount of money you got it" c="success" />
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <x-statuscard  d="4" t="Customers " tx="Your regular customers" c="dark" />
        </div>
        <div class="col-lg-4">
            <x-statuscard d="8" t="Reviews " tx="Reviews written by the customer e" c="danger" />
        </div>
        <div class="col-lg-4">
            <x-statuscard d="500" t=" Bonus " tx="Amount of Bonus you got it" c="info" />
        </div>
    </div>

</div><br><br>






<!-- resources/views/components/product-card.blade.php -->

<!-- resources/views/components/product-card.blade.php -->


<div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"><b>Instructions</b></h4>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Step 1: Find Requests from request section.</li>
              <li class="list-group-item">Step 2: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
              <li class="list-group-item">Step 3: Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li class="list-group-item">Step 4: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
              <li class="list-group-item">Step 5: Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- About Us Section -->



<!-- Contact Us Section -->

@endsection

