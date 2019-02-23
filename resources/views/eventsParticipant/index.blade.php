@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>Events Participant Detail</h3>
				
			</div>
			<div class="col-sm-2">
            <a class="btn btn-sm btn-success" href="/eventsParticipant/add">Add New Paricipant</a>
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
					<th width="100px"><b>Event Name</b></th>
					<th width="30px"><b>Team Name</b></th>
					<th width="30px"><b>No_Of_Member</b></th>
					<th width="30px"><b>Participant 1</b></th>
                    <th width="30px"><b>Participant 2</b></th>
                    <th width="30px"><b>Participant 3</b></th>
                    <th width="40px"><b>Participant 4</b></th>
                    <th width="40px"><b>Payment</b></th>
                </tr>
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
                                    <a class="btn btn-sm btn-warning" href="/eventsParticipant/edit/{{$eventsParticipant->id}}">Edit</a>
                                </div>
                                <form action="/eventsParticipant/delete/{{$eventsParticipant->id}}" method="POST">
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