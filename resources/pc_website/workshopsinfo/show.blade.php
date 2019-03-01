

@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail of workshopinfo</h3>
        <hr>
      </div>
    </div>
    

    <div class="col-md-12">
        <div class="form-group">
          <strong>duration</strong> {{$workshop_info->duration}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Workshop date</strong> {{$workshop_info->workshop_date}}
        </div>
      </div>

     
       <div class="col-md-12">
        <div class="form-group">
          <strong>Workshop time</strong> {{$workshop_info->workshop_time}}
        </div>
      </div>


       <div class="col-md-12">
        <div class="form-group">
          <strong>location</strong> {{$workshop_info->location}}
        </div>
      </div>


      <div class="col-md-12">
        <div class="form-group">
          <strong>Fees</strong> {{$workshop_info->fees}}
        </div>
      </div>


      <div class="col-md-12">
        <a href="/++Workshopnew" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection
