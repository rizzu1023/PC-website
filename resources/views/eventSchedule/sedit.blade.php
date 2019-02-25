@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Events Schedule Detail</h3>
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
 
    <form action="/eventSchedule/edit/{{$eventSchedule->id}}" method="post">
      @csrf
      <div class="row">
         <div class="col-md-12">
          <strong>Title</strong>
         <input type="text" value="{{$eventSchedule->title}}" name="title" class="form-control" placeholder="eg:- Event Name">
        </div>

        <div class="col-md-12">
          <strong>Start Time</strong>
        <input type="text" value="{{$eventSchedule->start_time}}" name="stime" class="form-control" placeholder="eg:- 7:00" >
        </div>

        <div class="col-md-12">
            <strong>End Time</strong>
        <input type="text" value="{{$eventSchedule->end_time}}" name="etime" class="form-control" placeholder="eg:- 10:00" >
        </div>
        
        <div class="col-md-12">
          <strong>Status</strong>
        <input type="text" value="{{$eventSchedule->status}}" name="status" class="form-control" placeholder="eg:-Active/Inactive">
        </div> 
        

        <div class="col-md-12">
          <a href="/eventSchedule" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
