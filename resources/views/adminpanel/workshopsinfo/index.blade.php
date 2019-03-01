@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>Workshop info</h3>
				
			</div>
			<div class="col-sm-2">
				<a class="btn btn-sm btn-success" href="/Workshopnew/add">Add New WorkshopInfo</a>
				

			</div>
				<br>



				@if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

				<div class="col-md-10">
				<table class="table table-hover table-sm">
					<tr>
						<th width="50px"><b>no</b></th>
						<!-- <th width="100px"><b>workshop_id</b></th> -->
						<th width="30px"><b>duration</b></th>
						<th width="30px"><b>workshop date</b></th>
						<th width="30px"><b>workshop time</b></th>
						<th width="30px"><b>location</b></th>
						<th width="30px"><b>fees</b></th>
						<th width="30px"><b>notes</b></th>
					</tr>
					@foreach($workshops_info as $workshopinfo)
						<tr>
							<td><b>{{++$i}}</b></td>
							
							<td>{{$workshopinfo->duration}}</td>
							<td>{{$workshopinfo->workshop_date}}</td>
							<td>{{$workshopinfo->workshop_time}}</td>
							<td>{{$workshopinfo->location}}</td>
							<td>{{$workshopinfo->fees}}</td>
							<td>{{$workshopinfo->notes}}</td>
							<td>
								
              <a class="btn btn-sm btn-success" href="Workshopnew/show">Show</a>
              <a class="btn btn-sm btn-warning" href="Workshopnew/edit/{{$workshopinfo->id}}">Edit</a>
             

              <a href="{{action('WorkshopNew@delete',$workshopinfo['id'])}}">Delete</a>

              <!-- <form method="POST" action="W>
    			{{ csrf_field() }}
    			{{ method_field('DELETE') }}
    			<button type="submit">Delete</button>
				</form>
             -->
          </td>
        </tr>
      @endforeach
    </table>
{!! $workshops_info->links() !!}
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
    <title> Workshop Dashboard</title>
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
                                    <a class="btn btn-sm btn-success" href="/admin/Workshops">Go back</a>
                                    
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
                                                <h4>Workshop Info Dashboard</h4>
                                                
                                            </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                               	<tr>
													<th width="50px"><b>no</b></th>
													
														<th width="30px"><b>duration</b></th>
														<th width="30px"><b>workshop date</b></th>
														<th width="30px"><b>workshop time</b></th>
														<th width="30px"><b>location</b></th>
														<th width="30px"><b>fees</b></th>
														<th width="30px"><b>notes</b></th>
													</tr>
													@foreach($workshops_info as $workshopinfo)
													<tr>
													<td><b>{{++$i}}</b></td>
							
													<td>{{$workshopinfo->duration}}</td>
													<td>{{$workshopinfo->workshop_date}}</td>
													<td>{{$workshopinfo->workshop_time}}</td>
													<td>{{$workshopinfo->location}}</td>
													<td>{{$workshopinfo->fees}}</td>
													<td>{{$workshopinfo->notes}}</td>
													<tr>
					


                                                    <div class="col-sm-2">
                                                        <a class="btn btn-sm btn-warning" href="/admin/Workshopnew/edit/{{$workshopinfo->id}} ">Edit</a>
                                                    </div>
                                                    <form action="/admin/Workshopnew/delete/{{$workshopinfo->id}}" method="POST">
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
        
</body>
</html>
        @endsection