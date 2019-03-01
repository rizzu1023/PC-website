@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>About Us Detail</h3>
				
			</div>
			<div class="col-sm-2">
            <a class="btn btn-sm btn-success" href="/about/add">Add Problem Definition</a>
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
					<th width="200px"><b>Pc_Detail</b></th>
                </tr>
                    @foreach($about_us as $about_us)
                    <tr>
                        
                        <td>{{$about_us->id}}</td>
                        <td>{{$about_us->pc_detail}}</td>
                        
                        <td>
                                <div class="col-sm-2">
                                    <a class="btn btn-sm btn-warning" href="/about/edit/{{$about_us->id}}">Edit</a>
                                </div>
                                <form action="/about/delete/{{$about_us->id}}" method="POST">
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