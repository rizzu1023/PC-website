@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>Contatc Us Detail</h3>
				
			</div>
			<div class="col-sm-2">
            <a class="btn btn-sm btn-success" href="contact/add">Add Problem Definition</a>
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
					<th width="100px"><b>Name</b></th>
					<th width="100px"><b>Contact</b></th>
                </tr>
                    @foreach($contact_us as $contactus)
                    <tr>
                        
                        <td>{{$contactus->id}}</td>
                        <td>{{$contactus->name}}</td>
                        <td>{{$contactus->contact}}</td>
                        <td>
                                <div class="col-sm-2">
                                    <a class="btn btn-sm btn-warning" href="/contact/edit/{{$contactus->id}}">Edit</a>
                                </div>
                                <form action="/contact/delete/{{$contactus->id}}" method="POST">
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