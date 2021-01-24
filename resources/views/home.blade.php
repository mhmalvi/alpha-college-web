@extends('layouts.app')

@push('css')
  <style>
      .course-title a{
        font-size: 1.5rem;
      }
  </style>
@endpush

@section('content')
{{-- slider --}}
@include('components.slider')
<!--ABout US-->
<section id="about" class="padding">
    <div class="container">
      <div class="row">
      <div class="icon_wrap padding-bottom-half clearfix">
        <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="300ms">
          <i class="fa fa-building-o" aria-hidden="true"></i>
           <h4 class="text-capitalize bottom20 margin10">RECOGNITION</h4>
           <p class="no_bottom">
            Recognized in the landscape industry since its inception in 2017.
           </p>
        </div>
        <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="400ms">
          <i class="fa fa-graduation-cap" aria-hidden="true"></i>
           <h4 class="text-capitalize bottom20 margin10">EXPERTS</h4>
           <p class="no_bottom">
            Equipped with years of qualified expertise in the landscape and construction industry.
           </p>
        </div>
        <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
          <i class="fa fa-certificate" aria-hidden="true"></i>
           <h4 class="text-capitalize bottom20 margin10">CERTIFICATES</h4>
           <p class="no_bottom">
            Focuses on providing exceptional certificates that add value to your profile to progress in the construction field.
           </p>
        </div>
        </div>
      </div>
    </div> 
    <div class="container margin_top">
      <div class="row">
        <div class="col-md-5 col-sm-6 wow fadeInRight" data-wow-delay="300ms">
           <div style="display: table-cell; vertical-align: middle;">
            <img src="{{asset('assets/images/about.jpg')}}" alt="our priorties" class="img-responsive" style="width:100%;">
           </div>
        </div>
        <div class="col-md-7 col-sm-6 priorty wow fadeInLeft" data-wow-delay="300ms">
          <h2 class="heading bottom25">Welcome to Alpha College <span class="divider-left"></span></h2>
          <p class="half_space">
            Building a house might take a long time but  Alpha College brings a solution to this problem. 
            Alpha College is an RTO that contributes to knowledge-based development at the regional, national, and international levels.
          </p>

          <p class="half_space py-3 text-justify">
            <strong>Approach: </strong>We provide a pragmatic learning environment which is resourceful, and updated. Our workshop integrates real-life experience combined with theoretical knowledge to develop future generations with skill-based practises to reach more audiences.    
          </p>

          <p class="half_space py-3 text-justify">
            <strong>Courses: </strong>Alpha College's courses are designed in an efficient manner which fulfills the needs of the candidate's no matter how broad or narrow their knowledge level is. It touches from rudimentary to advanced level of the building process.    
          </p>
        </div>
      </div>
    </div>
  </section>
  <!--ABout US-->
  
  
  <!-- Courses -->
  <section id="courses" class="padding parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="heading heading_space wow fadeInDown">Our Courses<span class="divider-left"></span></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="slider_wrapper">
            <div id="course_slider" class="owl-carousel">
              <div class="item">
                <div class="image bottom20">
                  <img src="{{asset('assets/images/course-AHC30916.jpg')}}" alt="Courses" class="img-responsive border_radius">
                </div>
                <h3 class="bottom15 course-title"><a href="{{route('AHC30916')}}">Certificate III in Landscape Construction</a></h3>
                <p class="bottom15 text-justify">
                  {{mb_strimwidth('This qualification provides a general vocational outcome in landscape construction. The landscaping industry expects this qualification to be achieved to meet job outcomes at this level. No occupational licensing, legislative or certification requirements apply to this qualification at the time of publication.', 0, 200, '...')}}
                </p>
                <a href="{{route('AHC30916')}}" class="btn_common blue border_radius">Read More</a>
              </div>
              <div class="item">
                <div class="image bottom20">
                  <img src="{{asset('assets/images/course-BSB51918.jpg')}}" alt="Courses" class="img-responsive border_radius">
                </div>
                <h3 class="bottom15 course-title"><a href="{{route('BSB51918')}}">Diploma of Leadership and Management</a></h3>
                <p class="bottom15">
                  {{mb_strimwidth('This qualification reflects the role of individuals who apply knowledge, practical skills and experience in leadership and management across a range of enterprise and industry contexts. Individuals at this level display initiative and judgement in planning, organising, implementing and monitoring their own workload and the workload of others', 0, 200, '...')}}
                </p>
                <a href="{{route('BSB51918')}}" class="btn_common blue border_radius">Read More</a>
              </div>
              <div class="item">
                <div class="image bottom20">
                  <img src="{{asset('assets/images/course-CPC10111.jpg')}}" alt="Courses" class="img-responsive border_radius">
                </div>
                <h3 class="bottom15 course-title"><a href="{{route('CPC10111')}}">Certificate I in Construction</a></h3>
                <p class="bottom15">
                  {{mb_strimwidth('This qualification reflects the role of individuals who apply knowledge, practical skills and experience in leadership and management across a range of enterprise and industry contexts', 0, 200, '...')}}
                </p>
                <a href="{{route('CPC10111')}}" class="btn_common blue border_radius">Read More</a>
              </div>
              <div class="item">
                <div class="image bottom20">
                  <img src="{{asset('assets/images/course-RII30815.jpg')}}" alt="Courses" class="img-responsive border_radius">
                </div>
                <h3 class="bottom15 course-title"><a href="{{route('RII30815')}}">Certificate III in Civil Construction Plant Operations</a></h3>
                <p class="bottom15">
                  {{mb_strimwidth('This qualification reflects the role of individuals who apply knowledge, practical skills and experience in leadership and management across a range of enterprise and industry contexts. Individuals at this level display initiative and judgement in planning, organising, implementing and monitoring their own workload and the workload of others', 0, 200, '...')}}
                </p>
                <a href="{{route('RII30815')}}" class="btn_common blue border_radius">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Courses -->
@endsection