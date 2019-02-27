@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Add Contact Information</h3>
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
 
    <form action="/contact/add" method="post">
      @csrf
      <div class="row">
         <div class="col-md-12">
          <strong>Name</strong>
          <input type="text" name="name" class="form-control" placeholder="eg:-Name">
        </div>
        
        <div class="col-md-12">
          <strong>Contact</strong>
          <input type="number" name="contact" class="form-control" placeholder="eg:-1234567890">
        </div>
        

        <div class="col-md-12">
          <a href="/contact" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
