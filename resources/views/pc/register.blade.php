@extends('pc.layouts.base')

@section('content')


<div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                            <h1>REGISTRATION</h1>
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->


<section class="register-form">
    <div class="container">
  

        <div class="row justify-content-between">
            <div class="col-12 col-lg-12">
                <div class="contact-form">
                        <h3>Registration Form</h3>

                <form action="{{route('addParticipant')}}" method="POST">
                        <div class="row">
                            <div class="col-lg-12">
                                <input class="col-lg-12" type="text" placeholder="Team Name">
                            </div>
                            <div class="col-lg-3">
                                <input type="email" placeholder="1. Leader Name">
                             </div>
                            <div class="col-lg-3">
                                <input type="email" placeholder="Email">
                            </div>
                            <div class="col-lg-3">
                                <input type="email" placeholder="Mobile">
                            </div>
                            <div class="col-lg-3">
                                <input type="email" placeholder="College">
                            </div>
                            <div class="col-lg-3">
                                <input type="email" placeholder="2. Name">
                             </div>
                            <div class="col-lg-3">
                                <input type="email" placeholder="Email">
                            </div>
                            <div class="col-lg-3">
                                <input type="email" placeholder="Mobile">
                            </div>
                            <div class="col-lg-3">
                                <input type="email" placeholder="College">
                            </div>
                            <div class="col-lg-3">
                                <input type="email" placeholder="3. Name">
                             </div>
                            <div class="col-lg-3">
                                <input type="email" placeholder="Email">
                            </div>
                            <div class="col-lg-3">
                                <input type="email" placeholder="Mobile">
                            </div>
                            <div class="col-lg-3">
                                <input type="email" placeholder="College">
                            </div>
                            <div class="col-lg-3">
                                <input type="email" placeholder="4. Name">
                             </div>
                            <div class="col-lg-3">
                                <input type="email" placeholder="Email">
                            </div>
                            <div class="col-lg-3">
                                <input type="email" placeholder="Mobile">
                            </div>
                            <div class="col-lg-3">
                                <input type="email" placeholder="College">
                            </div>
                            
                        </div>
                        <div class="register-button text-center"><input class="btn-success" type="submit" value="Submit"></div>
                    </form>
                </div><!-- .contact-form -->
            </div><!-- .col -->

          
        </div><!-- .row -->
    </div><!-- .container -->
</section>

@endsection