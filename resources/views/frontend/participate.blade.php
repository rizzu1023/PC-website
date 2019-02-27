@extends('layouts.footer')
@extends('layouts.base')
@section('content')
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate mb0">
              <h1 class="mb0">Register</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="row probootstrap-gutter0">
               
              <div class="col-md-7 col-md-push-0  probootstrap-animate" id="probootstrap-content">
                  <p>Welcome! Please enter the following credentials.</p>
                  <form action="#" method="post" class="probootstrap-form">
                    <div class="form-group">
                      <label for="teamname">Team Name</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="numberofmembers">No. Of Members</label>
                      <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="username">User Name 1</label>
                      <input type="tel" class="form-control" id="subject" name="subject">
                    </div>
                    <div class="form-group">
                      <label for="username">User Name 2</label>
                      <input type="text" class="form-control" id="subject" name="subject">
                    </div>
                    <div class="form-group">
                      <label for="username">User Name 3</label>
                      <input type="text" class="form-control" id="subject" name="subject">
                    </div>
                    <div class="form-group">
                        <label for="username">User Name 4</label>
                        <input type="text" class="form-control" id="subject" name="subject">
                      </div>
                   
                      
                      <!--
                      <select>
                        <option value="1st Year">1st Year</option>
                        <option value="2nd Year">2nd Year</option>
                        <option value="3rd Year">3rd Year</option>
                        <option value="4th Year">4th Year</option>
                      </select> 
                    -->
                    <!--</div>-->
                    
                    
                  <!--
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                    </div>
                  -->
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Submit">
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
@extends('layouts.header')
