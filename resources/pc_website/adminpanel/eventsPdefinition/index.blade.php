
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
                                    <a class="btn btn-sm btn-success"href="/admin/events">Go Back</a>
                                    <a class="btn btn-sm btn-success" href="eventsPdefinition/add">Add New Event Problem Definition</a>
                                    
                                    
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
                                                <h4>Event Problem Definition</h4>
                                                
                                            </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="50px"><b>Sr No</b></th>
                                                    <th width="100px"><b>Title</b></th>
                                                    <th width="20px"><b>Description</b></th>
                                                    <th width="30px"><b>Status</b></th>
                                                </tr>
                                            </thead>

                                             @foreach($eventsPdefinition as $eventsPdefinition)
                                            <tr>
                        
                                                <td>{{$eventsPdefinition->id}}</td>
                                                <td>{{$eventsPdefinition->title}}</td>
                                                <td>{{$eventsPdefinition->description}}</td>
                                                <td>{{$eventsPdefinition->status}}</td>
                                                <td>
                                           

                                                    <div class="col-sm-2">
                                                        <a class="btn btn-sm btn-warning" href="/admin/eventsPdefinition/edit/{{$eventsPdefinition->id}}">Edit</a>
                                                    </div>
                                                    <form action="/admin/eventsPdefinition/delete/{{$eventsPdefinition->id}}" method="POST">
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