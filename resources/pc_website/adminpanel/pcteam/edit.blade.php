@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Pc Member</h3>
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
 
    <form action="/pcteam/edit/{{$pcteam->id}}" method="post">
      @csrf
      <div class="row">
         <div class="col-md-12">
          <strong>Member Name</strong>
         <input type="text" value="{{$pcteam->member_name}}" name="membername" class="form-control" placeholder="eg:-Member Name">
        </div> 
        
        <div class="col-md-12">
          <strong>Contact</strong>
        <input type="text" value="{{$pcteam->member_img}}" name="memberimg" class="form-control" placeholder="eg:-Add image">
        </div>
        

        <div class="col-md-12">
          <a href="/pcteam" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
