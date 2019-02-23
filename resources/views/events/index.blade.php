@extends('layouts.app')
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
					<th width="50px"><b>Sr No</b></th>
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
@endsection