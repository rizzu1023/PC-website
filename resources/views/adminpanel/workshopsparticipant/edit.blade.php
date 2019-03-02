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
         <title>Workshops</title>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Edit workshop Participant</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">

                                    <form  method ="POST" action="/admin/Workshopsparticipants/edit/{{$workshopparticipant->id}}">
                                        @csrf
                                        
                                            <div class="form-group">
                                                <label class="text-muted m-b-15 f-s-12">workshop_name</label>
                                                <input type="text" value="{{$workshopparticipant->workshop_name}}" class="form-control input-default placeholder="Workshop name" name="workshopname" >
                                            </div>
                                            <div class="form-group">
                                               <p class="text-muted m-b-15 f-s-12">Name</p>
                                                <input type="text" value="{{$workshopparticipant->username}}" class="form-control input-default" placeholder="Username" name="name" >
                                            </div>
                                            
                                             <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">email</p>
                                                <input type="email" value="{{$workshopparticipant->email}}" class="form-control input-default" placeholder="Email" name="email" required>
                                            </div>

                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Contact</p>
                                                <input type="number"   value="{{$workshopparticipant->contact}}" class="form-control input-default" placeholder="Email" name="contact" required>
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