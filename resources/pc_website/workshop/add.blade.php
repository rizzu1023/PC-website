@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New Workshop</h3>
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
 
    <form action="{{route('workshop.store')}}" method="post">
      @csrf
      <div class="row">
        {{-- <div class="col-md-5">
          <strong>workshop id</strong>
          <input type="text" name="workshop_id" class="form-control" placeholder="Workshop id">
        </div> --}}

        <div class="col-md-10">
          <strong>Title</strong>
          <input type="text" name="title" class="form-control" placeholder="Title of Workshop">
        </div>
        
        <div class="col-md-5">
          <strong>Banner Image</strong>
          <input type="image" name="workshopid" class="form-control" placeholder="Workshop id">
        </div>
        
        <div class="col-md-11">
          <strong>About</strong>
          <textarea class="form-control" placeholder="About Workshop" name="about" rows="8" cols="80"></textarea>
        </div>

        <div class="col-md-12">
          <a href="{{route('workshop.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
