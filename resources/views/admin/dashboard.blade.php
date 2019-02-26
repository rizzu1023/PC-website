<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <link href="{{asset('assets/css/lib/weather-icons.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/lib/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/lib/themify-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/lib/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/lib/helper.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    </head>

    <body>
      <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Programmers Club</span></a></div>
                    <ul>
                        <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard  </a>
                        <li ><a class="sidebar-sub-toggle"><i class="ti-stack-overflow"></i> Blog </a>
                        <li><a class="sidebar-sub-toggle"><i class="ti-pin-alt"></i> Events </a>
                        <li><a class="sidebar-sub-toggle"><i class="ti-spray"></i> Workshop </a>
                        <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Poll  </a>
                        <li><a class="sidebar-sub-toggle"><i class="ti-money"></i> Sponsor </a>
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
                                                <h4>Dashboard</h4>
                                                
                                            </div>
                     <div class="card-body">
                        <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money color-success border-success"></i></div>
                                <div class="stat-content dib">
                                <div class="stat-text">Total Profit</div>
                                <div class="stat-digit">1,012</div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i></div>
                                <div class="stat-content dib">
                                <div class="stat-text">Member</div>
                                <div class="stat-digit">961</div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i></div>
                                <div class="stat-content dib">
                                <div class="stat-text">s Event</div>
                                <div class="stat-digit">770</div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div>
                                <div class="stat-content dib">
                                <div class="stat-text">Referral</div>
                                <div class="stat-digit">2,781</div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i></div>
                                <div class="stat-content dib">
                                <div class="stat-text">Member</div>
                                <div class="stat-digit">961</div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i></div>
                                <div class="stat-content dib">
                                <div class="stat-text">Member</div>
                                <div class="stat-digit">961</div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i></div>
                                <div class="stat-content dib">
                                <div class="stat-text">Member</div>
                                <div class="stat-digit">961</div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i></div>
                                <div class="stat-content dib">
                                <div class="stat-text">Member</div>
                                <div class="stat-digit">961</div>
                                </div>
                            </div>
                            </div>
                        </div>  
                        </div>
                                
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