@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail of workshop</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Workshop Id </strong> {{$workshop->workshop_id}}
        </div>
      </div>

       <div class="col-md-12">
        <div class="form-group">
          <strong>Title</strong> {{$workshop->title}}
        </div>
      </div>
     
      <div class="col-md-12">
        <div class="form-group">
          <strong>Banner Image</strong> {{$workshop->banner_image}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>About</strong> {{$workshop->about}}
        </div>
      </div>


      <div class="col-md-12">
        <a href="{{route('workshop.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection
