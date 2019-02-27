@extends('layouts.footer')
@extends('layouts.base')
@section('content')
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Workshops</h1>
            </div>
          </div>
        </div>
      </section>


    <section class="probootstrap-section">
      <div class="container">
        <h4>Upcoming Workshops</h4>
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
            <a href="{{asset('info')}}" class="probootstrap-featured-news-box">
              <figure class="probootstrap-media"><img src="{{asset('frontend/img/img_sm_1.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
              <div class="probootstrap-text">
                <h3>Workshop 1</h3>
                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                <span class="probootstrap-location"><i class="icon-location2"></i>AIKTC, Panvel</span>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
            <a href="{{asset('info')}}" class="probootstrap-featured-news-box">
              <figure class="probootstrap-media"><img src="{{asset('frontend/img/img_sm_2.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
              <div class="probootstrap-text">
                <h3>Workshop 2</h3>
                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                <span class="probootstrap-location"><i class="icon-location2"></i>AIKTC, Panvel</span>
              </div>
            </a>
          </div>
          <div class="clearfix visible-sm-block visible-xs-block"></div>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
            <a href="{{asset('info')}}" class="probootstrap-featured-news-box">
              <figure class="probootstrap-media"><img src="{{asset('frontend/img/img_sm_3.jpg')}} alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
              <div class="probootstrap-text">
                <h3>Workshop 3</h3>
                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                <span class="probootstrap-location"><i class="icon-location2"></i>AIKTC, Panvel</span>
              </div>
            </a>
          </div>

          <div class="clearfix visible-md-block"></div>

        </div>
      </div>
    </section>
    
      
      
      <section class="probootstrap-section">
        <div class="container">
          <h4>Previous Workshops</h4>
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="{{asset('workshopinfo1')}}" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="{{asset('frontend/img/img_sm_1.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Workshop 1</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>AIKTC, Panvel</span>
                </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="{{asset('workshopinfo2')}}" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="{{asset('frontend/img/img_sm_2.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Workshop 2</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>AIKTC, Panvel</span>
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="{{asset('workshopinfo3')}}" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="{{asset('frontend/img/img_sm_3.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Workshop 3</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>AIKTC, Panvel</span>
                </div>
              </a>
            </div>

            <div class="clearfix visible-md-block"></div>
            
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="{{asset('workshopinfo4info')}}" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="{{asset('frontend/img/img_sm_1.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Workshop 4</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>AIKTC, Panvel</span>
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="{{asset('workshopinfo5')}}" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="{{asset('frontend/img/img_sm_2.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Workshop 5</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>AIKTC, Panvel</span>
                </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="{{asset('workshopinfo6')}}" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="{{asset('frontend/img/img_sm_3.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Workshop 6</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>AIKTC, Panvel</span>
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>

          </div>
        </div>

        <section class="probootstrap-section probootstrap-bg-white">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                    <div class="row probootstrap-gutter0">
                     
                    <div class="col-md-7 col-md-push-0  probootstrap-animate" id="probootstrap-content">
                      <h3>Register for Workshop</h3>
                        <p>Welcome! Please enter the following credentials.</p>
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
                            <label for="contact">Contact No.</label>
                            <input type="tel" class="form-control" id="subject" name="subject">
                          </div>
                          
                          <div class="form-group">
                            <label for="branch">Branch</label>
                            <input type="text" class="form-control" id="subject" name="subject">
                          </div>
                          <div class="form-group">
                            <label for="branch">Year</label>
                            <br>
                            <select>
                              <option value="1st Year">1st Year</option>
                              <option value="2nd Year">2nd Year</option>
                              <option value="3rd Year">3rd Year</option>
                              <option value="4th Year">4th Year</option>
                            </select> 
                          
                          </div>
                          <div class="form-group">
                            <label for="branch">Workshop Name</label>
                            <br>
                            <select>
                              <option value="Workshop 1">Workshop 1</option>
                              <option value="Workshop 2">Workshop 2</option>
                              <option value="Workshop 3">Workshop 3</option>
                              
                            </select> 
                          
                          </div>
                          <br>
          
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
            
      </section>
      
@endsection
@extends('layouts.header')
