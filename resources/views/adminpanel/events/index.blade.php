{{-- @extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>List of Events</h3>
				
			</div>
			<div class="col-sm-2">
            <a class="btn btn-sm btn-success" href="/events/add">Add New Events</a>
			</div><br>


    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

	    <div class="col-md-10">
			<table class="table table-hover table-md">
				<tr>
					<th width="50px"><b> Sr No</b></th>
					<th width="100px"><b>Name</b></th>
					<th width="30px"><b>Tagline</b></th>
					<th width="30px"><b>Bnner</b></th>
					<th width="30px"><b>About</b></th>
                    <th width="30px"><b>Theme</b></th>
                    <th width="30px"><b>Keypoints</b></th>
                    <th width="40px"><b>Status</b></th>
                </tr>
                    @foreach($event as $event)
                    <tr>
                        
                        <td>{{$event->id}}</td>
                        <td>{{$event->event_name}}</td>
                        <td>{{$event->tagline}}</td>
                        <td>{{$event->banner_image}}</td>
                        <td>{{$event->about_event}}</td>
                        <td>{{$event->event_theme}}</td>
                        <td>{{$event->keypoints}}</td>
                        <td>{{$event->status}}</td>
                        <td>
                                <div class="col-sm-2">
                                    <a class="btn btn-sm btn-warning" href="events/edit/{{$event->id}} ">Edit</a>
                                </div>
                                <form action="/events/delete/{{$event->id}}" method="POST">
                                    @csrf
                                        <div class="col-sm-2">
                                                <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                        </div>
                            </div>
                         </td>
                    </tr>
                    @endforeach
    </table>
  </div>
@endsection --}}
        @extends('layout.base')
        @extends('layout.sidebar')
        @section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Event Dashboard</title>
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
                                    <a class="btn btn-sm btn-success" href="/events/add">Add New Events</a>
                                    <a class="btn btn-sm btn-success">Add EventInfo</a>
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
                                                <h4>Event Dashboard</h4>
                                                
                                            </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Event Name</th>
                                                    <th>Tagline</th>
                                                    <th>Banner</th>
                                                    <th>About Event</th>
                                                    <th>Theme</th>
                                                    <th>Keypoints</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>

                                            @foreach($event as $event)
                                              <tr>
                        
                                                <td>{{$event->id}}</td>
                                                <td>{{$event->event_name}}</td>
                                                <td>{{$event->tagline}}</td>
                                                <td>{{$event->banner_image}}</td>
                                                <td>{{$event->about_event}}</td>
                                                <td>{{$event->event_theme}}</td>
                                                <td>{{$event->keypoints}}</td>
                                                <td>{{$event->status}}</td>
                                                <td>
                                                    <div class="col-sm-2">
                                                        <a class="btn btn-sm btn-warning" href="events/edit/{{$event->id}} ">Edit</a>
                                                    </div>
                                                    <form action="/events/delete/{{$event->id}}" method="POST">
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