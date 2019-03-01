@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Add About US Programmers Club</h3>
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
 
    <form action="/about/add" method="post">
      @csrf
      <div class="row">
         <div class="col-md-12">
          <strong>Pc Detail</strong>
          <textarea name="pcDetail" class="form-control" rows="10" placeholder="eg:-About Us Of ProgrammersClub"></textarea>
         </div>
        

        <div class="col-md-12">
          <a href="/about" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
