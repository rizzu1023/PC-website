@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Add new workshop Info</h3>
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
 
    <form action="/Workshopnew/add" method="post">
      @csrf
      <div class="row">
        <!-- <div class="col-md-5">
          <strong>workshop id</strong>
           <input type="number" name="workshop_id" class="form-control" placeholder="Workshop id">
        </div>


 -->

        <!-- <div class="col-md-10">
          <strong>workshop_id</strong>
          <input type="number" name="workshopid" class="form-control" placeholder="Workshop id">
        </div>
 -->
        <div class="col-md-10">
          <strong>Duration</strong>
          <input type="text" name="duration" class="form-control" placeholder="Workshopduration">
        </div>

        <div class="col-md-5">
          <strong>workshop date</strong>
          <input type="date" name="workshopdate" class="form-control" placeholder="Workshopdate">
        </div>
        

        <div class="col-md-10">
          <strong>workshop time</strong>
          <input type="time" name="workshoptime" class="form-control" placeholder=" Workshop Time">
        </div>

        <div class="col-md-10">
          <strong>location</strong>
          <input type="text" name="location" class="form-control" placeholder="location of Workshop">
        </div>
        
        
        
        
        <div class="col-md-11">
          <strong>fees</strong>
            <input type="number" name="fees" class="form-control" placeholder="Fees of workshop">
        
        </div>


          <div class="col-md-11">
          <strong>notes</strong>
            <input type="text" name="fees" class="form-control" placeholder="notes">
        
        </div>

        <div class="col-md-12">
          <a href="/Workshopnew" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
