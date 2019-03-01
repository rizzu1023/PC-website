@extends('layouts.base')
@section('title')
Blogs - Programmers Club
@endsection


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
                <h3>Wireless Charging</h3>
                <p>In recent years smartphones have expanded their capability exponentially. It seems like new features, both software and hardware implemented are being added to smartphones in huge numbers. It’s hard to say conclusively what the hot new trend smartphone manufacturers are jumping on, given the size of the smartphone industry it seems that at least one new flagship smartphone hits the market every month. That too packed with bleeding edge tech. Some notable trends in smartphone design, particular to 2018 was the iconic “notch” display and the inclusion of multiple back cameras are just to name a few. But one thing that the entire smartphone company is striving towards is “true” wireless charging.</p>
                <p><a href="{{asset('bloginfo1')}}" class="btn btn-primary">View more</a></p>
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
                <h3>Food technology</h3>
                <p>The world population is roaring toward 9 billion, our available land is shrinking, and our communities are growing more connected, leaving one increasingly important global issue hanging above our heads: food security. Fortunately, technology is allowing us to track, analyze, and understand the way our food system works to help reduce the amount of food waste and carbon emissions, and ultimately, feed the 842 million people who don't currently have enough to eat.</p>
                <p><a href="{{asset('bloginfo2')}}" class="btn btn-primary">View more</a> </p>
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
                <p><a href="{{asset('bloginfo3')}}" class="btn btn-primary">View more</a> </p>
              </div>
            </div>



            
              </div>
            </div>
          </div>
        </section>
@endsection
