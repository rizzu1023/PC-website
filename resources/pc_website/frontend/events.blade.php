@extends('layouts.base')
@section('title')
Events - Programmers Club
@endsection

@section('content')
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">

            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Events</h1>

            </div>
           
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <div class="text-uppercase probootstrap-uppercase">Featured Event</div>
                  <h3>ALGORITHM 5.O</h3>
                  <p>Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi </p>
                  <p>
                    <span class="probootstrap-date"><i class="icon-calendar"></i>15-16 March 2019</span>
                    <span class="probootstrap-location"><i class="icon-location2"></i>AIKTC, New Panvel</span>
                  </p>
                  <p><a href="{{asset('participate')}}" class="btn btn-primary">Participate now!</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/algo1.png)">
                  <!--<a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>




      <section class="probootstrap-section probootstrap-section">
          <div class="container">
            <div class="row">

              <div class="col-md-12">
                
                <div class="tab-content">
  
                  <div id="featured-news" class="tab-pane fade in active">
                    <div class="row">
                      <div class="col-md-12">
                        <h1>Previous Events</h1>

                        <div class="owl-carousel" id="owl1">
                          <div class="item">
                            <a href="{{asset('algo1')}}" class="probootstrap-featured-news-box">
                              <figure class="probootstrap-media"><img src="{{asset('frontend/img/img_sm_3.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                              <div class="probootstrap-text">
                                <h3>Algorithm 1.O</h3>
                                
                                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                                
                              </div>
                            </a>
                          </div>
                          <!-- END item -->
                          <div class="item">
                            <a href="{{asset('algo2')}}" class="probootstrap-featured-news-box">
                              <figure class="probootstrap-media"><img src="{{asset('frontend/img/img_sm_1.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                              <div class="probootstrap-text">
                                <h3>Algorithm 2.O</h3>
                                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                                
                              </div>
                            </a>
                          </div>
                          <!-- END item -->
                          <div class="item">
                            <a href="{{asset('algo3')}}" class="probootstrap-featured-news-box">
                              <figure class="probootstrap-media"><img src="{{asset('frontend/img/img_sm_2.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                              <div class="probootstrap-text">
                                <h3> Algorithm 3.O</h3>
                                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                                
                              </div>
                            </a>
                          </div>
                          <!-- END item -->
                          <div class="item">
                            <a href="{{asset('algo4')}}" class="probootstrap-featured-news-box">
                              <figure class="probootstrap-media"><img src="{{asset('frontend/img/img_sm_3.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                              <div class="probootstrap-text">
                                <h3>Algorithm 4.O</h3>
                                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                                
                                
                              </div>
                            </a>
                          </div>
                          <!-- END item -->
                        </div>
                      </div>
                    </div>
                    <!-- END row -->
                    
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
              <a href="{{asset('participate')}}" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
            </div>
          </div>
        </div>
      </section>
@endsection
