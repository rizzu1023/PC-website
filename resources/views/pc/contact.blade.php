@extends('pc.layouts.base')


@section('content')

<section class="page-header">
<div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                            <h1>CONTACT US</h1>
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->
</section>

<section class="contact-section" style="padding:30px 0px">
<div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-6">
                <div class="contact-form">
                    <h3>Leave a Message</h3>

                    <form>
                        <input type="text" placeholder="Your Name">
                        <input type="email" placeholder="Your Email">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Your Message" rows="4"></textarea>
                        <input type="submit" value="Send Message">
                    </form>
                </div><!-- .contact-form -->
            </div><!-- .col -->

            <div class="col-12 col-lg-6">
                <div class="contact-info">
                    <h3>Contact Information</h3>

                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum. </p>

                    <ul class="p-0 m-0">
                        <li><span>Location:</span>40 Baria Sreet 133/2 NewYork City, US</li>
                        <li><span>Email:</span>connect@programmersclub.co.in</li>
                        <li><span>Phone:</span>Jhon : 421236666<br>Doe : 8441988897</li>
                    </ul>
                </div><!-- .contact-info -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->


@endsection