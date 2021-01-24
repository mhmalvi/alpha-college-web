@extends('layouts.app')

@section('content')
    <!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-content">
          <h1>Contact Us</h1>
          <p>Alpha College puts effort to plan on building a house that satisfies customers. </p>
          <div class="page_nav">
        <span>You are here:</span> <a href="{{route('alpha')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Contact Us</span>
        </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <!--Contact Deatils -->
  <section id="contact" class="padding">
    <div class="container">
      <div class="row padding-bottom">
        <div class="col-md-4 contact_address heading_space wow fadeInLeft" data-wow-delay="1000ms">
          <h2 class="heading heading_space">Contact With Us<span class="divider-left"></span></h2>
          <p class="text-justify">Reach Alpha College whenever you want for your construction and landscape solutions. We answer your queries at the earliest convenience. You can drop your questions at Alpha College’s message form or directly email or call Alpha College at the given address.</p>
          <div class="address">
            <i class="icon icon-map-pin border_radius"></i>
            <h4>Visit Us</h4>
            <p>28 Chifley St SMITHFIELD NSW 2164, Australia</p>
          </div>
          <div class="address">
            <i class="icon icon-mail border_radius"></i>
            <h4>Email Us</h4>
            <p><a href="mailto:alphacollege.sydney@gmail.com">alphacollege.sydney@gmail.com</a></p>
          </div>
          <div class="address">
            <i class="icon icon-phone4 border_radius"></i>
            <h4>Call Us</h4>
            <p>0431 429 945 | 431429945</p>
          </div>
        </div>

        <div class="col-md-8 wow fadeInRight" data-wow-delay="1000ms" style="padding-left: 75px!important;">
          <h2 class="heading heading_space">Fill the Contact Form<span class="divider-left"></span></h2>
          <form class="form-inline findus" id="contact-form" onSubmit="return false">
            <div class="row">
              <div class="col-md-12">
                <div id="result"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name"  name="name" id="name" required>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Website" name="website" id="website" required>
                </div>
              </div>
              <div class="col-md-12">
                <textarea placeholder="Comment"  name="message" id="message"></textarea>
                <button class="btn_common yellow border_radius" id="btn_submit">Submit</button>
              </div>
            </div>
          </form>
          <ul class="social_icon black top30">
            <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#." class="twitter"><i class="icon-twitter4"></i></a></li>
            <li><a href="#." class="dribble"><i class="icon-dribbble5"></i></a></li>
            <li><a href="#." class="instagram"><i class="icon-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--Contact Deatils -->
@endsection