@extends('layout.base')
@include('layout.sidebar')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Event Dashboard</title>
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
                                    <button type="button" class="btn btn-primary m-b-10 m-l-5">+  Add Event</button>
                                    <button type="button" class="btn btn-primary m-b-10 m-l-5">+  Add EventInfo</button>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard -->
                     <section id="main-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-title">
                                                <h4>Event Dashboard</h4>
                                                
                                            </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No</th>
                                                    <th>Event Name</th>
                                                    <th>Tagline</th>
                                                    <th>Image</th>
                                                    <th>About Event</th>
                                                    <th>Event Theme</th>
                                                    <th>Keypoint</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>Donna Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                    <td><button type="button" class="btn btn-warning btn-sm m-b-10 m-l-5">Edit</button>
                                                    <button type="button" class="btn btn-danger btn-sm m-b-10 m-l-5">Delete</button>
                                                    <button type="button" class="btn btn-success btn-sm m-b-10 m-l-5">View Participants</button>
                                                    <button type="button" class="btn btn-success btn-sm m-b-10 m-l-5">Schedule</button>
                                                    <button type="button" class="btn btn-success btn-sm m-b-10 m-l-5">Problem Defination</button>
                                                    <button type="button" class="btn btn-success btn-sm m-b-10 m-l-5">Winners</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </section>
                <!-- End dashboard -->
                </div>  
            </div>
        </div>
</body>
</html>