@extends('layouts.app')

@push('css')
    <style>
      .blog-title{
        font-size: 1.5rem;
      }

      .image img{
        max-width: 100%;
        height: 420px;
      }
    </style>
@endpush

@section('content')
   <!--Page Header-->
    <section class="page_header padding-top">
        <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
            <h1>Our Blog</h1>
            <p>We offer the most complete house renovating services in the country</p>
            <div class="page_nav">
            <span>You are here:</span> <a href="{{route('alpha')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Blog</span>
            </div>
            </div>
        </div>
        </div>
    </section>
  <!--Page Header-->

  <!--BLOG SECTION-->
  <section id="blog" class="padding">
    <div class="container">
      <h2 class="hidden">Blog</h2>
      <div class="row">
        <div class="col-md-9 col-sm-8">
            @isset($blogs)
              @each('pages.blogList', $blogs, 'blog', 'components.empty')

              <div class="pager_nav wow fadeIn" data-wow-delay="600ms">
                @isset($blogs)
                  {{ $blogs->links() }}
                @endisset
              </div>
            @endisset
        </div>
        <div class="col-md-3 col-sm-4">
          <aside class="sidebar bg_grey border-radius wow fadeIn" data-wow-delay="300ms">
            <div class="widget heading_space">
              <h3 class="bottom20">Our Courses</h3>
              <div class="media">
                <div class="media-body">
                  <h5 class="bottom5">Certificate III in Landscape Construction</h5>
                  <a href="{{route('AHC30916')}}" class="btn-primary border_radius bottom5">Details</a>
                </div>
              </div>
              <div class="media">
                <div class="media-body">
                  <h5 class="bottom5">Diploma of Leadership and Management</h5>
                  <a href="{{route('BSB51918')}}" class="btn-primary border_radius bottom5">Details</a>
                </div>
              </div>
              <div class="media">
                <div class="media-body">
                  <h5 class="bottom5">Certificate I in Construction</h5>
                  <a href="{{route('CPC10111')}}" class="btn-primary border_radius bottom5">Details</a>
                </div>
              </div>
              <div class="media">
                <div class="media-body">
                  <h5 class="bottom5">Certificate III in Civil Construction Plant Operations</h5>
                  <a href="{{route('RII30815')}}" class="btn-primary border_radius bottom5">Details</a>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!--BLOG SECTION--> 
@endsection