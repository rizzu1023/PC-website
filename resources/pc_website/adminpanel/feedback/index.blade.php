@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>User Feedback</h3>
				
			</div>



				@if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

				<div class="col-md-10">
				<table class="table table-hover table-sm">
					<tr>
						<th width="50px"><b>username</b></th>
						<th width="50px"><b>event_name</b></th>
						
						<th width="30px"><b>comment</b></th>
						<th width="30px"><b>suggestion</b></th>
						<th width="30px"><b>rating</b></th>
					</tr>
					@foreach($feedback as $fb)
						<tr>
							<td><b>{{++$i}}</b></td>
						
							<td>{{$fb->username}}</td>
							<td>{{$fb->event_name}}</td>
							<td>{{$fb->comment}}</td>
							<td>{{$fb->suggestion}}</td>
							<td>{{$fb->rating}}</td>
							<td>
							 <a class="btn btn-sm btn-success" href="feedback/show/{{$fb->username}}">User details</a>
							 	 <form action="/feedback/delete/{{$fb->id}}" method="POST">
                                    @csrf
                                        <div class="col-sm-2">
                                                <button type="submit" class="btn btn-sm btn-warning"> delete</button>
                                        </div>
                                       </form>
                           
							 
</td>
    
        </tr>
      @endforeach
    </table>
{!! $feedback->links() !!}
  </div>
@endsection