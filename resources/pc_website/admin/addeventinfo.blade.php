@extends('layout.base')
@include('layout.sidebar')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Info</title>
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

</body>
</html>