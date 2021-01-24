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
          <p><span>//</span> RII30815</p>
          <h1>Certificate III in Civil Construction Plant Operations</h1>
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
            <img src="{{asset('assets/images/RII30815.jpg')}}" alt="Course" class=" border_radius img-responsive bottom15">
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
                        <p><a href="{{route('qualificationFile', 'RII30815_R4')}}">Qualification (click to download)</a></p>
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
                  <a href="#Unitsofcompetency" aria-controls="Competency" role="tab" data-toggle="tab">Units of Competency</a>
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
                      This qualification reflects the role of a skilled operator working with civil construction plant, who applies a broad range of skills in a varied work context, using some discretion and judgement and relevant theoretical knowledge. The individual may provide theoretical advice and support a team. 
                      Licensing, legislative, regulatory and certification requirements that apply to this qualification can vary between states, territories, and industry sectors. Relevant information must be sourced prior to application of the qualification.
                    </p>
                  </div>
                  <div class="course-overview">
                    <h3>Entry Requirements</h3>
                    <p>There are no entry requirements for this qualification.</p>
                  </div>
                  <div class="course-overview">
                    <h3>Packaging Rules</h3>
                    <p>
                      The following provides the packaging rules for this qualification, followed by the list of relevant units of competency.
                    </p>
                    <ul>
                      <li>Total number of units = 19</li>
                      <li>Core Units = 14</li>
                      <li>Elective Units = 5
                        <p style="padding: 5px 0px;"><strong>of which - </strong></p>
                        <ul>
                          <li>at least one (1) must be chosen from Group A</li>
                          <li>at least two (2) must be chosen from Group B</li>
                          <li>
                            no more than two (2) may be chosen from Group C
                          </li>
                          <li>
                            no more than one (1) may be chosen from elsewhere within this training package, or from another endorsed training package, or from an accredited course.
                          </li>
                          <p style="padding: 5px 0px;">
                            Elective units must be relevant to the work environment and the qualification, maintain the integrity of the AQF alignment and contribute to a valid, industry-supported vocational outcome.
                          </p>

                          <p><strong>or</strong></p>

                          <li>at least two (2) must be chosen from Group A</li>
                          <li>a further three (3) may be chosen from Group A, B, or C</li>
                          <li>
                            no more than one (1) may be chosen from elsewhere within this training package, or from another endorsed training package, or from an accredited course.
                          </li>
                          
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="course-overview">
                    <p>
                      All elective units selected from outside this qualification must reflect current occupational and learning outcomes of this AQF qualification level.
                    </p>
                    <p>
                      There are both licensed and non-licensed units of competency relating to high risk work in the RII Resources and Infrastructure Industry Training Package. To be appointed under any statutory requirements in related roles, units of competency should be selected to meet the state/territory licensing requirements.
                    </p>
                    <p>
                      There are prerequisites to imported units listed in this qualification. Where a unit is imported as an elective care must be taken to ensure that all prerequisites specified are complied with.
                    </p>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="Unitsofcompetency">
                  <div class="core-competency">
                    <ul>
                      <li>RIIMPO336E - Conduct belly dump truck operations</li>
                      <li>RIIMPO319E - Conduct backhoe/loader operations</li>
                      <li>AHCSAW301 - Construct conservation earthworks</li>
                      <li>RIICCM202D - Identify, locate and protect underground services</li>
                      <li>RIISAM213E - Position and set up mobile lighting	</li>
                      <li>RIIMPO324F - Conduct civil construction grader operations	</li>
                      <li>TLILIC0008 - Licence to operate a non-slewing mobile crane (greater than 3 tonnes capacity)	</li>
                      <li>RIIWHS202D - Enter and work in confined spaces</li>
                      <li>RIIMPO325E - Conduct civil construction scraper operations</li>
                      <li>RIICCM204D - Place and fix reinforcement materials</li>
                      
                      <li>RIISAM203D - Use hand and power tools   </li>
                      <li>RIISAM205D - Cut, weld and bend materials   </li>
                      <li>RIIHAN208D - Perform dogging   </li>
                      <li>CPCCLSF2001A - Licence to erect, alter and dismantle scaffolding basic level</li>
                      <li>RIIQUA201D - Maintain and monitor site quality standards   </li>
                      <li>BSBDIV301 - Work effectively with diversity</li>
                      <li>RIIMPO321F - Conduct civil construction wheeled front end loader operations</li>
                      <li>RIIHAN211D - Manage a franchise operation   		</li>
                      <li>RIIVEH304E - Conduct tip truck operations </li>
                      <li>RIIRIS202D - Respond to site based spills</li>

                      <li>RIICCM205E - Carry out manual excavation</li>
                      <li>RIIHAN301E - Operate elevating work platform</li>
                      <li>RIICRC308D - Conduct paver operations</li>
                      <li>RIIMPO316E - Conduct self-propelled compactor operations</li>
                      <li>RIICCM211D - Erect and dismantle temporary fencing and gates</li>
                      <li>AHCSAW201 - Conduct erosion and sediment control activities</li>
                      <li>TLILIC0005 - Licence to operate a boom-type elevating work platform (boom length 11 metres or more)</li>
                      <li>RIIMPO318F - Conduct civil construction skid steer loader operations   	</li>
                      <li>RIIMPO315E - Conduct tractor operations  </li>
                      <li>CPCCCM2007B - Use explosive power tools</li>
                      
                      <li>RIIMPO317F - Conduct roller operations   	</li>
                      <li>RIIMPO327E - Conduct pipe layer operations   </li>
                      <li>CPCCLDG3001A - Licence to perform dogging   </li>
                      <li>RIICCM207D - Spread and compact materials manually   </li>
                      <li>RIIMPO323E - Conduct civil construction dozer operations   	</li>
                      <li>RIIMPO326E - Conduct water vehicle operations   	</li>
                      <li>RIIWHS201D - Work safely and follow WHS policies and procedures   	</li>
                      <li>RIICCM206D - Support plant operations   	</li>
                      <li>RIISAM201D - Handle resources and infrastructure materials and safely dispose of nontoxic materials</li>
                      <li>RIICRC208D - Lay pipes   </li>

                      <li>RIICCM210D - Install trench support   	</li>
                      <li>RIIHAN311F - Conduct operations with integrated tool carrier   </li>
                      <li>RIIRIS201D - Conduct local risk control </li>
                      <li>RIIMPO322E - Conduct civil construction tracked front end loader operations   </li>
                      <li>RIICRC201D - Repair potholes   </li>
                      <li>RIIWMG203D - Drain and dewater civil construction site   </li>
                      <li>RIIMPO338E - Conduct rigid haul truck operations   </li>
                      <li>RIIMPO328E - Conduct continuous bucket trencher operations   </li>
                      <li>RIISAM204D - Operate small plant and equipment </li>
                      <li>RIICOM201D - Communicate in the workplace   </li>

                      <li>HLTAID003 - Provide first aid   	</li>
                      <li>RIIHAN308F - Load and unload plant   	</li>
                      <li>RIIMPO320F - Conduct civil construction excavator operations   	</li>
                      <li>RIICCM203D - Read and interpret plans and job specifications   	</li>
                      <li>RIICRC309D - Conduct stabiliser operations   	</li>
                      <li>RIIWHS204D - Work safely at heights   	</li>
                      <li>RIIBEF201D - Plan and organise work   	</li>
                      <li>RIICCM209D - Carry out concrete work   </li>
                      <li>RIICCM208D - Carry out basic levellin </li>
                      <li>RIIWHS205D - Control traffic with stop-slow bat </li>

                      <li>RIIHAN309F - Conduct telescopic materials handler operations </li>
                      <li>RIICCM201D - Carry out measurements and calculations  </li>
                      <li>RIIMPO337E - Conduct articulated haul truck operations</li>
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
                          <th>RIIBEF201D</th>
                          <td>Plan and organise work</td>
                        </tr>
                        <tr>
                          <th>RIICCM201D</th>
                          <td>Carry out measurements and calculations</td>
                        </tr>
                        <tr>
                          <th>RIICCM202D</th>
                          <td>	
                            Identify, locate and protect underground services
                          </td>
                        </tr>
                        <tr>
                          <th>RIICCM203D</th>
                          <td>Read and interpret plans and specifications</td>
                        </tr>
                        <tr>
                          <th>RIICCM205E</th>
                          <td>Carry out manual excavation</td>
                        </tr>
                        <tr>
                          <th>RIICCM206D</th>
                          <td>Support plant operations</td>
                        </tr>
                        <tr>
                          <th>RIICCM207D</th>
                          <td>Spread and compact materials manually</td>
                        </tr>
                        <tr>
                          <th>RIICCM208D</th>
                          <td>Carry out basic levelling</td>
                        </tr>
                        <tr>
                          <th>RIICOM201D</th>
                          <td>Communicate in the workplace</td>
                        </tr>
                        <tr>
                          <th>RIISAM201D</th>
                          <td>Handle resources and infrastructure materials and safely dispose of non toxic materials</td>
                        </tr>
                        <tr>
                          <th>RIISAM203D</th>
                          <td>Use hand and power tools</td>
                        </tr>
                        <tr>
                          <th>RIISAM204D</th>
                          <td>Operate small plant and equipment</td>
                        </tr>
                        <tr>
                          <th>RIIWHS201D</th>
                          <td>Work safely and follow WHS policies and procedures</td>
                        </tr>
                        <tr>
                          <th>RIIWMG203D</th>
                          <td>Use hand and power tools</td>
                        </tr>
                        <tr>
                          <th>RIISAM203D</th>
                          <td>Drain and dewater civil construction site</td>
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
                          <th>RIIMPO318F</th>
                          <td>Conduct civil construction skid steer loader operations</td>
                        </tr>
                        <tr>
                          <th>RIIMPO319E</th>
                          <td>Conduct backhoe/loader operations</td>
                        </tr>
                        <tr>
                          <th>RIIMPO320F</th>
                          <td>Conduct civil construction excavator operations</td>
                        </tr>
                        <tr>
                          <th>RIIMPO321F</th>
                          <td>
                            Conduct civil construction wheeled front end loader operations
                          </td>
                        </tr>
                        <tr>
                          <th>RIIMPO322E</th>
                          <td>Conduct civil construction tracked front end loader operations</td>
                        </tr>
                        <tr>
                          <th>RIIMPO323E</th>
                          <td>Conduct civil construction dozer operations                          </td>
                        </tr>
                        <tr>
                          <th>RIIMPO324F</th>
                          <td>Conduct civil construction grader operations                          </td>
                        </tr>
                        <tr>
                          <th>RIIMPO325E </th>
                          <td>Conduct civil construction scraper operations</td>
                        </tr>
                        <tr>
                          <th>RIIMPO327E</th>
                          <td>Conduct pipe layer operations</td>
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
                          <th>RIICRC308D</th>
                          <td>
                            Conduct paver operations
                          </td>
                        </tr>
                        <tr>
                          <th>RIICRC309D</th>
                          <td>	
                            Conduct stabiliser operations
                          </td>
                        </tr>
                        <tr>
                          <th>RIIHAN309F</th>
                          <td>
                            Conduct telescopic materials handler operations
                          </td>
                        </tr>
                        <tr>
                          <th>RIIHAN311F</th>
                          <td>
                            Conduct operations with integrated tool carrier
                          </td>
                        </tr>
                        <tr>
                          <th>RIIMPO315E</th>
                          <td>Develop and manage performance-management processes</td>
                        </tr>
                        <tr>
                          <th>BSBHRM513</th>
                          <td>Conduct tractor operations</td>
                        </tr>
                        <tr>
                          <th>RIIMPO315E</th>
                          <td>Manage an information or knowledge management system</td>
                        </tr>
                        <tr>
                          <th>RIIMPO316E</th>
                          <td>Conduct self propelled compactor operations</td>
                        </tr>
                        <tr>
                          <th>RIIMPO317F</th>
                          <td>Conduct roller operations</td>
                        </tr>
                        <tr>
                          <th>RIIMPO326E</th>
                          <td>Conduct water vehicle operations</td>
                        </tr>
                        <tr>
                          <th>RIIMPO328E</th>
                          <td>Conduct continuous bucket trencher operations</td>
                        </tr>
                        <tr>
                          <th>RIIMPO336E</th>
                          <td>Conduct belly dump truck operations</td>
                        </tr>
                        <tr>
                          <th>RIIMPO337E</th>
                          <td>Conduct articulated haul truck operations</td>
                        </tr>
                        <tr>
                          <th>RIIMPO338E</th>
                          <td>Conduct rigid haul truck operations</td>
                        </tr>
                        <tr>
                          <th>RIIVEH304E</th>
                          <td>Conduct tip truck operations</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="core-Units">
                    <div class="unit-title">
                      <h3>Group C</h3>
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
                          <th>AHCSAW201</th>
                          <td>
                            Conduct erosion and sediment control activities
                          </td>
                        </tr>
                        <tr>
                          <th>AHCSAW301</th>
                          <td>	
                            Construct conservation earthworks
                          </td>
                        </tr>
                        <tr>
                          <th>BSBDIV301</th>
                          <td>
                            Work effectively with diversity
                          </td>
                        </tr>
                        <tr>
                          <th>CPCCCM2007B</th>
                          <td>
                            Use explosive power tools
                            <ul>
                              <li><strong>Prerequisite unit:</strong> CPCCOHS2001A Apply OHS requirements, policies and procedures in the construction industry</li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <th>CPCCLDG3001A</th>
                          <td>Licence to perform dogging</td>
                        </tr>
                        <tr>
                          <th>CPCCLSF2001A</th>
                          <td>Licence to erect, alter and dismantle scaffolding basic level</td>
                        </tr>
                        <tr>
                          <th>HLTAID003</th>
                          <td>Provide first aid</td>
                        </tr>
                        <tr>
                          <th>RIICCM204D</th>
                          <td>
                            Place and fix reinforcement materials
                          </td>
                        </tr>
                        <tr>
                          <th>RIICCM209D</th>
                          <td>
                            Carry out concrete work
                          </td>
                        </tr>
                        <tr>
                          <th>RIICCM210D</th>
                          <td>	
                            Install trench support
                          </td>
                        </tr>
                        <tr>
                          <th>RIICCM211D</th>
                          <td>	
                            Erect and dismantle temporary fencing and gates
                          </td>
                        </tr>
                        <tr>
                          <th>RIICRC201D</th>
                          <td>
                            Repair potholes
                          </td>
                        </tr>
                        <tr>
                          <th>RIICRC208D</th>
                          <td>Lay pipes</td>
                        </tr>
                        <tr>
                          <th>RIIHAN208D</th>
                          <td>Perform dogging</td>
                        </tr>
                        <tr>
                          <th>RIIHAN211D</th>
                          <td>Conduct basic scaffolding operations</td>
                        </tr>
                        <tr>
                          <th>RIIHAN301E</th>
                          <td>Operate elevating work platform</td>
                        </tr>

                        <tr>
                          <th>RIIHAN308F</th>
                          <td>Load and unload plant</td>
                        </tr>
                        <tr>
                          <th>RIIQUA201D</th>
                          <td>Maintain and monitor site quality standards</td>
                        </tr>
                        <tr>
                          <th>RIIRIS201D</th>
                          <td>Conduct local risk control</td>
                        </tr>
                        <tr>
                          <th>RIIRIS202D</th>
                          <td>Respond to site based spills</td>
                        </tr>
                        <tr>
                          <th>RIISAM205D</th>
                          <td>Cut, weld and bend materials</td>
                        </tr>
                        <tr>
                          <th>RIISAM213E</th>
                          <td>Position and set up mobile lighting</td>
                        </tr>
                        <tr>
                          <th>RIIWHS202D</th>
                          <td>Enter and work in confined spaces</td>
                        </tr>
                        <tr>
                          <th>RIIWHS204D</th>
                          <td>Work safely at heights</td>
                        </tr>
                        <tr>
                          <th>RIIWHS205D</th>
                          <td>Control traffic with stop-slow bat</td>
                        </tr>
                        <tr>
                          <th>TLILIC0005</th>
                          <td>Licence to operate a boom-type elevating work platform (boom length 11 metres or more)</td>
                        </tr>
                        <tr>
                          <th>TLILIC0008</th>
                          <td>Licence to operate a non-slewing mobile crane (greater than 3 tonnes capacity</td>
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