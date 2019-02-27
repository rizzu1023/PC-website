@extends('layouts.footer')
@extends('layouts.base')
@section('content')
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0">Blogs</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <div class="row probootstrap-gutter0">
                   
                  <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                      <h2>Latest Blog</h2>
                    </div>
                  </div>
                
                  <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="image">
                      <div class="image-bg">
                        <img src="{{asset('frontend/img/img_sm_1.jpg')}}" alt="Free Bootstrap Template by uicookies.com">
                      </div>
                    </div>
                    <div class="text">
                      <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                      <h3>Application Design</h3>
                      <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                      <p><a href="{{asset('bloginfo')}}" class="btn btn-primary">View more</a> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                <h2>Previous Blogs</h2>
              </div>
            </div>
            <!--End row-->


            <div class="probootstrap-service-2 probootstrap-animate">
              <div class="image">
                <div class="image-bg">
                  <img src="{{asset('frontend/img/img_sm_1.jpg')}}" alt="Free Bootstrap Template by uicookies.com">
                </div>
              </div>
              <div class="text">
                <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                <h3>Application Design</h3>
                <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                <p><a href="{{asset('bloginfo')}}" class="btn btn-primary">View more</a></p>
              </div>
            </div>

            <div class="probootstrap-service-2 probootstrap-animate">
              <div class="image">
                <div class="image-bg">
                  <img src="{{asset('frontend/img/img_sm_1.jpg')}}" alt="Free Bootstrap Template by uicookies.com">
                </div>
              </div>
              <div class="text">
                <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                <h3>Application Design</h3>
                <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                <p><a href="{{asset('bloginfo')}}" class="btn btn-primary">View more</a> </p>
              </div>
            </div><div class="probootstrap-service-2 probootstrap-animate">
              <div class="image">
                <div class="image-bg">
                  <img src="{{asset('frontend/img/img_sm_1.jpg')}}" alt="Free Bootstrap Template by uicookies.com">
                </div>
              </div>
              <div class="text">
                <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                <h3>Application Design</h3>
                <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                <p><a href="{{asset('bloginfo')}}" class="btn btn-primary">View more</a> </p>
              </div>
            </div>



            
              </div>
            </div>
          </div>
        </section>
@endsection
@extends('layouts.header')
