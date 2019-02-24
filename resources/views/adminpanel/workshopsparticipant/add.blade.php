@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Add new workshop Participant</h3>
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
 
    <form action="/Workshopsparticipant/add" method="post">
      @csrf
      <div class="row">
        
        <div class="col-md-5">
          <strong>workshop_name</strong>
          <input type="text" name="workshopname" class="form-control" placeholder="Workshopname">
        </div>
        

        <div class="col-md-10">
          <strong>username</strong>
          <input type="text" name="username" class="form-control" placeholder=" username">
        </div>

        <div class="col-md-10">
          <strong>email</strong>
          <input type="text" name="email" class="form-control" placeholder="email">
        </div>
      

        <div class="col-md-12">
          <a href="/Workshopspartipant" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
