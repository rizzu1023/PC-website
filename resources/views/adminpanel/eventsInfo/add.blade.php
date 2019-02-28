{{--@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Add Events Information</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif
 
    <form action="/eventsInfo/add" method="post">
      @csrf
      <div class="row">
         <div class="col-md-12">
          <strong>Duration</strong>
          <input type="text" name="duration" class="form-control" placeholder="eg:-27 Hours">
        </div>

        <div class="col-md-12">
          <strong>Date</strong>
          <input type="date" name="date" class="form-control" placeholder="">
        </div>
        
        <div class="col-md-12">
          <strong>Time</strong>
          <input type="TIMESTAMP" name="time" class="form-control" placeholder="eg:- 10:00">
        </div>
        
        <div class="col-md-12">
          <strong>Location</strong><br>
          <input type="text" name="location" class="form-cointrol" placeholder="eg:- panvel">
        </div>

        <div class="col-md-12">
            <strong>eligible_departments</strong>
            <input type="text" name="elgibDept" class="form-control" placeholder="Eg:- Co, Extx">
        </div>

        <div class="col-md-12">
            <strong>Fees</strong>
            <input type="text" name="fees" class="form-control" placeholder="Eg:- 200">
        </div>

        <div class="col-md-12">
            <strong>Max Member</strong>
            <input type="number" name="mMember" class="form-control" placeholder="Eg:- 4">
        </div>

        <div class="col-md-12">
          <a href="/eventsInfo" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Info</title>
</head>
<body>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event Info</title>
    
        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

        <!-- Styles -->
        <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
        <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
        <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
        <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
        <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
        <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/lib/helper.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>
      <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Programmers Club</span></a></div>
                    <ul>
                        <li ><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard  </a>
                        <li><a class="sidebar-sub-toggle"><i class="ti-stack-overflow"></i> Blog </a>
                        <li><a class="sidebar-sub-toggle"><i class="ti-money"></i> Sponsor </a>
                        <li  class="active"><a class="sidebar-sub-toggle"><i class="ti-pin-alt"></i> Events </a>
                        <li><a class="sidebar-sub-toggle"><i class="ti-spray"></i> Workshop </a>
                        <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Poll  </a>
                        <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> PC Team </a>
                        <li><a class="sidebar-sub-toggle"><i class="ti-server"></i> User </a>
                        <li><a class="sidebar-sub-toggle"><i class="ti-comment"></i>  Feedback </a>
                        <li><a class="sidebar-sub-toggle"><i class="ti-agenda"></i> About Us  </a>
                        <li><a class="sidebar-sub-toggle"><i class="ti-email"></i> Contact Us </a>
   
                        <li><a><i class="ti-close"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->


        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="float-right">
                            <ul>

                             
                            
                                <li class="header-icon dib"><span class="user-avatar">John <i class="ti-angle-down f-s-10"></i></span>
                                    <div class="drop-down dropdown-profile">
                                   
                                        <div class="dropdown-content-body">
                                            <ul>
     
                                                <li><a href="#"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 p-r-0 title-margin-right">
                            <div class="page-header">
                                <div class="page-title">
                                    <h1>Hello, <span>Welcome Here</span></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                     <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Add Eventinfo</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">

                                    
                            


                                        <form  method ="POST" action="#">
                                        @csrf
                                        
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Duration</p>
                                                <input type="text" class="form-control input-default " name="duration" >
                                            </div>
                                            <div class="form-group">
                                               <p class="text-muted m-b-15 f-s-12">Date</p>
                                                <input type="date" class="form-control input-default" name="date" placeholder="Date" required>
                                            </div>
                                             <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Time</p>
                                                <input type="time" class="form-control input-default" placeholder="time" name="time" required>
                                            </div>
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Eligible Department</p>
                                                <input type="text" class="form-control input-default"   name="eligible_departments" required>
                                            
                                            </div>
                                             <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Fees</p>
                                                <input type="number" class="form-control input-default"  name="Fees" required>
                                            </div>
                                             <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Max Members</p>
                                                <input type="number" class="form-control input-default"  name="max_members" required>
                                            </div>

                                            <button type="submit" class="btn btn-primary m-b-10 m-l-5">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </div>  
            </div>
        </div>

            
          <script src="assets/js/lib/jquery.min.js"></script>
        <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
        <!-- nano scroller -->
        <script src="assets/js/lib/menubar/sidebar.js"></script>
        <script src="assets/js/lib/preloader/pace.min.js"></script>
        <!-- sidebar -->
        <script src="assets/js/lib/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <!-- scripit init-->
</body>
</body>
</html>
