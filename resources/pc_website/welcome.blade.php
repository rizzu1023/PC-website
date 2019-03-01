@extends('layouts.app')


@section('content')

<div class="container">
    <h3>Index page</h3>
</div>
<div class="flex-center position-ref full-height">
    @if(Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{url('/home')}}">HOME</a>
        @else
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('register')}}">Register</a>
        @endauth
    </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            LARAVEL
        </div>
    </div>
</div>



@endsection()