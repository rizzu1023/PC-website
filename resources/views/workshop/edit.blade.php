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

    <form action="{{route('workshop.update',$workshop->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Workshop ID</strong>
          <input type="text" name="workshop_id" class="form-control" value="{{$workshop->workshop_id}}">
        </div>

        <strong>Title</strong>
          <input type="text" name="title" class="form-control" value="{{$workshop->title}}">
        </div>

        <div class="col-md-12">
          <strong>Banner Image</strong>
          <textarea class="form-control" name="about" rows="8" cols="80">{{$workshop->banner_image}}</textarea>
        </div>

        <strong>About</strong>
          <input type="text" name="about" class="form-control" value="{{$workshop->about}}">
        </div>

        <div class="col-md-12">
          <a href="{{route('workshop.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
