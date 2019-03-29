@extends('pc.layouts.base')

@section('title')
About
@endsection

@section('content')

<section class="page-header">
<div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                            <h1>ABOUT US</h1>
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->
</section>

<section class="about-pc">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="about-heading">
                    <h2 class="entry-title text-left">Programmers Club</h2>
                    <p>Anjuma-I-Islams Kalsekar Technical Camous is a growing Technical Institute which aspires to enhance its teaching, learning and research work. An institute of higher learning, merely dedicated for the global enrichment of students at the individual level to meet the diverse needs of the evolving technology and society.</p>
                    <p>Just like the Institution, its Department of Computer Engineering encourages students and empowers the teaching and non-teaching staff to push their limits to exceed the global expectations through curriculum excellence, social enrichment and serve well to the people.</p>
                    <p>One of the evolving approaches of the Department led to the endowment of Programmers Club, a group of ordinary students with a passion for creativity and programming.</p>
                    <p>In Programmers Club, we truly believe in the power of illustration and transformation; thus, engaging and inspiring young programmers to come together on a single platform where they can interact with each other and share their innovative ideas.
                            At Programmers Club, our mission is to make students take advantage of the resources provided and help them build their skills by providing them with three key tools:</p>
                </div><!-- .about-heading -->
            </div><!-- .col -->
            <div class="col-lg-4">
                <img src="{{asset('assets/images/pc_image.jpg')}}" style="width:400px; ">
            </div>
</section>




@endsection