@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New Events</h3>
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
 
    <form action="/eventsInfo/add" method="post">
      @csrf
      <div class="row">
         <div class="col-md-12">
          <strong>Event Name</strong>
          <input type="text" name="name" class="form-control" placeholder="Event Name">
        </div>

        <div class="col-md-12">
          <strong>Tag-Line</strong>
          <input type="text" name="tagline" class="form-control" placeholder="Event Title">
        </div>
        
        <div class="col-md-5">
          <strong>Banner Image</strong><br>
          <input type="file" name="banner">
        </div>
        
        <div class="col-md-12">
          <strong>About</strong>
          <textarea class="form-control" placeholder="About Workshop" name="about" rows="8" cols="80"></textarea>
        </div>

        <div class="col-md-12">
            <strong>Theme</strong>
            <input type="text" name="theme" class="form-control" placeholder="Event theme">
        </div>

        <div class="col-md-12">
            <strong>Keypoints</strong>
            <input type="text" name="keypoints" class="form-control" placeholder="Event Keypoints">
        </div>

        <div class="col-md-12">
            <strong>Status</strong>
            <input type="text" name="status" class="form-control" placeholder="Events Status">
        </div>

        <div class="col-md-12">
          <a href="/events" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
