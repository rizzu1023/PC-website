@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Events Probelm Definition</h3>
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
 
    <form action="/eventsPdefinition/edit/{{$eventsPdefinition->id}}" method="POST">
      @csrf
      
      <div class="row">
            <div class="col-md-12">
                <strong>Title</strong>
                <input type="text" value="{{$eventsPdefinition->title}}" name="title" class="form-control" placeholder="eg:- Event Name">
            </div>
    
            <div class="col-md-12">
                <strong>Description</strong>
            <textarea name="description" value="{{$eventsPdefinition->description}}" class="form-control" placeholder="eg:- Probelm Definition Quesition" rows="8" cols="50"></textarea>
            </div>
            
            <div class="col-md-12">
                <strong>Status</strong>
                <input type="text" name="status" value="{{$eventsPdefinition->status}}" class="form-control" placeholder="eg:-Active/Inactive">
            </div> 
    

        <div class="col-md-12">
          <a href="/eventsPdefinition" class="btn btn-sm btn-success">Back</a>
          {{-- {{Form::hidden('_method','put')}} --}}
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
