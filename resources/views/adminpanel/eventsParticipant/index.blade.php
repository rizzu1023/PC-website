
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
                                    <a class="btn btn-sm btn-success" href="/admin/eventsParticipant/add">Add New Participants</a>
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
                                                    <th width="100px"><b>Event Name</b></th>
                                                    <th width="30px"><b>Team Name</b></th>
                                                    <th width="30px"><b>No_Of_Member</b></th>
                                                    <th width="30px"><b>Participant 1</b></th>
                                                    <th width="30px"><b>Participant 2</b></th>
                                                    <th width="30px"><b>Participant 3</b></th>
                                                    <th width="40px"><b>Participant 4</b></th>
                                                    <th width="40px"><b>Payment</b></th>
                                                
                                                    </tr>
                                            </thead>

                                            @foreach($eventsParticipant as $eventsParticipant)
                                            <tr>
                                                
                                                <td>{{$eventsParticipant->id}}</td>
                                                <td>{{$eventsParticipant->event_name}}</td>
                                                <td>{{$eventsParticipant->team_name}}</td>
                                                <td>{{$eventsParticipant->no_of_members}}</td>
                                                <td>{{$eventsParticipant->username_1}}</td>
                                                <td>{{$eventsParticipant->username_2}}</td>
                                                <td>{{$eventsParticipant->username_3 }}</td>
                                                <td>{{$eventsParticipant->username_4}}</td>
                                                <td>{{$eventsParticipant->payment}}</td>
                                                <td>
                                                <div class="col-sm-2">
                                                        <a class="btn btn-sm btn-warning" href="/admin/eventsParticipant/edit/{{$eventsParticipant->id}} ">Edit</a></div>

                                                <div class="col-sm-3">
                                                        <a class="btn btn-sm btn-warning" href="/admin/eventsParticipant/show/ ">User details</a>
                                                   
                                                    </div>
                                                    <form action="/admin/eventsParticipant/delete/{{$eventsParticipant->id}}" method="POST">
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