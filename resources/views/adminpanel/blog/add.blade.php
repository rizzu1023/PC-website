@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Add new Blog</h3>
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
 
    <form action="/blog/add" method="post">
      @csrf
      <div class="row">
        
        <div class="col-md-5">
          <strong>Title</strong>
          <input type="text" name="title" class="form-control" placeholder="Blog Title">
        </div>
        

        <div class="col-md-10">
          <strong>Descriprion</strong>
          <input type="text" name="desc" class="form-control" placeholder="Description">
        </div>

        <div class="col-md-10">
          <strong>Body</strong>
          <input type="text" name="body" class="form-control" placeholder="body">
        </div>
      
          <div class="col-md-10">
          <strong>Image</strong>
          <input type="text" name="body" class="form-control" placeholder="Image">
        </div>
      

        <div class="col-md-12">
          <a href="/blog" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
