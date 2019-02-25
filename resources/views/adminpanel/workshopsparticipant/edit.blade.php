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

    <form action="/Workshopsparticipants/edit/{{$workshopparticipant->id}}" method="post">
      {{csrf_field()}}
    
      
 <div class="col-md-12">
        <strong>Workshop name</strong>
          <input type="text" name="workshopname" class="form-control" value="{{$workshopparticipant->workshop_name}}">
        </div>

         <div class="col-md-12">
          <strong>username</strong>
           <input type="text" name="username" class="form-control" value="{{$workshopparticipant->username}}">
        </div>


        <div class="col-md-12">
          <strong>email</strong>
           <input type="text" name="email" class="form-control" value="{{$workshopparticipant->email}}">
        </div>

        <div class="col-md-12">
          <a href="Workshopsparticipants" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
