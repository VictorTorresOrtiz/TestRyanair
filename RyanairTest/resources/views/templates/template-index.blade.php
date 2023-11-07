<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Flight Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet y AOS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/gh/loadingio/loading.css@v2.0.0/dist/loading.css" rel="stylesheet">



    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet">

    <!-- JavaScript Libraries -->
    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="{{ URL::asset('lib/easing/easing.min.js')}}"></script>
    <script defer src="{{ URL::asset('lib/waypoints/waypoints.min.js')}}"></script>


    <!-- Template Javascript -->
    <script defer src="{{ URL::asset('js/main.js')}}"></script>
    <script defer src="{{ URL::asset('js/state.js')}}"></script>



</head>

<body>
    @yield('index')
</body>
<!-- AOS SCRIPT -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
</html>
