@extends('pc.layouts.base')

@section('title')
Home
@endsection

@section('css')
    <style>
        .hero-content-overlay {
            background: rgba(21,20,33,.5);
            background: url("{{asset('assets/images/WebWall2.png')}}");
            height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            background-position-y: 10%;
        }
    @media screen and (max-width: 576px){
        .hero-content-overlay {

    /* height: 40vh; */
        background: rgba(21,20,33,.5);
        background: url("{{asset('assets/images/WebWall2.png')}}"); 
        background-size: cover;
        background-repeat: no-repeat;
        background-position-y: 50%;
        background-size: 100vw 70vh;
        /* background-attachment: fixed; */
    }
}
    </style>
@endsection
@section('content')

<div class="hero-content ">
        <div class="hero-content-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-content-wrap flex flex-column justify-content-center align-items-start">
                      
                        </div><!-- .hero-content-wrap -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .hero-content-hero-content-overlay -->
    </div><!-- .hero-content -->


    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 align-content-lg-stretch">
                    <header class="heading">
                        <h2 class="entry-title">ALGORITHM 5.O</h2>
                        <!-- <p>The objective of this technical event is to bring the students of different institutes together to interact and offer a new focus for IT students on the challenges of meeting global demands over social causes in a sustainable way. The event will touch on programmer's ability to solve social issues and know how to highlight their knowledge to target the problems in more effective and efficient ways.</p> -->
                    </header><!-- .heading -->

                </div><!-- .col -->
                <div class="col-lg-12 col-12">
                    <div class="single-event">
                        <div class="event-content">
                            <!-- <h2 class="text-center"><a href="event-single.html">STARTS IN</a></h2> -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="text-center ml-5">
                                            <br />
                                            <div class="counter" style="margin:50px" id ="days"></div><span class="counter-value">Days</span>
                                            <div class="counter" style="margin:50px" id="hours"></div><span class="counter-value">Hours</span>
                                            <div class="counter" style="margin:50px" id="min"></div><span class="counter-value">Mins</span>
                                            <div class="counter" style="margin:50px" id="sec"></div><span class="counter-value">Secs</span>
                                        </h4>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
                <a href="/event" class="btn button mt-3">REGISTER</a>
               
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .about-section -->


<section class="welcome-section">
    <div class="container pb-5">
    <div class="row">
        <div class="col-12">
            <div class="about-heading">
                <h2 class="entry-title">Welcome to Programmers club</h2>

                <p>Anjuman-I-Islams Kalsekar Technical Camous is a growing Technical Institute which aspires to enhance its teaching, learning and research work. An institute of higher learning, merely dedicated for the global enrichment of students at the individual level to meet the diverse needs of the evolving technology and society.</p>
            </div><!-- .about-heading -->
        </div><!-- .col -->
    </div>
</section>

  
    <section class="featured-courses horizontal-column courses-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="heading flex justify-content-between align-items-center">
                            <h2 class="entry-title">Upcoming Workshops</h2>
    
                            <a class="btn mt-4 mt-sm-0" href="#">view all</a>
                        </header><!-- .heading -->
                    </div><!-- .col -->
    
                    <div class="col-12 col-lg-6">
                        <div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">
                            <figure class="course-thumbnail">
                                <a href="#"><img src="{{asset('assets/images/1.jpg')}}" alt=""></a>
                            </figure><!-- .course-thumbnail -->
    
                            <div class="course-content-wrap">
                                <header class="entry-header">
                                    <div class="course-ratings flex align-items-center">
                                       <h4 class="text-dark">Laravel</h4>
                                    </div><!-- .course-ratings -->
    
                                    <h2 class="entry-title"><a href="#">The Complete Android Developer Course</a></h2>
    
                                    <div class="entry-meta flex flex-wrap align-items-center">
                                        <div class="course-author"><a href="#">Ms. Lara Croft </a></div>
    
                                        <div class="course-date">July 21, 2018</div>
                                    </div><!-- .course-date -->
                                </header><!-- .entry-header -->
    
                                <footer class="entry-footer flex justify-content-between align-items-center">
                                    <div class="course-cost">
                                        <span class="free-cost">Free</span>
                                    </div><!-- .course-cost -->
                                </footer><!-- .entry-footer -->
                            </div><!-- .course-content-wrap -->
                        </div><!-- .course-content -->
                    </div><!-- .col -->
    
                    <div class="col-12 col-lg-6">
                            <div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">
                                <figure class="course-thumbnail">
                                    <a href="#"><img src="{{asset('assets/images/1.jpg')}}" alt=""></a>
                                </figure><!-- .course-thumbnail -->
        
                                <div class="course-content-wrap">
                                    <header class="entry-header">
                                        <div class="course-ratings flex align-items-center">
                                           <h4 class="text-dark">MongoDB</h4>
                                        </div><!-- .course-ratings -->
        
                                        <h2 class="entry-title"><a href="#">The Complete Android Developer Course</a></h2>
        
                                        <div class="entry-meta flex flex-wrap align-items-center">
                                            <div class="course-author"><a href="#">Ms. Lara Croft </a></div>
        
                                            <div class="course-date">July 21, 2018</div>
                                        </div><!-- .course-date -->
                                    </header><!-- .entry-header -->
        
                                    <footer class="entry-footer flex justify-content-between align-items-center">
                                        <div class="course-cost">
                                            <span class="free-cost">Free</span>
                                        </div><!-- .course-cost -->
                                    </footer><!-- .entry-footer -->
                                </div><!-- .course-content-wrap -->
                            </div><!-- .course-content -->
                        </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section><!-- .courses-wrap -->

         

