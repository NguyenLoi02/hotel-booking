<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fontend/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/fonts/fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('fontend/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('fontend/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('fontend/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('fontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/style1.css') }}">
  </head>
  <body>
    
      
      
    

    <div class="main">
        {{-- header --}}
      @include('header')

      {{-- boddy --}}
      @yield('content')


      {{-- footer --}}
      @include('footer')
    </div>
    

  <script src="{{ asset('fontend/js/modal.js') }}"></script>
  <script src="{{ asset('fontend/js/jquery.min.js') }}"></script>
  <script src="{{ asset('fontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('fontend/js/popper.min.js') }}"></script>
  <script src="{{ asset('fontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('fontend/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('fontend/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('fontend/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('fontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('fontend/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('fontend/js/aos.js') }}"></script>
  <script src="{{ asset('fontend/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('fontend/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('fontend/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('fontend/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('fontend/js/google-map.js') }}"></script>
  <script src="{{ asset('fontend/js/main.js') }}"></script>
    
  </body>
</html>