@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h2>Blog</h2>
				
			</div>
			<div class="col-sm-2">
				<a class="btn btn-sm btn-success" href="/blog/add">Add New Blog</a>
				

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
						<th width="30px"><b>Title</b></th>
						<th width="10px"><b>description</b></th>
						<th width="30px"><b>body</b></th>
						<th width="30px"><b>img</b></th>
					</tr>
					@foreach($blogs as $blog)
						<tr>
							<td><b>{{++$i}}</b></td>
							
							<td>{{$blog->title}}</td>
							<td>{{$blog->desc}}</td>
							<td>{{$blog->body}}</td>
							<td>{{$blog->img}}</td>
						
								
              <a class="btn btn-sm btn-success" href="blog/show">Show</a>
              <a class="btn btn-sm btn-warning" href="blog/edit/{{$blog->id}}">Edit</a>
             

              <form action="/blog/delete/{{$blog->id}}" method="POST">
                                    @csrf
                                        <div class="col-sm-2">
                                                <button type="submit" class="btn btn-sm btn-warning"> delete</button>
                                        </div>
                                       </form>
                           

             </td>
        </tr>
      @endforeach
    </table>
{!! $blogs->links() !!}
  </div>
@endsection