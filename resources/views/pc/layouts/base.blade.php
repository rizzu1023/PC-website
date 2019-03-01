<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/elegant-fonts.css')}}">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
@include('pc.layouts.header')


<main>
@yield('content')
</main>





@include('pc.layouts.footer')

<script type='text/javascript' src="{{asset('assets/js/jquery.js')}}"></script>
<script type='text/javascript' src="{{asset('assets/js/swiper.min.js')}}"></script>
<script type='text/javascript' src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
<script type='text/javascript' src="{{asset('assets/js/jquery.collapsible.min.js')}}"></script>
<script type='text/javascript' src="{{asset('assets/js/custom.js')}}"></script>
<script type='text/javascript' src="{{asset('assets/js/timer.js')}}"></script>


</body>
</html>





