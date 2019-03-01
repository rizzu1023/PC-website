@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>Pc members Details</h3>
				
			</div>
			<div class="col-sm-2">
            <a class="btn btn-sm btn-success" href="pcteam/add">Add New Member</a>
			</div><br>


    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

	    <div class="col-md-10">
			<table class="table table-hover table-md">
				<tr>
					<th width="100px"><b>Sr No</b></th>
					<th width="100px"><b>Member Name</b></th>
					<th width="100px"><b>Member image</b></th>
                </tr>
                    @foreach($pcteam as $pcteam)
                    <tr>
                        
                        <td>{{$pcteam->id}}</td>
                        <td>{{$pcteam->member_name}}</td>
                        <td>{{$pcteam->member_img}}</td>
                        <td>
                                <div class="col-sm-2">
                                    <a class="btn btn-sm btn-warning" href="/pcteam/edit/{{$pcteam->id}}">Edit</a>
                                </div>
                                <form action="/pcteam/delete/{{$pcteam->id}}" method="POST">
                                    @csrf
                                        <div class="col-sm-2">
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </div>
                            </div>
                         </td>
                    </tr>
                    @endforeach
    </table>
  </div>
@endsection












@extends('layout.base')
        @extends('layout.sidebar')
        @section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sponsor</title>
</head>
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
                                    <div class="col-sm-12">
                                    
                                    <a class="btn btn-sm btn-success" href="/admin/sponsors/add">Add New Sponsor</a>
                                    
                                    
                                    </div>
                                     
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
                                                <h4>Sponsor</h4>
                                                
                                            </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                               <tr>
                                                    <th width="50px"><b>company name</b></th>
                                                    <th width="50px"><b>company logo</b></th>
                                                    
                                                </tr>
                                                @foreach($sponsors as $sponsor)
                                                    <tr>
                                                        <td><b>{{++$i}}</b></td>
                                                    
                                                        <td>{{$sponsor->company_name}}</td>
                                                        <td>{{$sponsor->company_logo}}</td>
                                                        <td>
                                                

                                                    <div class="col-sm-2">
                                                        <a class="btn btn-sm btn-warning" href="/admin/sponsors/edit/{{$sponsor->id}}">Edit</a>
                                                    </div>
                                                     
                                                   
                                                    <form action="/admin/sponsors/delete/{{$sponsor->id}}" method="POST">
                                                        @csrf
                                                            <div class="col-sm-2">
                                                                    <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                                            </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach

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
        @endsection
</body>
</html>