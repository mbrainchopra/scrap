<head>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>

  <style>
    .container {
      border-radius: 10%;
    }
  </style>

  <div class="container">
    <div class="card text-white bg-<?php echo $color ?> mb-3" style="max-width: 25rem; border-radius: 10px; border: 1px solid #000;">
      <div class="card-header"> <b>{{ $title }}</b> </div>
      <div class="card-body">
        <h5 class="card-title" style="font-size: 50px;"><span class="count">{{ $da }}</span></h5>
        <p class="card-text">{{ $text }}</p>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      // Function to animate the count
      function animateCount(element, start, end, duration) {
        let range = end - start;
        let current = start;
        let increment = end > start ? 1 : -1;
        let stepTime = Math.abs(Math.floor(duration / range));
        let timer = setInterval(function() {
          current += increment;
          $(element).text(current);
          if (current === end) {
            clearInterval(timer);
          }
        }, stepTime);
      }

      // Function to start the count animation
      function startCountAnimation() {
        $('.count').each(function() {
          let startValue = 0;
          let endValue = parseInt($(this).text());
          let animationDuration = 2000;

          animateCount($(this), startValue, endValue, animationDuration);
        });
      }

      // Call the function to start the animation
      startCountAnimation();
    });
  </script>


