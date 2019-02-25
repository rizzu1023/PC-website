@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Add new Sponsor</h3>
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
 
    <form action="/sponsors/add" method="post">
      @csrf
      <div class="row">
        
        <div class="col-md-5">
          <strong>Company name</strong>
          <input type="text" name="companyname" class="form-control" placeholder="Company name">
        </div>
        

        <div class="col-md-10">
          <strong>Company Logo</strong>
          <input type="text" name="companylogo" class="form-control" placeholder="Company logo">
        </div>

      </div>


       <div class="col-md-12">
          <a href="/sponsors" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
     
    </form>

  </div>
@endsection
