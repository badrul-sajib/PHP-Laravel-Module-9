<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')Badrul Sajib</title>

    <!-- Slick -->
    <link rel="stylesheet" href="{{asset ('plugins/slick/slick.css') }}">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{asset ('plugins/font-awesome/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{asset ('plugins/font-awesome/brands.css') }}">
    <link rel="stylesheet" href="{{asset ('plugins/font-awesome/solid.css') }}">

    <!-- aos -->
    <link rel="stylesheet" href="{{asset ('plugins/aos/aos.css') }}">

    <!-- Main Stylesheet -->
    <link href="{{asset ('css/style.css') }}" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset ('images/favicon.png') }}" type="image/x-icon">
</head>
<body>
<!-- Header Section -->
@include('components.header')

@yield('content')

<!-- Footer Section -->
@include('components.footer')

<!-- JS -->
<!-- jQuery -->
<script src="{{asset ('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{asset ('plugins/bootstrap/bootstrap.bundle.min.js') }}"></script>
<!-- slick-slider-->
<script src="{{asset ('plugins/slick/slick.min.js') }}"></script>
<!-- aos -->
<script src="{{asset ('plugins/aos/aos.js') }}"></script>
<!-- isotope -->
<script src="{{asset ('plugins/shuffle/shuffle.js') }}"></script>
<!-- Main Script -->
<script src="{{asset ('js/script.js') }}"></script>
</body>
</html>