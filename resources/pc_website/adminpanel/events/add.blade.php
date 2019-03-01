@extends('layout.base')
@extends('layout.sidebar')
@section('content')
<!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event</title>

</head>
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
                                    <h4>Add Event</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="/admin/events/add" method="post">
                                          @csrf
                                            <div class="form-group">
                                                <input type="text" class="form-control input-default " name="name" placeholder="Event Name" required>
                                            </div>
                                            <div class="form-group">
                                                
                                                <input type="text" class="form-control input-default" name="tagline" placeholder="Tagline" required>
                                            </div>
                                            <div class="form-group">
                                               <p class="text-muted m-b-15 f-s-12">Upload Image</p>
                                                <input type="file" class="form-control input-default" name="banner" >
                                            </div>
                                             <div class="form-group">   
                                                <textarea   class="form-control input-default" name="about" placeholder="Event Discription"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <textarea   class="form-control input-default" name="theme" placeholder="Event Theme"></textarea>
                                            </div>
                                             <div class="form-group">
                                                <textarea   class="form-control input-default" name="keypoints" placeholder="KeyPoints"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted m-b-15 f-s-20">Staus</label>
                                                        <select class="form-control" name="status">
                              <option>Active</option>
                              <option>Inactive</option>
                            </select>
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
</html>
@endsection