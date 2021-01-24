@extends('layouts.app')

@push('css')
    <style>
      .gap{
        padding: 25px 0px;
      }

      .detail_course p{
        margin-left: 15px;
      }

      .course-overview{
        padding: 15px;
      }

      .course-overview h3{
        font-weight: 700;
        color: #2D2D2D;
        padding: 15px 0px;
      }

      .course-overview p{
        text-align: justify;
      }

      .course-overview ul{
        padding-left: 15px;
      }

      .course-overview ul li{
        list-style-type: circle;
      }

      .core-competency ul li{
        padding: 15px;
        border-bottom: 1px solid #dddddd;
      }

      .core-Units table{
        margin: 15px 0px;
      }
    </style>
@endpush

@section('content')
    <!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-content">
          <p><span>//</span> AHC30916</p>
          <h1>Certificate III in Landscape Construction</h1>
          <div class="page_nav">
        <span>You are here:</span> <a href="{{URL::to('/')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Courses</span>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!--Page Header-->
  
  
  <!-- Courses -->
  <section id="course_all" class="padding-bottom-half padding-top">
    <div class="container">
      <div class="row">
        <div style="display: flex; justify-content: center;">
          <div class="col-sm-8 course_detail wow fadeIn" data-wow-delay="400ms">
            <img src="{{asset('assets/images/AHC30916.jpg')}}" alt="Course" class=" border_radius img-responsive bottom15">
  
            <div class="detail_course">
              <div class="row">
                <div class="col-md-8">
                  <table>
                    <tr>
                      <td>
                        <span class="icony"><i class="fa fa-info"></i></span>
                      </td>
                      <td>
                        <p>Agriculture, Horticulture and Conservation and Land Management Training Package </p>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="col-md-4">
                  <table>
                    <tr>
                      <td>
                        <span class="icony"><i class="fa fa-download" aria-hidden="true"></i></span>
                      </td>
                      <td>
                        <p><a href="{{route('qualificationFile', 'AHC30916_R2')}}">Qualification (click to download)</a></p>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
  
            <div class="gap"></div>
  
            <div>
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                  <a href="#Overview" aria-controls="Overview" role="tab" data-toggle="tab">Overview</a>
                </li>
                <li role="presentation">
                  <a href="#Competency" aria-controls="Competency" role="tab" data-toggle="tab">Core Competency</a>
                </li>
                <li role="presentation">
                  <a href="#Units" aria-controls="Units" role="tab" data-toggle="tab">Core Units</a>
                </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="Overview">
                  <div class="course-overview">
                    <h3>Qualification Descriptions</h3>
                    <p>
                      This qualification provides a general vocational outcome in landscape construction. The landscaping industry expects this qualification to be achieved to meet job outcomes at this level. 
                      No occupational licensing, legislative or certification requirements apply to this qualification at the time of publication.
                    </p>
                  </div>
                  <div class="course-overview">
                    <h3>Entry Requirements</h3>
                    <p>There are no entry requirements for this qualification.</p>
                  </div>
                  <div class="course-overview">
                    <h3>Packaging Rules</h3>
                    <ul>
                      <li>Total number of units = 15</li>
                      <li>Core Units = 11</li>
                      <li>Elective Units = 4</li>
                    </ul>
                  </div>
                  <div class="course-overview">
                    <h3>Qualification Mapping Information</h3>
                    <p>
                      This qualification is equivalent to AHC30910 Certificate III in Landscape Construction.
                    </p>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="Competency">
                  <div class="core-competency">
                    <ul>
                      <li>AHCLSC307 - Implement a retaining wall project</li>
                      <li>AHCLSC302 - Construct landscape features using concrete</li>
                      <li>AHCLSC301 - Set out site for construction works</li>
                      <li>AHCDRG301 - Install drainage systems</li>
                      <li>AHCWHS301 - Contribute to work health and safety processes</li>
                      <li>AHCPCM302 - Provide information on plants and their culture</li>
                      <li>AHCLSC303 - Construct brick and block structures and features</li>
                      <li>AHCSOL303 - Implement soil improvements for garden and turf areas</li>
                      <li>AHCPGD301 - Implement a plant establishment program</li>
                      <li>AHCLSC306 - Implement a paving project</li>
                    </ul>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="Units">
                  <div class="core-Units">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Unit Code</th>
                          <th>Unit Title</th>
                        </tr>
                      </thead>
  
                      <tbody>
                        <tr>
                          <th>AHCDRG301</th>
                          <td>Install drainage systems</td>
                        </tr>
                        <tr>
                          <th>AHCLSC301</th>
                          <td>Set out site for construction works</td>
                        </tr>
                        <tr>
                          <th>AHCLSC302</th>
                          <td>Construct landscape features using concrete</td>
                        </tr>
                        <tr>
                          <th>AHCLSC303</th>
                          <td>Construct brick and/or block structures and features</td>
                        </tr>
                        <tr>
                          <th>AHCLSC305</th>
                          <td>Construct stone structures and features</td>
                        </tr>
                        <tr>
                          <th>AHCLSC306</th>
                          <td>Implement a paving project</td>
                        </tr>
                        <tr>
                          <th>AHCLSC307</th>
                          <td>Implement a retaining wall project</td>
                        </tr>
                        <tr>
                          <th>AHCPCM302</th>
                          <td>Provide information on plants and their culture</td>
                        </tr>
                        <tr>
                          <th>AHCPGD301</th>
                          <td>Implement a plant establishment program</td>
                        </tr>
                        <tr>
                          <th>AHCSOL303</th>
                          <td>Implement soil improvements for garden and turf areas</td>
                        </tr>
                        <tr>
                          <th>AHCWHS301</th>
                          <td>Contribute to work health and safety processes</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Courses -->
@endsection