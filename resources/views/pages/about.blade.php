@extends('layouts.app')

@section('content')
    <!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-content">
          <h1>About Us</h1>
          <p>Alpha College puts effort to plan on building a house that satisfies customers.</p>
          <div class="page_nav">
        <span>You are here:</span> <a href="{{route('alpha')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>About Us</span>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!--Page Header-->
  
  
  <!--ABout US-->
  <section id="about" class="padding">
    <div class="container aboutus">
      <div class="row">
        <div class="col-md-7 wow fadeInLeft" data-wow-delay="300ms">
         <h2 class="heading heading_space">Welcome to Alpha <span class="divider-left"></span></h2>
         <h4 class="bottom25 text-justify">
          Alpha College is popular in Australia adhering to landscape studies. Alpha College also has stepped into the management field by providing a Diploma in Leadership and Management. Alpha College provides opportunities for students to build on sustainable structures that will be able to adapt to climate change. Established in 2017, based on the construction industry, Alpha College provides Certificate I to Diploma level courses. 
         </h4>
         <p class="bottom25 text-justify">
          The professionals operating Alpha College have years of experience in the construction and landscape field. We understand the importance of training and offer a solution that ensures you get the qualification in landscape and construction you want without having to sit through long and drawn out training courses during hours that won’t suit you at all. Alpha College aims to offer a simple way for construction and landscape professionals to access the Recognition of Prior Learning pathway and full face to face training so you can prioritise your study and fast track your training to allow you to get started in the landscape industry without unnecessary delay.
        </p>
        </div>
        <div class="col-md-5 wow fadeInRight" data-wow-delay="300ms">
          <div class="image">
           <img src="{{asset('assets/images/about-us.jpg')}}" alt="alpha">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--ABout US-->
  
  <!-- Company History -->
  <section id="history" class="padding bg_grey">
    <div class="container">
      <div class="row">
        <div class="col-md-12 wow fadeInDown">
         <h2 class="heading heading_space">About Alpha College <span class="divider-left"></span></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 history_wrap bottom25 wow fadeIn" data-wow-delay="300ms">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
              <div class="image"><img src="{{asset('assets/images/about/mission.svg')}}" alt="our history" style="max-height: 150px;"></div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
              <h3>Mission</h3>
              <p class="text-justify">
                Alpha College has garnered its mark in the landscape and construction world for building a house that has a robust base. 
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 history_wrap bottom25 wow fadeIn" data-wow-delay="400ms">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
              <div class="image"><img src="{{asset('assets/images/about/vision.svg')}}" alt="our history" style="max-height: 150px;"></div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
              <h3>Vision</h3>
              <p class="text-justify">
                Alpha College applies its practical knowledge for qualitative results and focuses on a holistic approach towards expanding horizons to grow in the field of the construction industry and management field for imprinting worldwide dominance. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Company History -->
@endsection