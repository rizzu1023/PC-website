@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Add Events Participant</h3>
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
 
    <form action="/eventsParticipant/add" method="post">
      @csrf
      <div class="row">
         <div class="col-md-12">
          <strong>Event Name</strong>
          <input type="text" name="name" class="form-control" placeholder="eg:- Algorithm 5.O">
        </div>

        <div class="col-md-12">
          <strong>Team Name</strong>
          <input type="text" name="tname" class="form-control" placeholder="eg:- White Coders">
        </div>
        
        <div class="col-md-12">
          <strong>No. of Members</strong>
          <input type="number" name="nmembers" class="form-control" placeholder="eg:- 4">
        </div>
        
        <div class="col-md-12">
          <strong>Participant Name 1</strong><br>
          <input type="text" name="pname1" class="form-cointrol" placeholder="eg:- Alice">
        </div>

        <div class="col-md-12">
            <strong>Participant Name 2</strong>
            <input type="text" name="pname2" class="form-control" placeholder="Eg:- Bob">
        </div>

        <div class="col-md-12">
            <strong>Participant Name 3</strong>
            <input type="text" name="pname3" class="form-control" placeholder="Eg:- doe">
        </div>

        <div class="col-md-12">
            <strong>Participant Name 4</strong>
            <input type="text" name="pname4" class="form-control" placeholder="Eg:- john">
        </div>
        <div class="col-md-12">
                <strong>Payment</strong>
                <input type="text" name="payment" class="form-control" placeholder="Eg:- paid/unpaid">
        </div>

        <div class="col-md-12">
          <a href="/eventsParticipant" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
