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

      .unit-title{
        padding: 25px 0px 0px;
      }
    </style>
@endpush

@section('content')
    <!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-content">
          <p><span>//</span> BSB51918</p>
          <h1>Diploma of Leadership and Management</h1>
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
              <img src="{{asset('assets/images/bsb51918-diploma-of-leadership-and-management.jpg')}}" alt="Course" class=" border_radius img-responsive bottom15">
              <div class="detail_course">
                <div class="row">
                  <div class="col-md-8">
                    <table>
                      <tr>
                        <td>
                          <span class="icony"><i class="fa fa-info"></i></span>
                        </td>
                        <td>
                          <p>Business Services Training Package</p>
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
                          <p><a href="{{route('qualificationFile', 'BSB51918_R4')}}">Qualification (click to download)</a></p>
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
                  <li role="presentation">
                    <a href="#ElectiveUnits" aria-controls="ElectiveUnits" role="tab" data-toggle="tab">Elective Units</a>
                  </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="Overview">
                    <div class="course-overview">
                      <h3>Qualification Descriptions</h3>
                      <p>
                        This qualification reflects the role of individuals who apply knowledge, practical skills and experience in leadership and management across a range of enterprise and industry contexts.

                        Individuals at this level display initiative and judgement in planning, organising, implementing and monitoring their own workload and the workload of others. They use communication skills to support individuals and teams to meet organisational or enterprise requirements.

                        They plan, design, apply and evaluate solutions to unpredictable problems, and identify, analyse and synthesise information from a variety of sources.
                      </p>
                    </div>
                    <div class="course-overview">
                      <h3>Licensing/Regulatory Information</h3>
                      <p>No licensing, legislative or certification requirements apply to this qualification at the time of publication.</p>
                    </div>
                    <div class="course-overview">
                      <h3>Entry Requirements</h3>
                      <p>Nil</p>
                    </div>
                    <div class="course-overview">
                      <h3>Packaging Rules</h3>
                      <ul>
                        <li>Total number of units = 12</li>
                        <li>Core Units = 4</li>
                        <li>Elective Units = 8
                          <p style="padding: 5px 0px;"><strong>of which - </strong></p>
                          <ul>
                            <li>4 elective units must be selected from Group A</li>
                            <li>up to 4 may be additional units from Group A or Group B</li>
                            <li>if not listed below, up to 2 electives may be from Diploma or above in the Business Services Training Package</li>
                            <li>
                              if not listed below, 1 elective unit may be from any currently endorsed Training Package or accredited course at Diploma level.
                            </li>

                            <p style="padding: 5px 0px;">
                              Elective units must be relevant to the work environment and the qualification, maintain the integrity of the AQF alignment and contribute to a valid, industry-supported vocational outcome.
                            </p>
                            
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="course-overview">
                      <h3>Qualification Mapping Information</h3>
                      <p>
                        Supersedes and is equivalent to BSB51915 Diploma of Leadership and Management.
                      </p>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="Competency">
                    <div class="core-competency">
                      <ul>
                        <li>BSBIPR501 - Manage intellectual property to protect and grow business</li>
                        <li>BSBREL502 - Build international business networks</li>
                        <li>BSBLDR504 - Implement diversity in the workplace</li>
                        <li>BSBHRM511 - Manage expatriate staff	</li>
                        <li>BSBCOM503 - Develop processes for the management of breaches in compliance requirements	s</li>
                        <li>BSBHRM512 - Develop and manage performance management processes	</li>
                        <li>BSBMGT516 - Facilitate continuous improvement	</li>
                        <li>BSBHRM513 - Manage workforce planning	</li>
                        <li>BSBMGT518 - Develop organisation policy</li>
                        <li>BSBWOR502 - Lead and manage team effectiveness</li>
                        
                        <li>BSBWOR501 - Manage personal work priorities and professional development</li>
                        <li>BSBCUS501 - Manage quality customer service   		</li>
                        <li>BSBRSK501 - Manage risk   		</li>
                        <li>BSBXCM501 - Lead communication in the workplace 	</li>
                        <li>BSBWRK520 - Manage employee relations   		</li>
                        <li>BSBMKG512 - Forecast international market and business needs   		</li>
                        <li>BSBFRA502 - Manage a franchise operation   		</li>
                        <li>BSBINN501 - Establish systems that support innovation   		</li>
                        <li>BSBHRM405 - Support the recruitment, selection and induction of staff   		</li>
                        <li>BSBFIM501 - Manage budgets and financial plans   		</li>

                        <li>BSBMGT502 - Manage people performance   		</li>
                        <li>BSBLED501 - Develop a workplace learning environment     		</li>
                        <li>BSBLDR502 - Lead and manage effective workplace relationships     		</li>
                        <li>BSBSLS502 - Lead and manage a sales team      		</li>
                        <li>BSBMKG507 - Interpret market trends and developments     		</li>
                        <li>BSBADM502 - Manage meetings      		</li>
                        <li>BSBLDR511 - Develop and use emotional intelligence    		</li>
                        <li>BSBMGT520 - Plan and manage the flexible workforce   		</li>
                        <li>BSBSLS501 - Develop a sales plan     		</li>
                        <li>BSBSUS501 - Develop workplace policy and procedures for sustainability   		</li>
                        
                        <li>BSBINM501 - Manage an information or knowledge management system   	   		</li>
                        <li>BSBLDR513 - Communicate with influence   		</li>
                        <li>BSBPMG522 - Undertake project work   		</li>
                        <li>BSBMGT517 - Manage operational plan      		</li>
                        <li>BSBWHS521 - Ensure a safe workplace for a work area     		</li>
                        <li>BSBXBD501 - Develop big data strategy      		</li>
                        <li>BSBINN502 - Build and sustain an innovative work environment	</li>
                        <li>BSBMGT519 - Incorporate digital solutions into plans and practices    		</li>
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
                            <th>BSBLDR502</th>
                            <td>Lead and manage effective workplace relationships</td>
                          </tr>
                          <tr>
                            <th>BSBLDR511</th>
                            <td>Develop and use emotional intelligence</td>
                          </tr>
                          <tr>
                            <th>BSBMGT517</th>
                            <td>Manage operational plan</td>
                          </tr>
                          <tr>
                            <th>BSBWOR502</th>
                            <td>Lead and manage team effectiveness</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="ElectiveUnits">
                    <div class="core-Units">
                      <div class="unit-title">
                        <h3>Group A</h3>
                      </div>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Unit Code</th>
                            <th>Unit Title</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <th>BSBCUS501</th>
                            <td>
                              Manage quality customer service
                            </td>
                          </tr>
                          <tr>
                            <th>BSBFIM501</th>
                            <td>Manage budgets and financial plans</td>
                          </tr>
                          <tr>
                            <th>BSBHRM405</th>
                            <td>Support the recruitment, selection and induction of staff</td>
                          </tr>
                          <tr>
                            <th>BSBINN502</th>
                            <td>Build and sustain an innovative work environment </td>
                          </tr>
                          <tr>
                            <th>BSBIPR501</th>
                            <td>Manage intellectual property to protect and grow business</td>
                          </tr>
                          <tr>
                            <th>BSBLDR504</th>
                            <td>Implement diversity in the workplace</td>
                          </tr>
                          <tr>
                            <th>BSBLDR513</th>
                            <td>Communicate with influence</td>
                          </tr>
                          <tr>
                            <th>BSBMGT502</th>
                            <td>Manage people performance</td>
                          </tr>
                          <tr>
                            <th>BSBMGT516 </th>
                            <td>Facilitate continuous improvement</td>
                          </tr>
                          <tr>
                            <th>BSBMGT518</th>
                            <td>Develop organisation policy</td>
                          </tr>
                          <tr>
                            <th>BSBMGT519</th>
                            <td>Incorporate digital solutions into plans and practices</td>
                          </tr>
                          <tr>
                            <th>BSBMGT520</th>
                            <td>Plan and manage the flexible workforce</td>
                          </tr>
                          <tr>
                            <th>BSBPMG522</th>
                            <td>Undertake project work</td>
                          </tr>
                          <tr>
                            <th>BSBRSK501</th>
                            <td>Manage risk</td>
                          </tr>
                          <tr>
                            <th>BSBWHS521</th>
                            <td>Ensure a safe workplace for a work area</td>
                          </tr>
                          <tr>
                            <th>BSBWOR501</th>
                            <td>Manage personal work priorities and professional development</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="core-Units">
                      <div class="unit-title">
                        <h3>Group B</h3>
                      </div>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Unit Code</th>
                            <th>Unit Title</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <th>BSBADM502</th>
                            <td>
                              Manage meetings 
                            </td>
                          </tr>
                          <tr>
                            <th>BSBCOM503</th>
                            <td>Develop processes for the management of breaches in compliance requirements</td>
                          </tr>
                          <tr>
                            <th>BSBFRA502</th>
                            <td>Manage a franchise operation</td>
                          </tr>
                          <tr>
                            <th>BSBHRM511</th>
                            <td>Manage expatriate staff</td>
                          </tr>
                          <tr>
                            <th>BSBHRM512</th>
                            <td>Develop and manage performance-management processes</td>
                          </tr>
                          <tr>
                            <th>BSBHRM513</th>
                            <td>Manage workforce planning</td>
                          </tr>
                          <tr>
                            <th>BSBINM501</th>
                            <td>Manage an information or knowledge management system</td>
                          </tr>
                          <tr>
                            <th>BSBINN501</th>
                            <td>Establish systems that support innovation</td>
                          </tr>
                          <tr>
                            <th>BSBLED501</th>
                            <td>Develop a workplace learning environment</td>
                          </tr>
                          <tr>
                            <th>BSBMGT521</th>
                            <td>Plan, implement and review a quality assurance program</td>
                          </tr>
                          <tr>
                            <th>BSBMKG507</th>
                            <td>Interpret market trends and developments</td>
                          </tr>
                          <tr>
                            <th>BSBMKG512</th>
                            <td>Forecast international market and business needs</td>
                          </tr>
                          <tr>
                            <th>BSBREL502</th>
                            <td>Build international business networks</td>
                          </tr>
                          <tr>
                            <th>BSBSLS501</th>
                            <td>Develop a sales plan</td>
                          </tr>
                          <tr>
                            <th>BSBSUS501</th>
                            <td>Develop workplace policy and procedures for sustainability</td>
                          </tr>
                          <tr>
                            <th>BSBWRK520</th>
                            <td>Manage employee relations</td>
                          </tr>
                          <tr>
                            <th>BSBXBD501</th>
                            <td>Develop big data strategy</td>
                          </tr>
                          <tr>
                            <th>BSBXCM501</th>
                            <td>Lead communication in the workplace</td>
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