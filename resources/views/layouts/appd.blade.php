<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   Wellcome Dealer
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login/2'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login/2') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register/2'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register/2') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('homeback') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('addpro') }}">Products</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('findreq?1')}}">Requests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('Myorders') }}">MyOrders</a>
                        </li>


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('myaccount') }}">My account</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>





                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

{{--
<footer>
    <section id="about">
        <div class="container">
          <h2>About Us</h2>
          <p>Welcome to Our Company!</p>
          <p>We are a leading platform in the field of scrap selling, dedicated to connecting buyers and sellers of scrap materials. Our platform provides a convenient and efficient marketplace for individuals and businesses looking to buy or sell various types of scrap.</p>
          <p>At Our Company, we understand the importance of recycling and responsible waste management. By facilitating the trade of scrap materials, we contribute to reducing waste and promoting a more sustainable future.</p>
          <p>Our platform offers a wide range of scrap categories, including metal scrap, plastic scrap, paper scrap, electronic scrap, and more. We provide a user-friendly interface that allows sellers to list their available scrap materials and buyers to browse and purchase them easily.</p>
          <p>Why Choose Our Company?</p>
          <ul>
            <li><strong>Extensive Network:</strong> We have a vast network of reliable sellers and buyers, ensuring a diverse selection of scrap materials and competitive prices.</li>
            <li><strong>Secure Transactions:</strong> We prioritize the security and privacy of our users. Our platform employs advanced security measures to safeguard transactions and protect sensitive information.</li>
            <li><strong>Efficient Communication:</strong> We facilitate smooth communication between buyers and sellers, allowing them to negotiate terms, arrange logistics, and finalize deals effectively.</li>
            <li><strong>Sustainability Focus:</strong> By promoting the trade of scrap materials, we actively contribute to the circular economy and support sustainable practices.</li>
            <li><strong>Customer Satisfaction:</strong> We strive to provide the best possible experience for our users. Our dedicated support team is available to assist with any inquiries or issues that may arise.</li>
          </ul>
          <p>Join Our Company today and become a part of our thriving community dedicated to scrap selling. Together, we can make a difference in creating a greener and cleaner world.</p>
        </div>
      </section>
    <section id="contact">
        <div class="container">
          <h2>Contact Us</h2>

          <p>Email: info@example.com</p>
          <p>Phone: +1 123 456 7890</p>
        </div>
    </section>
    <div class="container">
      <p>&copy; 2023 Your Company. All rights reserved.</p>
    </div>
</footer> --}}
</html>
