@extends('pc.layouts.base')

@section('title')
Team
@endsection

@section('content')


<section class="page-header">
<div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                            <h1>TEAM</h1>
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->
</section>

<section class="team-section pb-5" id="team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="team-heading">
                    <h2 class="entry-title text-dark">Meet Our Team</h2>
                </div><!-- .team-heading -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3">
                <div class="team-member">
                    <img src="{{asset('assets/images/bg2.jpg')}}" alt="">
                    <h3>Mr. John Wick</h3>
                </div><!-- .team-member -->
            </div><!-- .col -->
                 <div class="col-12 col-md-6 col-lg-3">
                <div class="team-member">
                    <img src="images/team-2.jpg" alt="">
                    <h3>Mr. John Wick</h3>
                </div><!-- .team-member -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-3">
                    <div class="team-member">
                        <img src="images/team-3.jpg" alt="">
                        <h3>Mr. John Wick</h3>
                    </div><!-- .team-member -->
                </div><!-- .col -->
                <div class="col-12 col-md-6 col-lg-3">
                        <div class="team-member">
                            <img src="{{asset('assets/images/bg2.jpg')}}" alt="">
                            <h3>Mohammed<br>Rizwan</h3>
                        </div><!-- .team-member -->
                    </div><!-- .col -->
                    <div class="col-12 col-md-6 col-lg-3">
                            <div class="team-member">
                                <img src="images/team-4.jpg" alt="">
                                <h3>Mr. John Wick</h3>
                            </div><!-- .team-member -->
                        </div><!-- .col -->

   
        </div><!-- .row -->
    </div><!-- .container -->
</section>


@endsection