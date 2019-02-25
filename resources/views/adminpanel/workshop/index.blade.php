@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>list of workshops</h3>
				
			</div>
			<div class="col-sm-2">
				<a class="btn btn-sm btn-success" href="{{ route('workshop.create') }}">Add New Workshop</a>
				

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
						<th width="100px"><b>workshop_id</b></th>
						<th width="30px"><b>title</b></th>
						<th width="30px"><b>banner_image</b></th>
						<th width="30px"><b>about</b></th>
						<th width="30px"><b>action</b></th>
					</tr>
					@foreach($workshops as $workshop)
						<tr>
							<td><b>{{++$i}}</b></td>
							<td>{{$workshop->workshop_id}}</td>
							<td>{{$workshop->title}}</td>
							<td>{{$workshop->banner_image}}</td>
							<td>{{$workshop->about}}</td>
							<td>
								<form action="{{ route('workshop.destroy', $workshop->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('workshop.show',$workshop->id)}}">Show</a>
              <a class="btn btn-sm btn-warning" href="{{route('workshop.edit',$workshop->id)}}">Edit</a>
              @csrf
                            @method('DELETE')

              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>
{!! $workshops->links() !!}
  </div>
@endsection