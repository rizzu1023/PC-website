@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>Pc members Details</h3>
				
			</div>
			<div class="col-sm-2">
            <a class="btn btn-sm btn-success" href="pcteam/add">Add New Member</a>
			</div><br>


    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

	    <div class="col-md-10">
			<table class="table table-hover table-md">
				<tr>
					<th width="100px"><b>Sr No</b></th>
					<th width="100px"><b>Member Name</b></th>
					<th width="100px"><b>Member image</b></th>
                </tr>
                    @foreach($pcteam as $pcteam)
                    <tr>
                        
                        <td>{{$pcteam->id}}</td>
                        <td>{{$pcteam->member_name}}</td>
                        <td>{{$pcteam->member_img}}</td>
                        <td>
                                <div class="col-sm-2">
                                    <a class="btn btn-sm btn-warning" href="/pcteam/edit/{{$pcteam->id}}">Edit</a>
                                </div>
                                <form action="/pcteam/delete/{{$pcteam->id}}" method="POST">
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