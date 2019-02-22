@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>List of Events</h3>
				
			</div>
			<div class="col-sm-2">
            <a class="btn btn-sm btn-success" href="events/add">Add New Events</a>
			</div><br>


    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

	    <div class="col-md-10">
			<table class="table table-hover table-sm">
				<tr>
					<th width="50px"><b>Sr No</b></th>
					<th width="100px"><b>Name</b></th>
					<th width="30px"><b>Tagline</b></th>
					<th width="30px"><b>Bnner</b></th>
					<th width="30px"><b>About</b></th>
                    <th width="30px"><b>Theme</b></th>
                    <th width="30px"><b>Keypoints</b></th>
                    <th width="30px"><b>Status</b></th>

                    @foreach($event as $event)
                    <tr>
                        <td><b>{{++$i}}</b></td>
                        <td>{{$event->event_name}}</td>
                        <td>{{$event->tagline}}</td>
                        <td>{{$event->banner_image}}</td>
                        <td>{{$event->about_event}}</td>
                        <td>
                            <form action="{{ route('workshop.destroy', $workshop->id) }}" method="post">
                                <a class="btn btn-sm btn-success" href="{{route('event.show',$workshop->id)}}">Show</a>
                                    <a class="btn btn-sm btn-warning" href="{{route('event.edit',$workshop->id)}}">Edit</a>
                                    @csrf
                                         @method('DELETE')

                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                         </td>
                    </tr>
                    @endforeach
    </table>
  </div>
@endsection