@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>Events Problem Definition Detail</h3>
				
			</div>
			<div class="col-sm-2">
            <a class="btn btn-sm btn-success" href="/eventsPdefinition/add">Add Problem Definition</a>
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
					<th width="100px"><b>Title</b></th>
					<th width="30px"><b>Description</b></th>
					<th width="30px"><b>Status</b></th>
                </tr>
                    @foreach($eventsPdefinition as $eventsPdefinition)
                    <tr>
                        
                        <td>{{$eventsPdefinition->id}}</td>
                        <td>{{$eventsPdefinition->title}}</td>
                        <td>{{$eventsPdefinition->description}}</td>
                        <td>{{$eventsPdefinition->status}}</td>
                        <td>
                                <div class="col-sm-2">
                                    <a class="btn btn-sm btn-warning" href="/eventsPdefinition/edit/{{$eventsPdefinition->id}}">Edit</a>
                                </div>
                                <form action="/eventsPdefinition/delete/{{$eventsPdefinition->id}}" method="POST">
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