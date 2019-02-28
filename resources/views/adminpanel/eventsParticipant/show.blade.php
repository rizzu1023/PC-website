{{--@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>Events Participant Detail</h3>
				


    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

	    <div class="col-md-10">
			<table class="table table-hover table-md">
				<tr>
					<th width="50px"><b>name</b></th>
					<th width="100px"><b>username</b></th>
					<th width="30px"><b>email</b></th>
					<th width="30px"><b>contact</b></th>
                    <th width="30px"><b>branch</b></th>
                    <th width="30px"><b>college name</b></th>
                    <th width="30px"><b>year</b></th>
                </tr>

                    <tr>
                         <td>{{$user1->name}}</td>
                        <td>{{$user1->username}}</td>
                        <td>{{$user1->email}}</td>
                        <td>{{$user1->contact}}</td>
                        <td>{{$user1->branch}}</td>
                        <td>{{$user1->college_name}}</td>
                        <td>{{$user1->year}}</td>
                    </tr>

                    <tr>
                         <td>{{$user2->name}}</td>
                        <td>{{$user2->username}}</td>
                        <td>{{$user2->email}}</td>
                        <td>{{$user2->contact}}</td>
                        <td>{{$user2->branch}}</td>
                        <td>{{$user2->college_name}}</td>
                        <td>{{$user2->year}}</td>
                    </tr>
                    
                    <tr>
                         <td>{{$user3->name}}</td>
                        <td>{{$user3->username}}</td>
                        <td>{{$user3->email}}</td>
                        <td>{{$user3->contact}}</td>
                        <td>{{$user3->branch}}</td>
                        <td>{{$user3->college_name}}</td>
                        <td>{{$user3->year}}</td>
                    </tr>
                    
                    <tr>
                         <td>{{$user4->name}}</td>
                        <td>{{$user4->username}}</td>
                        <td>{{$user4->email}}</td>
                        <td>{{$user4->contact}}</td>
                        <td>{{$user4->branch}}</td>
                        <td>{{$user4->college_name}}</td>
                        <td>{{$user4->year}}</td>
                    </tr>
                    
                    
    </table>
  </div>
@endsection--}}




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
         <title>Event Info</title>
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
                                    <a class="btn btn-sm btn-success" href="/admin/eventsParticipant">Go Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <section id="main-content">
                        <div class="col-md-10">
            <table class="table table-hover table-md">
                <tr>
                    <th width="50px"><b>name</b></th>
                    <th width="100px"><b>username</b></th>
                    <th width="30px"><b>email</b></th>
                    <th width="30px"><b>contact</b></th>
                    <th width="30px"><b>branch</b></th>
                    <th width="30px"><b>college name</b></th>
                    <th width="30px"><b>year</b></th>
                </tr>

                    <tr>
                         <td>{{$user1->name}}</td>
                        <td>{{$user1->username}}</td>
                        <td>{{$user1->email}}</td>
                        <td>{{$user1->contact}}</td>
                        <td>{{$user1->branch}}</td>
                        <td>{{$user1->college_name}}</td>
                        <td>{{$user1->year}}</td>
                    </tr>

                    <tr>
                         <td>{{$user2->name}}</td>
                        <td>{{$user2->username}}</td>
                        <td>{{$user2->email}}</td>
                        <td>{{$user2->contact}}</td>
                        <td>{{$user2->branch}}</td>
                        <td>{{$user2->college_name}}</td>
                        <td>{{$user2->year}}</td>
                    </tr>
                    
                    <tr>
                         <td>{{$user3->name}}</td>
                        <td>{{$user3->username}}</td>
                        <td>{{$user3->email}}</td>
                        <td>{{$user3->contact}}</td>
                        <td>{{$user3->branch}}</td>
                        <td>{{$user3->college_name}}</td>
                        <td>{{$user3->year}}</td>
                    </tr>
                    
                    <tr>
                         <td>{{$user4->name}}</td>
                        <td>{{$user4->username}}</td>
                        <td>{{$user4->email}}</td>
                        <td>{{$user4->contact}}</td>
                        <td>{{$user4->branch}}</td>
                        <td>{{$user4->college_name}}</td>
                        <td>{{$user4->year}}</td>
                    </tr>
                    
                    
    </table>
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