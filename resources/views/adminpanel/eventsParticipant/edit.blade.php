@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Events Participant</h3>
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
 
    <form action="/eventsParticipant/edit/{{$eventsParticipant->id}}" method="POST">
      @csrf
      
      <div class="row">
            <div class="col-md-12">
                    <strong>Event Name</strong>
            <input type="text" value="{{$eventsParticipant->event_name}}" name="name" class="form-control" placeholder="eg:- Algorithm 5.O">
                  </div>
          
                  <div class="col-md-12">
                    <strong>Team Name</strong>
                  <input type="text" value="{{$eventsParticipant->team_name}}" name="tname" class="form-control" placeholder="eg:- White Coders">
                  </div>
                  
                  <div class="col-md-12">
                    <strong>No. of Members</strong>
                  <input type="number" value="{{$eventsParticipant->no_of_members}}" name="nmembers" class="form-control" placeholder="eg:- 4">
                  </div>
                  
                  <div class="col-md-12">
                    <strong>Participant Name 1</strong><br>
                  <input type="text" value="{{$eventsParticipant->username_1}}" name="pname1" class="form-cointrol" placeholder="eg:- Alice">
                  </div>
          
                  <div class="col-md-12">
                      <strong>Participant Name 2</strong>
                      <input type="text" value="{{$eventsParticipant->username_2}}" name="pname2" class="form-control" placeholder="Eg:- Bob">
                  </div>
          
                  <div class="col-md-12">
                      <strong>Participant Name 3</strong>
                      <input type="text" value="{{$eventsParticipant->username_3}}" name="pname3" class="form-control" placeholder="Eg:- doe">
                  </div>
          
                  <div class="col-md-12">
                      <strong>Participant Name 4</strong>
                      <input type="text" value="{{$eventsParticipant->username_4}}" name="pname4" class="form-control" placeholder="Eg:- john">
                  </div>
                  <div class="col-md-12">
                          <strong>Payment</strong>
                  <input type="text" value="{{$eventsParticipant->payment}}" name="payment" class="form-control" placeholder="Eg:- paid/unpaid">
                  </div>
          

        <div class="col-md-12">
          <a href="/eventsParticipant" class="btn btn-sm btn-success">Back</a>
          {{-- {{Form::hidden('_method','put')}} --}}
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
