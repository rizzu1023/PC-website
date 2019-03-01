@extends('layout.base')
@extends('layout.sidebar')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
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
                                                <h4>Feedback</h4>
                                                
                                            </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                               <tr>
													<th width="50px"><b>Name</b></th>
													<th width="50px"><b>event_name</b></th>
													
													<th width="30px"><b>comment</b></th>
													<th width="30px"><b>suggestion</b></th>
													<th width="30px"><b>rating</b></th>
												</tr>
												@foreach($feedback as $fb)
													<tr>
														<td><b>{{++$i}}</b></td>
													
														<td>{{$fb->username}}</td>
														<td>{{$fb->event_name}}</td>
														<td>{{$fb->comment}}</td>
														<td>{{$fb->suggestion}}</td>
														<td>{{$fb->rating}}</td>
														<td>
												<form action="/admin/feedback/delete/{{$fb->id}}" method="POST">
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