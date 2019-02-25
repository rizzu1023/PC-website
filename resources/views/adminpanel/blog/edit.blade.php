@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Blog</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="/blog/edit/{{$blog->id}}" method="post">
      {{csrf_field()}}
    
      
 <div class="col-md-12">
        <strong>Title</strong>
          <input type="text" name="title" class="form-control" value="{{$blog->title}}">
        </div>

         <div class="col-md-12">
          <strong>Description</strong>
           <input type="text" name="desc" class="form-control" value="{{$blog->desc}}">
        </div>


        <div class="col-md-12">
          <strong>Body</strong>
           <input type="text" name="body" class="form-control" value="{{$blog->body}}">
        </div>

        <div class="col-md-12">
          <strong>Image</strong>
           <input type="text" name="img" class="form-control" value="{{$blog->img}}">
        </div>

        <div class="col-md-12">
          <a href="Workshopsparticipant" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
