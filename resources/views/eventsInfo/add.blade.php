@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Add Events Information</h3>
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
          <strong>Duration</strong>
          <input type="text" name="duration" class="form-control" placeholder="eg:-27 Hours">
        </div>

        <div class="col-md-12">
          <strong>Date</strong>
          <input type="date" name="date" class="form-control" placeholder="">
        </div>
        
        <div class="col-md-12">
          <strong>Time</strong>
          <input type="TIMESTAMP" name="time" class="form-control" placeholder="eg:- 10:00">
        </div>
        
        <div class="col-md-12">
          <strong>Location</strong><br>
          <input type="text" name="location" class="form-cointrol" placeholder="eg:- panvel">
        </div>

        <div class="col-md-12">
            <strong>eligible_departments</strong>
            <input type="text" name="elgibDept" class="form-control" placeholder="Eg:- Co, Extx">
        </div>

        <div class="col-md-12">
            <strong>Fees</strong>
            <input type="text" name="fees" class="form-control" placeholder="Eg:- 200">
        </div>

        <div class="col-md-12">
            <strong>Max Member</strong>
            <input type="number" name="mMember" class="form-control" placeholder="Eg:- 4">
        </div>

        <div class="col-md-12">
          <a href="/eventsInfo" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
