
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
                                        <a class="btn btn-sm btn-success" href="/admin/events">Go Back</a>
                                    <a class="btn btn-sm btn-success" href="/admin/eventsInfo/add">Add New Event Info</a>
                                    <!-- <a class="btn btn-sm btn-success"href="/admin/eventsInfo">List Event Info</a> -->
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
                                                <h4>List of Event Info</h4>
                                                
                                            </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="50px"><b>Sr No</b></th>
                                                    <th width="100px"><b>Duration</b></th>
                                                    <th width="30px"><b>Date</b></th>
                                                    <th width="30px"><b>Time</b></th>
                                                    <th width="30px"><b>Location</b></th>
                                                    <th width="30px"><b>Eligible Department</b></th>
                                                    <th width="30px"><b>Fees</b></th>
                                                    <th width="40px"><b>Max Member</b></th>

                                                    </tr>
                                            </thead>

                                            @foreach($eventsInfo as $eventsInfo)
                                            <tr>
                        
                                             <td>{{$eventsInfo->id}}</td>
                                             <td>{{$eventsInfo->duration}}</td>
                                            <td>{{$eventsInfo->date}}</td>
                                            <td>{{$eventsInfo->time}}</td>
                                            <td>{{$eventsInfo->location}}</td>
                                            <td>{{$eventsInfo->eligible_departments}}</td>
                                            <td>{{$eventsInfo->fees }}</td>
                                            <td>{{$eventsInfo->max_member}}</td>
                                             <td>
                                                <div class="col-sm-2">
                                                        <a class="btn btn-sm btn-warning" href="/admin/eventsInfo/edit/{{$eventsInfo->id}} ">Edit</a>
                                                    </div>
                                                    <form action="/admin/eventsInfo/delete/{{$eventsInfo->id}}" method="POST">
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