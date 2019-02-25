@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>list of workshops</h3>
				
			</div>
			<div class="col-sm-2">
				<a class="btn btn-sm btn-success" href="/Workshop/add">Add New Workshop</a>
				

			</div>
				<br>



				@if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

				<div class="col-md-10">
				<table class="table table-hover table-sm">
					<tr>
						<th width="50px"><b>no</b></th>
						
						<th width="30px"><b>title</b></th>
						<th width="30px"><b>banner_image</b></th>
						<th width="30px"><b>about</b></th>
						<th width="30px"><b>action</b></th>
					</tr>
					@foreach($workshop as $workshop)
						<tr>
							<td><b>{{++$i}}</b></td>
							
							<td>{{$workshop->title}}</td>
							<td>{{$workshop->banner_image}}</td>
							<td>{{$workshop->about}}</td>
							<td>{{$workshop->status}}</td>
							<td>
					
					 <a class="btn btn-sm btn-success" href="Workshop/show/{{$workshop->id}}">Show</a>
              <a class="btn btn-sm btn-warning" href="/Workshop/edit/{{$workshop->id}}">Edit</a>
             

                               <form action="/Workshop/delete/{{$workshop->id}}" method="POST">
                                    @csrf
                                        <div class="col-sm-2">
                                                <button type="submit" class="btn btn-sm btn-warning"> delete</button>
                                        </div>
                                       </form>
                           
            
          </td>
        </tr>
      @endforeach
    </table>

  </div>
@endsection