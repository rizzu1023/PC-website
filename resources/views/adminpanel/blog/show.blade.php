

@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail of Blog</h3>
        <hr>
      </div>
    </div>
    

    <div class="col-md-12">
        <div class="form-group">
          <strong>Title</strong> {{$blog->title}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Description</strong> {{$blog->desc}}
        </div>
      </div>

     
       <div class="col-md-12">
        <div class="form-group">
          <strong>Body</strong> {{$blog->body}}
        </div>
      </div>


       <div class="col-md-12">
        <div class="form-group">
          <strong>Image</strong> {{$blog->img}}
        </div>
      </div>





      <div class="col-md-12">
        <a href="/blog" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection
