@extends('backend.layouts.default')
@section('content') 
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
					<!-- start widget -->
					<div class="state-overview">
						<div class="row">
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-primary"><i class="material-icons">group</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">Total Appointments</span>
					              <span class="info-box-number">{{$data['appointment_count']}}</span>
					              <div class="progress">
					                <div class="progress-bar bg-primary" style="width: 45%"></div>
					              </div>
					              <span class="progress-description">
					                    45% Increase in 28 Days
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-warning"><i class="material-icons">person</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">Total Patients</span>
					              <span class="info-box-number">{{$data['patient_count']}}</span>
					              <div class="progress">
					                <div class="progress-bar bg-warning" style="width: 40%"></div>
					              </div>
					              <span class="progress-description">
					                    40% Increase in 28 Days
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-success"><i class="material-icons">content_cut</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">Total Doctors</span>
					              <span class="info-box-number">{{$data['doctor_count']}}</span>
					              <div class="progress">
					                <div class="progress-bar bg-success" style="width: 85%"></div>
					              </div>
					              <span class="progress-description">
					                    85% Increase in 28 Days
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-info"><i class="material-icons">monetization_on</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">Earning</span>
					              <span class="info-box-number">13,921</span><span>$</span>
					              <div class="progress">
					                <div class="progress-bar bg-info" style="width: 50%"></div>
					              </div>
					              <span class="progress-description">
					                    50% Increase in 28 Days
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					      </div>
						</div>
					<!-- end widget -->
					<div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Earning Survey</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="row text-center">
			                            <div class="col-sm-3 col-6">
			                                <h4 class="margin-0">$ 209 </h4>
			                                <p class="text-muted"> Today's Income</p>
			                            </div>
			                            <div class="col-sm-3 col-6">
			                                <h4 class="margin-0">$ 837 </h4>
			                                <p class="text-muted">This Week's Income</p>
			                            </div>
			                            <div class="col-sm-3 col-6">
			                                <h4 class="margin-0">$ 3410 </h4>
			                                <p class="text-muted">This Month's Income</p>
			                            </div>
			                            <div class="col-sm-3 col-6">
			                                <h4 class="margin-0">$ 78,000 </h4>
			                                <p class="text-muted">This Year's Income</p>
			                            </div>
			                        </div>
                       				<div class="row">
                                       	<div id="line_chart" class="full-width"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- start new patient list -->
                     <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>New Patients List</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                  <div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>
														<th>No</th>
														<th>Name</th>
														<th>Email</th>
														<th>Diseases</th>
														<th>Phone Number</th>
													</tr>
												</thead>
												<tbody>
												@if($data['newPatient']->count() > 0)
												@php
													$i = 1;
												@endphp
                                                @foreach($data['newPatient'] as $list)
													<tr>
														<td>{{$i}}</td>
														<td>{{$list['name']}}</td>
														<td>{{$list['email']}}</td>
														<td>
															<span class="label label-sm label-success">Influenza</span>
														</td>
														<td>{{$list['phone']}}</td>
													</tr>
													@php
													$i++;
													@endphp
												@endforeach
													@else
													<tr>
														<td colspan="9">No List found</td>
													</tr>
												@endif
													<!-- <tr>
														<td>2</td>
														<td>Mark Hay</td>
														<td>Mark@gmail.com</td>
														<td>
															<span class="label label-sm label-warning"> Cholera </span>
														</td>
														<td>105</td>
													</tr>
													<tr>
														<td>4</td>
														<td>David Perry</td>
														<td>david@gmail.com </td>
														<td>
															<span class="label label-sm label-danger">Jaundice</span>
														</td>
														<td>105</td>
													</tr>
													<tr>
														<td>5</td>
														<td>Anthony Davie</td>
														<td>davie@gmail.com</td>
														<td>
															<span class="label label-sm label-success ">Leptospirosis</span>
														</td>
														<td>102</td>
													</tr>
													<tr>
														<td>7</td>
														<td>Mark Hay</td>
														<td>Hay@gmail.com</td>
														<td>
															<span class="label label-sm label-success ">Typhoid</span>
														</td>
														<td>107</td>
													</tr>
													<tr>
														<td>8</td>
														<td>Sue Woodger</td>
														<td>sue@gmail.com</td>
														<td>
															<span class="label label-sm label-danger">Malaria</span>
														</td>
														<td>108</td>
													</tr> -->
												</tbody>
											</table>
										</div>
									</div>	
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                             <div class="card card-box">
                                 <div class="card-head">
                                     <header>Doctors List</header>
                                 </div>
                                 <div class="card-body ">
                                 <div class="row">
                                        <ul id="homeDoctorList" class="docListWindow small-slimscroll-style">
										@if($data['doctorList']->count() > 0)
                                        @foreach($data['doctorList'] as $list)
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="{{ asset('/doctorImage/'.$list['image']) }}" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">{{$list['name']}}</a> -{{$list['specialist']}}
                                                    </div>
                                                        <div>
                                                            <span class="clsAvailable">Available</span>
                                                        </div>
                                                </div>
                                            </li>
											 @endforeach
												@else
												<li>
                                                <div class="prog-avatar">
                                                    
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">No List Found</a>
                                                    </div>
                                                        <div>
                                                            <span class="clsAvailable"></span>
                                                        </div>
                                                </div>
                                            </li>
												@endif
                                            <!-- <li>
                                                <div class="prog-avatar">
                                                    <img src="{{asset('admin_assets/img/doc/doc2.jpg')}}" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Sarah Smith</a> -(MBBS,MD)
                                                    </div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="{{asset('admin_assets/img/doc/doc3.jpg')}}" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.John Deo</a> - (BDS,MDS)
                                                    </div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="{{asset('admin_assets/img/doc/doc4.jpg')}}" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Jay Soni</a> - (BHMS)
                                                    </div>
													<div>
														<span class="clsOnLeave">On Leave</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="{{asset('admin_assets/img/doc/doc5.jpg')}}" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Jacob Ryan</a> - (MBBS,MS)
                                                    </div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="{{asset('admin_assets/img/doc/doc6.jpg')}}" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Megha Trivedi</a> - (MBBS,MS)
                                                    </div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="{{asset('admin_assets/img/doc/doc1.jpg')}}" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Rajesh</a> -(MBBS,MD)
                                                    </div>
                                                        <div>
                                                            <span class="clsAvailable">Available</span>
                                                        </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="{{asset('admin_assets/img/doc/doc2.jpg')}}" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Sarah Smith</a> -(MBBS,MD)
                                                    </div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="{{asset('admin_assets/img/doc/doc3.jpg')}}" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.John Deo</a> - (BDS,MDS)
                                                    </div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
                                            </li> -->
                                        </ul>
                                        <div class="text-center full-width">
                                            <a href="#">View all</a>
                                        </div>
                                    </div>
                                 </div>
                             </div>
						</div>
                    </div>
                    <!-- end new patient list -->
                    <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                  <div class="card-box ">
                               <div class="card-head">
                                   <header>Patient Review</header>
                                   <div class="tools">
                                       <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                   </div>
                               </div>
                               <div class="card-body ">
                                      <ul id="reviewWindow" class="docListWindow small-slimscroll-style">
                                          <li>
                                          	<div class="row">
                                           	<div class="col-md-8 col-sm-8">
                                                <div class="prog-avatar">
                                                    <img src="{{asset('admin_assets/img/user/user1.jpg')}}" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Rajesh Mishra</a> 
                                                        <p class="rating-text">Awesome!!! Highly recommend</p>
                                                    </div>
                                                </div>
                                               </div>
                                               <div class="col-md-4 col-sm-4 rating-style">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_half</i>
                                                <i class="material-icons">star_border</i>
                                               </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="row">
                                           	<div class="col-md-8 col-sm-8">
                                                <div class="prog-avatar">
                                                    <img src="{{asset('admin_assets/img/user/user2.jpg')}}" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Sarah Smith</a> 
                                                        <p class="rating-text">Very bad service :(</p>
                                                    </div>
                                                </div>
                                               </div>
                                               <div class="col-md-4 col-sm-4 rating-style">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_half</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                               </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="row">
                                           	<div class="col-md-8 col-sm-8">
                                                <div class="prog-avatar">
                                                    <img src="{{asset('admin_assets/img/user/user3.jpg')}}" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">John Simensh</a> 
                                                        <p class="rating-text"> Staff was good nd i'll come again</p>
                                                    </div>
                                                </div>
                                               </div>
                                               <div class="col-md-4 col-sm-4 rating-style">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                               </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="row">
                                           	<div class="col-md-8 col-sm-8">
                                                <div class="prog-avatar">
                                                    <img src="{{asset('admin_assets/img/user/user4.jpg')}}" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Priya Sarma</a> 
                                                        <p class="rating-text">The price I received was good value.</p>
                                                    </div>
                                                </div>
                                               </div>
                                               <div class="col-md-4 col-sm-4 rating-style">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_half</i>
                                               </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="row">
                                           	<div class="col-md-8 col-sm-8">
                                                <div class="prog-avatar">
                                                    <img src="{{asset('admin_assets/img/user/user5.jpg')}}" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Serlin Ponting</a> 
                                                        <p class="rating-text">Not Satisfy !!!1</p>
                                                    </div>
                                                </div>
                                               </div>
                                               <div class="col-md-4 col-sm-4 rating-style">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                               </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="row">
                                           	<div class="col-md-8 col-sm-8">
                                                <div class="prog-avatar">
                                                    <img src="{{asset('admin_assets/img/user/user6.jpg')}}" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Priyank Jain</a> 
                                                        <p class="rating-text">Good....</p>
                                                    </div>
                                                </div>
                                               </div>
                                               <div class="col-md-4 col-sm-4 rating-style">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_half</i>
                                                <i class="material-icons">star_border</i>
                                               </div>
                                              </div>
                                          </li>
                                      </ul>
                                      <div class="full-width text-center p-t-10" >
										<a href="#" class="btn purple btn-outline btn-circle margin-0">View All</a>
									</div>
                               </div>
                           </div>
						</div>
					</div>
                </div>
            













            <!-- start chat sidebar -->
            <div class="chat-sidebar-container" data-close-on-body-click="false">
                <div class="chat-sidebar">
                    <ul class="nav nav-tabs">
                    	<li class="nav-item">
                            <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon"  data-toggle="tab">Theme</a>
                        </li>
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_2" class="nav-link tab-icon"  data-toggle="tab">Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                    	<!-- Start Color Theme Sidebar -->
                    	<div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel" id="quick_sidebar_tab_1">
							<div class="chat-sidebar-slimscroll-style">
								<div class="theme-light-dark">
									<h6>Sidebar Theme</h6>
									<button type="button" data-theme="white" class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light Sidebar</button>
									<button type="button" data-theme="dark" class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark Sidebar</button>
								</div>
								<div class="theme-light-dark">
									<h6>Sidebar Color</h6>
									<ul class="list-unstyled">
										<li class="complete">
											<div class="theme-color sidebar-theme">
												<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
											</div>
										</li>
									</ul>
									<h6>Header Brand color</h6>
									<ul class="list-unstyled">
										<li class="theme-option">
											<div class="theme-color logo-theme">
								             	<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
								           	</div>
								        </li>
									</ul>
									<h6>Header color</h6>
									<ul class="list-unstyled">
										<li class="theme-option">
											<div class="theme-color header-theme">
								             	<a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
								          	</div>
								        </li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Color Theme Sidebar -->
 						<!-- Start Setting Panel --> 
 						<div class="tab-pane chat-sidebar-settings animated slideInUp" id="quick_sidebar_tab_2">
                            <div class="chat-sidebar-settings-list chat-sidebar-slimscroll-style">
                                <div class="chat-header"><h5 class="list-heading">Layout Settings</h5></div>
	                            <div class="chatpane inner-content ">
									<div class="settings-list">
					                    <div class="setting-item">
					                        <div class="setting-text">Sidebar Position</div>
					                        <div class="setting-set">
					                           <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
	                                                <option value="left" selected="selected">Left</option>
	                                                <option value="right">Right</option>
                                            	</select>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Header</div>
					                        <div class="setting-set">
					                           <select class="page-header-option form-control input-inline input-sm input-small ">
	                                                <option value="fixed" selected="selected">Fixed</option>
	                                                <option value="default">Default</option>
                                            	</select>
					                        </div>
					                    </div>
					                    
					                    <div class="setting-item">
					                        <div class="setting-text">Footer</div>
					                        <div class="setting-set">
					                           <select class="page-footer-option form-control input-inline input-sm input-small ">
	                                                <option value="fixed">Fixed</option>
	                                                <option value="default" selected="selected">Default</option>
                                            	</select>
					                        </div>
					                    </div>
					                </div>
									<div class="chat-header"><h5 class="list-heading">Account Settings</h5></div>
									<div class="settings-list">
					                    <div class="setting-item">
					                        <div class="setting-text">Notifications</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-1">
									                  <input type = "checkbox" id = "switch-1" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Show Online</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-7">
									                  <input type = "checkbox" id = "switch-7" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Status</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-2">
									                  <input type = "checkbox" id = "switch-2" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">2 Steps Verification</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-3">
									                  <input type = "checkbox" id = "switch-3" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                </div>
                                    <div class="chat-header"><h5 class="list-heading">General Settings</h5></div>
                                    <div class="settings-list">
					                    <div class="setting-item">
					                        <div class="setting-text">Location</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-4">
									                  <input type = "checkbox" id = "switch-4" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Save Histry</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-5">
									                  <input type = "checkbox" id = "switch-5" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Auto Updates</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-6">
									                  <input type = "checkbox" id = "switch-6" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                </div>
	                        	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end chat sidebar -->
       
      
        
   @stop