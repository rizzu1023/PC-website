@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>Workshop info</h3>
				
			</div>
			<div class="col-sm-2">
				<a class="btn btn-sm btn-success" href="/Workshopnew/add">Add New WorkshopInfo</a>
				

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
						<!-- <th width="100px"><b>workshop_id</b></th> -->
						<th width="30px"><b>duration</b></th>
						<th width="30px"><b>workshop date</b></th>
						<th width="30px"><b>workshop time</b></th>
						<th width="30px"><b>location</b></th>
						<th width="30px"><b>fees</b></th>
						<th width="30px"><b>notes</b></th>
					</tr>
					@foreach($workshops_info as $workshopinfo)
						<tr>
							<td><b>{{++$i}}</b></td>
							
							<td>{{$workshopinfo->duration}}</td>
							<td>{{$workshopinfo->workshop_date}}</td>
							<td>{{$workshopinfo->workshop_time}}</td>
							<td>{{$workshopinfo->location}}</td>
							<td>{{$workshopinfo->fees}}</td>
							<td>{{$workshopinfo->notes}}</td>
							<td>
								
              <a class="btn btn-sm btn-success" href="Workshopnew/show">Show</a>
              <a class="btn btn-sm btn-warning" href="Workshopnew/edit/{{$workshopinfo->id}}">Edit</a>
             

              <a href="{{action('WorkshopNew@delete',$workshopinfo['id'])}}">Delete</a>

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
{!! $workshops_info->links() !!}
  </div>
@endsection