<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> -->

    <style>
    .probootstrap-page-wrapper{
        margin:0;
      }
      body{
        margin:0;
        padding:0;
      }
      html{
        margin:0;
        padding:0;
      }
      .probootstrap-search {
        right:0;
      }
   </style>


  
  </head>
@include('frontend.layouts.header')
  <body>
  <main>    
      @yield('content') 
  </main>

 @include('frontend.layouts.footer')
    <script src="{{asset('assets/js/scripts.min.js')}}"></script>
    <script src="{{asset('assets/js/main.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

  </body>
</html>
