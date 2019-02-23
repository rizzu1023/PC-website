@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>Events Information</h3>
				
			</div>
			<div class="col-sm-2">
            <a class="btn btn-sm btn-success" href="/eventsInfo/add">Add New Events</a>
			</div><br>


    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

	    <div class="col-md-10">
			<table class="table table-hover table-md">
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
                                    <a class="btn btn-sm btn-warning" href="/eventsInfo/edit/{{$eventsInfo->id}} ">Edit</a>
                                </div>
                                <form action="/eventsInfo/delete/{{$eventsInfo->id}}" method="POST">
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
@endsection