@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Give Your feedback</h3>
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
 
    <form action="/feedback/add" method="post">
      @csrf
      <div class="row">
        
        <div class="col-md-5">
          <strong>username</strong>
          <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        

        <div class="col-md-10">
          <strong>event name</strong>
          <input type="text" name="eventname" class="form-control" placeholder="Event name">
        </div>

        <div class="col-md-10">
          <strong>comment</strong>
          <input type="text" name="comment" class="form-control" placeholder="Comments">
        </div>

        <div class="col-md-10">
          <strong>suggestion</strong>
          <input type="text" name="suggestion" class="form-control" placeholder="Any Suggestion">
        </div>
      
      <div class="col-md-10">
          <strong>suggestion</strong>
          <input type="text" name="rating" class="form-control" placeholder="Give rating from 1 to 5">
        </div>
      
      

        <div class="col-md-12">
          <a href="/feedback" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
