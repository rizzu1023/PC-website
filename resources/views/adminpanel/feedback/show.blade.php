

@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail of User</h3>
        <hr>
      </div>
    </div>
    

    <div class="col-md-12">
        <div class="form-group">
          <strong>name</strong> {{$users->name}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>username</strong> {{$users->username}}
        </div>
      </div>

     
       <div class="col-md-12">
        <div class="form-group">
          <strong>email</strong> {{$users->email}}
        </div>
      </div>


       <div class="col-md-12">
        <div class="form-group">
          <strong>contact</strong> {{$users->contact}}
        </div>
      </div>


      <div class="col-md-12">
        <div class="form-group">
          <strong>college name</strong> {{$users->college_name}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Branch</strong> {{$users->branch}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Year</strong> {{$users->year}}
        </div>
      </div>



      <div class="col-md-12">
        <a href="/Workshopsparticipant" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection
