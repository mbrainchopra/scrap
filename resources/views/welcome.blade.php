 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
 <!-- Add Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* Custom CSS for dropdown hover effect */
            .dropdown:hover .dropdown-menu {
              display: block;
            }
          </style>
    </head>
    <body class="antialiased">
       {{--  <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


        </div> --}}
<body>

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="#">micbrain.tech</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Login
            </a>
            <div class="dropdown-menu" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="{{ url('/login/1') }}">Login as Customer</a>

              <a class="dropdown-item" href="{{ url('/login/2') }}">Login as Dealer</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url('/home') }}" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Register
            </a>
            <div class="dropdown-menu" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="{{ url('/register/1') }}">Register as User</a>
              <a class="dropdown-item" href="{{ url('/register/2') }}">Register as Dealer</a>
            </div>
          </li>
       <li class="nav-item">
         <a class="nav-link" href=" ">Contact</a>
       </li>


     </ul>
   </div>
 </nav>

 <!-- Add Bootstrap JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 </body>

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
</footer>






 </html>
