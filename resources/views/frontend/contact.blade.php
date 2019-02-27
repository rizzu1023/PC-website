@extends('layouts.footer')
@extends('layouts.base')
@section('content')
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0">Contact Us</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
        <div class="container">
          
          <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                
                <div class="text">
                  
                  <h3>Our Location</h3>
                  <span class="probootstrap-meta"><i class="icon-location2"></i></span>
                  <p>Department of Computer Engineering, Plot No. 2 & 3, Sector-16, Near Thana Naka, Khandagaon, New Panvel,Navi Mumbai, Maharashtra 410206</p>
                  
                </div>
              </div>
              
                <div class="probootstrap-service-2 probootstrap-animate">
                  
                  <div class="text">
                    
                    <h3>Contact us Anytime</h3>
                    <span class="probootstrap-meta"><i class="icon-phone2"></i></span>
                    <p>Moin: 7738545542<br>Munaf: 8652524925<br>Haaris: 7977024868</p>
                    
                  </div>
                
                </div>
            </div>
                
<!--
              <div class="probootstrap-service-2 probootstrap-animate">
                
                <div class="text">
                  
                  <h3>Contact us Anytime</h3>
                  
                  <p>Moin: 7738545542</p>
                  <p>Munaf: 8652524925</p>
                  <p>Haaris: 7977024868</p>
                  
                </div>
              </div>
            -->
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                
                <div class="text">
                  <h3>Write Some Words</h3>
                  <span class="probootstrap-meta"><i class="icon-mail"></i></span>

                  <p>connect@programmersclub.co.in</p>
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
               
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i></span>
                  <h3>Social Media</h3>
                  <ul class="probootstrap-footer-social">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-github"></i></a></li>
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!---->
            <section class="probootstrap-section probootstrap-section-sm">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row probootstrap-gutter0">
                      <div class="col-md-4" id="probootstrap-sidebar">
                        <div class="container">
      
      
                      <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                        <h2>Give Your Feedback</h2>
                        <p>Welcome! Please Give Your Feedback Here.</p>
                        <form action="#" method="post" class="probootstrap-form">
                          <div class="form-group">
                            <label for="name">User Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                          </div>
                          <div class="form-group">
                            <label for="subject">Feedback</label>
                            <textarea cols="30" rows="8" class="form-control" id="message" name="message"></textarea>

                          </div>
                          <div class="form-group">
                            <label for="message">Suggestions</label>
                            <textarea cols="30" rows="4" class="form-control" id="message" name="message"></textarea>
                          </div>
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
