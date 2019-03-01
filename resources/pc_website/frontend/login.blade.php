@extends('layouts.base')
@section('title')
Login - Programmers Club
@endsection

@section('content')
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0">Login</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <div class="row probootstrap-gutter0">
                   
                <div class="col-md-7 col-md-push-0 probootstrap-animate" id="probootstrap-content">
                    <p>Welcome! Please Login</p>
                    <form action="#" method="post" class="probootstrap-form">
                      <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="email" name="email">
                      </div>
                      
                      <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Log in">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
               
                  
      
      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Participate Now!</h2>
              <a href="{{asset('eparticipate')}}" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
            </div>
          </div>
        </div>
      </section>
@endsection
