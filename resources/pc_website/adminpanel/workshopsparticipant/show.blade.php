
@extends('layout.base')
@extends('layout.sidebar')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
         <title>User Info</title>
    <body>

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
                                    <a class="btn btn-sm btn-success" href="/admin/Workshopsparticipants">Go Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <section id="main-content">


          <div class="col-md-12">
              <div class="form-group">
                <strong>name</strong> {{$users->name}}
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <strong>username</strong> {{$users->username}}
              </div>
            </div>

           
             <div class="col-md-12">
              <div class="form-group">
                <strong>email</strong> {{$users->email}}
              </div>
            </div>


             <div class="col-md-12">
              <div class="form-group">
                <strong>contact</strong> {{$users->contact}}
              </div>
            </div>


            <div class="col-md-12">
              <div class="form-group">
                <strong>college name</strong> {{$users->college_name}}
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <strong>Branch</strong> {{$users->branch}}
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <strong>Year</strong> {{$users->year}}
              </div>
            </div>


                           
                    
    
  </div>
                    </section>
                </div>  
            </div>
        </div>

            
          <script src="assets/js/lib/jquery.min.js"></script>
        <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
        <!-- nano scroller
        <script src="assets/js/lib/menubar/sidebar.js"></script>
        <script src="assets/js/lib/preloader/pace.min.js"></script>
        <!-- sidebar -->
        <script src="assets/js/lib/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <!-- scripit init-->
</body>
</body>
</html>
@endsection