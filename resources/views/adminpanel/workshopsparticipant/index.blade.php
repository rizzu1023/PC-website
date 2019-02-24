@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>Workshops Participant</h3>
				
			</div>
			<div class="col-sm-2">
				<a class="btn btn-sm btn-success" href="/Workshopsparticipant/add">Add New Workshopparticipant</a>
				

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
						<th width="50px"><b>workshop_name</b></th>
						
						<th width="30px"><b>username</b></th>
						<th width="30px"><b>email</b></th>
					</tr>
					@foreach($workshops_participant as $workshopsparticipant)
						<tr>
							<td><b>{{++$i}}</b></td>
						
							<td>{{$workshopsparticipant->workshop_name}}</td>
							<td>{{$workshopsparticipant->username}}</td>
							<td>{{$workshopsparticipant->email}}</td>
						<td>
								
              <a class="btn btn-sm btn-success" href="Workshopsparticipant/show/{{$workshopsparticipant->id}}">User details</a>
              <a class="btn btn-sm btn-warning" href="/Workshopsparticipant/edit/{{$workshopsparticipant->id}}">Edit</a>
             

                               <form action="/Workshopsparticipant/delete/{{$workshopsparticipant->id}}" method="POST">
                                    @csrf
                                        <div class="col-sm-2">
                                                <button type="submit" class="btn btn-sm btn-warning"> delete</button>
                                        </div>
                                       </form>
                           
              <!-- <form method="POST" action="W>
    			{{ csrf_field() }}
    			{{ method_field('DELETE') }}
    			<button type="submit">Delete</button>
				</form>
             -->
          </td>
        </tr>
      @endforeach
    </table>
{!! $workshops_participant->links() !!}
  </div>
@endsection