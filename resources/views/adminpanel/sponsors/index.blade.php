@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>Our Sponsors</h3>
				
			</div>
			<div class="col-sm-2">
				<a class="btn btn-sm btn-success" href="/sponsors/add">Add New Sponsor</a>
				

			</div>
			@if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

				<div class="col-md-10">
				<table class="table table-hover table-sm">
					<tr>
						<th width="50px"><b>company name</b></th>
						<th width="50px"><b>company logo</b></th>
						
					</tr>
					@foreach($sponsors as $sponsor)
						<tr>
							<td><b>{{++$i}}</b></td>
						
							<td>{{$sponsor->company_name}}</td>
							<td>{{$sponsor->company_logo}}</td>
							<td>
							 <a class="btn btn-sm btn-success" href="sponsors/edit/{{$sponsor->id}}">Edit</a>
							 	 <form action="/sponsors/delete/{{$sponsor->id}}" method="POST">
                                    @csrf
                                        <div class="col-sm-2">
                                                <button type="submit" class="btn btn-sm btn-warning"> delete</button>
                                        </div>
                                       </form>
                           
							 
</td>
    
        </tr>
      @endforeach
    </table>
{!! $sponsors->links() !!}
  </div>
@endsection