@extends('layouts.base')
@section('title')
Algorithm 4.O - Programmers Club
@endsection



@section('content')

<section>
             <img src="{{asset('frontend/img/algo4.png')}}">
          
      <section class="probootstrap-section">
        <div class="container">
          
          <div class="col-md-6">
              <h2>Event Theme</h2>
              <h3>Problems Faced By Mumbaikar</h3>

              <p>The Algorithm event gives a platform to a person with technical background contributing their shares towards society. It lets humans share, feel included, inspired, and be recognized for their contributions.</p>
              <p> This time, the fourth installment of ALGORITHM is presented in the form of Hackathon where you can innovate, collaborate and transform your innovation in the time-span of 24 hrs where the problem statements enlightened are the crises for the event are various issues faced by Mumbaikars in their day to day lives. The issues were put forth by the residents of Mumbai through a survey that we conducted. A Mumbaikar faces a lot of day to day life problems.</p>
              <p>Algorithm 4.O is organised to come up with innovative technical solutions to solve the issues faced by a mumbaikar. The problem definitions that we have put forth are raised through a survey that was conducted in the city of Mumbai. </p>
               <ul>
                  <li>Each team should have 4 members.</li> 
                  <li>Participant teams have to select one out of the given problem statements which will be given exactly 2 days prior the event.</li>
                  <li>Each team gets 32 hours to create any solution(website/mobile application or anything else ) for the problem statement they select.</li>
                  <li> All participants will also receive the certificate of participation and winning teams(each participant) will be awarded interesting prizes.</li>
               </ul>
            
          </div>
        
          <div class="col-md-6 col-md-push-1">
            <h2>Problem Definition</h2>
            <ol>
              <li><strong>TRAFFIC CONGESTION OPTIMIZATION :</strong><br> Traffic system signals out of sync many times on purpose or occasionally when the computers are malfunctioning. The problem of Traffic Congestion needs to be fixed.</li>
              <li><strong>EDUCATION QUALITY :</strong><br>Education is the fastest growing service industry in the globe which needs appropriate methods and strategies to meet the current students' needs, keep them happy, and attract more recruitments.</li>
              <li><strong>AUTOMATED PARKING MANANGEMENT SYSTEM :</strong><br>In the modern society, there is an ever-increasing number of vehicles. This is leading to problems such as large urban parking lots becoming inefficient, increasing difficulty to find open spaces in busy parking lots, as well as the increasing need to devote larger areas of land for additional parking spaces.</li>
              <li><strong>BLOOD BANK :</strong><br>Many blood banks in India still lack the needed facilities to make blood components and thus most of them issue whole blood; thus, contributing to the shortage of blood and unnecessarily overburdening the patient cause harm at times, as blood transfusion reactions are more common. According to an article published in Times of India, in the last five years, over 2.8 million precious units of blood and its components were discarded by blood banks across the country, exposing serious loopholes in the nation's blood banking system.</li>
              <li><strong>CHILD SAFETY :</strong><br>Children are particularly vulnerable to accidents, and their safety requires different approaches from those for adults. There is a need for an application that ensure children safety.</li>
              <li><strong>WOMEN SECURITY :</strong><br> Mumbai is one of the major hubs where women safety is a growing concern and it won’t be a great city till every girl child, in every corner feels safe and can walk fearlessly, even at night. We chant a thousand slogans and take pledges to protect the dignity of our women but that never works. Our actions need to speak louder than the words. </li>
                         
            </ol>
          </div>
          
        </div>
        
      </section>

      <section class="probootstrap-section">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                <h2> Winners!</h2>
                
              </div>
            </div>
      <!--
      <section class="probootstrap-section">
          <div class="container">
            <div class="row">
            -->
              <div class="col-md-3 col-sm-6">
                <div class="probootstrap-teacher text-center probootstrap-animate">
                  <figure class="media">
                    <img src="{{asset('frontend/img/person_1.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                  </figure>
                  <div class="text">
                    <h3>Chris Worth</h3>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="probootstrap-teacher text-center probootstrap-animate">
                  <figure class="media">
                    <img src="{{asset('frontend/img/person_5.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                  </figure>
                  <div class="text">
                    <h3>Janet Morris</h3>
                  </div>
                </div>
              </div>
              <div class="clearfix visible-sm-block visible-xs-block"></div>
              <div class="col-md-3 col-sm-6">
                <div class="probootstrap-teacher text-center probootstrap-animate">
                  <figure class="media">
                    <img src="{{asset('frontend/img/person_6.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                  </figure>
                  <div class="text">
                    <h3>Linda Reyez</h3>
                  </div>
                </div>
              </div>
              <div class="clearfix visible-sm-block visible-xs-block"></div>
              <div class="col-md-3 col-sm-6">
                <div class="probootstrap-teacher text-center probootstrap-animate">
                  <figure class="media">
                    <img src="{{asset('frontend/img/person_6.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                  </figure>
                  <div class="text">
                    <h3>Linda Reyez</h3>
                  </div>
                </div>
              </div>
              
           <!-- </div>  -->
          </div>
          </div>
        </section>

@endsection
