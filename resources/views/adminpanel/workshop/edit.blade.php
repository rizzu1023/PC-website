@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Workshops</h3>
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

    <form action="/Workshop/edit/{{$workshop->id}}" method="post">
      @csrf
    
        <div class="col-md-12">
        <strong>Title</strong>
          <input type="text" name="title" class="form-control" value="{{$workshop->title}}">
        </div>

         <div class="col-md-12">
          <strong>Banner Image</strong>
           <input type="text" name="bannerimage" class="form-control" value="{{$workshop->banner_image}}">
        </div>


        <div class="col-md-12">
          <strong>About</strong>
           <input type="text" name="about" class="form-control" value="{{$workshop->about}}">
        </div>

        <div class="col-md-12">
        <strong>Status</strong>
          <input type="text" name="status" class="form-control" value="{{$workshop->status}}">
        </div>

         


        <div class="col-md-12">
          <a href="Workshops" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
