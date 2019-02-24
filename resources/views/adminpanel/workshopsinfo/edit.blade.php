@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Workshop Info</h3>
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

    <form action="/Workshopnew/edit/{{$workshopinfo->id}}"  method="POST">
      @csrf
      
 <div class="col-md-12">
        <strong>Duration</strong>
          <input type="text" name="duration" class="form-control" value="{{$workshopinfo->duration}}">
        </div>

         <div class="col-md-12">
          <strong>Workshop date</strong>
           <input type="text" name="workshopdate" class="form-control" value="{{$workshopinfo->workshop_date}}">
        </div>


        <div class="col-md-12">
          <strong>Workshop time</strong>
           <input type="text" name="workshoptime" class="form-control" value="{{$workshopinfo->workshop_time}}">
        </div>

        <div class="col-md-12">
        <strong>location</strong>
          <input type="text" name="location" class="form-control" value="{{$workshopinfo->location}}">
        </div>

         <div class="col-md-12">
        <strong>fees</strong>
          <input type="text" name="fees" class="form-control" value="{{$workshopinfo->fees}}">
        </div>

           <div class="col-md-12">
        <strong>notes</strong>
          <input type="text" name="notes" class="form-control" value="{{$workshopinfo->notes}}">
        </div>



        <div class="col-md-12">
          <a href="Workshopnew" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