<section class="stats">
        <div class="container entry-content ezuca-stats ">
            <div class="stats-wrap flex flex-wrap justify-content-lg-between">
                <div class="stats-count">
                    <i class="far fa-user"></i>
                    <span>450+</span>
                    <p>STUDENTS ENROLLED</p>
                </div><!-- .stats-count -->

                <div class="stats-count">
                        <i class="fas fa-graduation-cap"></i>
                    <span>44</span>
                    <p>MEMBERS</p>
                </div><!-- .stats-count -->

                <div class="stats-count">
                        <i class="fas fa-tv"></i>
                    <span>30</span>
                    <p>WORKSHOPS</p>
                </div><!-- .stats-count -->

                <div class="stats-count">
                    <i class="far fa-comment-alt"></i>
                    <span>4.5/5</span>
                    <p>FEEDBACK</p>
                </div><!-- .stats-count -->
            </div><!-- .stats-wrap -->
        </div><!-- .ezuca-stats -->
    </section>


 
    <section class="featured-courses vertical-column courses-wrap">
            <div class="container">
                <div class="row mx-m-25">
                    <div class="col-12 px-25">
                        <header class="heading flex flex-wrap justify-content-between align-items-center">
                            <h2 class="entry-title">Blogs</h2>
                        </header><!-- .heading -->
                    </div><!-- .col -->
    
                    <div class="col-12 col-md-6 col-lg-4 px-25">
                        <div class="course-content">
                                <figure class="course-thumbnail">
                                        <a href="#"><img src="{{asset('assets/images/1.jpg')}}" alt=""></a>
                                    </figure><!-- .course-thumbnail -->
    
                            <div class="course-content-wrap">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">Title</a></h2>
                                    <p class="entry-body mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, dicta.</p>
                                    <div class="course-date">1 March 2019</div>
    
                                    <div class="entry-meta flex align-items-center">
                                        <div class="course-author"><a class="btn-success blog-button" href="single-post.html">View blog </a></div>
    
                                    </div><!-- .course-date -->
                                </header><!-- .entry-header -->
    
                                <footer class="entry-footer flex justify-content-between align-items-center">
                                 
                                  
                                </footer><!-- .entry-footer -->
                            </div><!-- .course-content-wrap -->
                        </div><!-- .course-content -->
                    </div><!-- .col -->
    
                    <div class="col-12 col-md-6 col-lg-4 px-25">
                            <div class="course-content">
                                    <figure class="course-thumbnail">
                                            <a href="#"><img src="{{asset('assets/images/1.jpg')}}" alt=""></a>
                                        </figure><!-- .course-thumbnail -->
        
                                <div class="course-content-wrap">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">Title</a></h2>
                                        <p class="entry-body mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, dicta.</p>
                                        <div class="course-date">1 March 2019</div>
        
                                        <div class="entry-meta flex align-items-center">
                                            <div class="course-author"><a class="btn-success blog-button" href="single-post.html">View blog </a></div>
        
                                        </div><!-- .course-date -->
                                    </header><!-- .entry-header -->
        
                                    <footer class="entry-footer flex justify-content-between align-items-center">
                                     
                                      
                                    </footer><!-- .entry-footer -->
                                </div><!-- .course-content-wrap -->
                            </div><!-- .course-content -->
                        </div><!-- .col -->
    
                        <div class="col-12 col-md-6 col-lg-4 px-25">
                                <div class="course-content">
                                        <figure class="course-thumbnail">
                                                <a href="#"><img src="{{asset('assets/images/1.jpg')}}" alt=""></a>
                                            </figure><!-- .course-thumbnail -->
            
                                    <div class="course-content-wrap">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="#">Title</a></h2>
                                            <p class="entry-body mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, dicta.</p>
                                            <div class="course-date">1 March 2019</div>
            
                                            <div class="entry-meta flex align-items-center">
                                                <div class="course-author"><a class="btn-success blog-button" href="single-post.html">View blog </a></div>
            
                                            </div><!-- .course-date -->
                                        </header><!-- .entry-header -->
            
                                        <footer class="entry-footer flex justify-content-between align-items-center">
                                         
                                          
                                        </footer><!-- .entry-footer -->
                                    </div><!-- .course-content-wrap -->
                                </div><!-- .course-content -->
                            </div><!-- .col -->
    
                
                    <div class="col-12 px-25 flex justify-content-center">
                        <a class="btn" href="blog.html">view all Blogs</a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section><!-- .courses-wrap -->
    
  


        <section class="newsletter">
                <div class="container pb-5">
                <div class="row">
                    <div class="col-12">
                        <div class="about-heading">
                            <h2 class="entry-title">NEWSLETTER</h2>
            
                            <p>Subscribe now and receive newsletter with programming materials, workshops, interesting project ideas and much more!</p>
                            <form method="#">
                                <input type="email" name="#" placeholder="Your Email Here">
                                <a href="#">Subscribe</a>
                            </form>
                        </div><!-- .about-heading -->
                    </div><!-- .col -->
                </div>
            </section>



@endsection