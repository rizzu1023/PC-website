@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Add Member Information</h3>
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
 
    <form action="/pcteam/add" method="post">
      @csrf
      <div class="row">
         <div class="col-md-12">
          <strong>Member Name</strong>
          <input type="text" name="membername" class="form-control" placeholder="eg:-Member Name">
        </div>
        
        <div class="col-md-12">
          <strong>Contact</strong>
          <input type="text" name="memberimg" class="form-control" placeholder="eg:-member img">
        </div>
        

        <div class="col-md-12">
          <a href="/pcteam" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
