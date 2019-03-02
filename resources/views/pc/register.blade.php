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
                    @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <input class="col-lg-12" type="text" name= "tname" placeholder="Team Name">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" name= "pname1" placeholder="1. Leader Name">
                             </div>
                            <div class="col-lg-3">
                                <input type="email" name= "pnameEmail1" placeholder="Email">
                            </div>
                            <div class="col-lg-3">
                                <input type="number" name= "pnameContact1" placeholder="Mobile">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" name= "pnameCollege1" placeholder="College">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" name= "pname2" placeholder="2. Name">
                             </div>
                            <div class="col-lg-3">
                                <input type="email" name= "pnameEmail2" placeholder="Email">
                            </div>
                            <div class="col-lg-3">
                                <input type="number" name= "pnameContact2" placeholder="Mobile">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" name= "pnameCollege2" placeholder="College">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" name= "pname3" placeholder="3. Name">
                             </div>
                            <div class="col-lg-3">
                                <input type="email" name= "pnameEmail3" placeholder="Email">
                            </div>
                            <div class="col-lg-3">
                                <input type="number" name= "pnameContact3" placeholder="Mobile">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" name= "pnameCollege3" placeholder="College">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" name= "pname4" placeholder="4. Name">
                             </div>
                            <div class="col-lg-3">
                                <input type="email" name= "pnameEmail4" placeholder="Email">
                            </div>
                            <div class="col-lg-3">
                                <input type="number" name= "pnameContact4" placeholder="Mobile">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" name= "pnameCollege4" placeholder="College">
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