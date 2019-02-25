@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>Events Participant Detail</h3>
				


    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

	    <div class="col-md-10">
			<table class="table table-hover table-md">
				<tr>
					<th width="50px"><b>name</b></th>
					<th width="100px"><b>username</b></th>
					<th width="30px"><b>email</b></th>
					<th width="30px"><b>contact</b></th>
                    <th width="30px"><b>branch</b></th>
                    <th width="30px"><b>college name</b></th>
                    <th width="30px"><b>year</b></th>
                </tr>

                    <tr>
                         <td>{{$user1->name}}</td>
                        <td>{{$user1->username}}</td>
                        <td>{{$user1->email}}</td>
                        <td>{{$user1->contact}}</td>
                        <td>{{$user1->branch}}</td>
                        <td>{{$user1->college_name}}</td>
                        <td>{{$user1->year}}</td>
                    </tr>

                    <tr>
                         <td>{{$user2->name}}</td>
                        <td>{{$user2->username}}</td>
                        <td>{{$user2->email}}</td>
                        <td>{{$user2->contact}}</td>
                        <td>{{$user2->branch}}</td>
                        <td>{{$user2->college_name}}</td>
                        <td>{{$user2->year}}</td>
                    </tr>
                    
                    <tr>
                         <td>{{$user3->name}}</td>
                        <td>{{$user3->username}}</td>
                        <td>{{$user3->email}}</td>
                        <td>{{$user3->contact}}</td>
                        <td>{{$user3->branch}}</td>
                        <td>{{$user3->college_name}}</td>
                        <td>{{$user3->year}}</td>
                    </tr>
                    
                    <tr>
                         <td>{{$user4->name}}</td>
                        <td>{{$user4->username}}</td>
                        <td>{{$user4->email}}</td>
                        <td>{{$user4->contact}}</td>
                        <td>{{$user4->branch}}</td>
                        <td>{{$user4->college_name}}</td>
                        <td>{{$user4->year}}</td>
                    </tr>
                    
                    
    </table>
  </div>
@endsection