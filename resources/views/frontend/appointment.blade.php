@extends('frontend.layouts.default')
@section('content')
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3>Appointment/Booking</h3>
            </div>
        </div>
    </div>
</section>
<section class="appont_tab">
    <div class="container">
        <div class="top_heading">
            <h2>Your Appointments Status</h2>
        </div>
        <div class="container my-4">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item new-item-3" role="presentation">
                            <a class="nav-link new-link-3 active text-dark" id="pills-approved-tab" data-toggle="pill" href="#pills-approved" role="tab" aria-controls="pills-approved" aria-selected="true">Pending  Appointments</a>
                        </li>
                        <li class="nav-item new-item-3" role="presentation">
                            <a class="nav-link new-link-3 text-dark" id="pills-pending-tab" data-toggle="pill" href="#pills-pending" role="tab" aria-controls="pills-pending" aria-selected="false">Approved
                                Appointments</a>
                        </li>

                        <li class="nav-item new-item-3" role="presentation">
                            <a class="nav-link new-link-3 text-dark" id="pills-rejected-tab" data-toggle="pill" href="#pills-rejected" role="tab" aria-controls="pills-rejected" aria-selected="false">Rejected
                                Appointments</a>
                        </li>
                        <li class="nav-item new-item-3" role="presentation">
                            <a class="nav-link new-link-3 text-dark" id="pills-confirmed-tab" data-toggle="pill" href="#pills-confirmed" role="tab" aria-controls="pills-confirmed" aria-selected="false">Confirmed
                                Appointments</a>
                        </li>
                    </ul>

                    <!-- data navs section are start -->

                    <div class="tab-content" id="pills-tabContent">

                        <!-- --------------------approved-------------------- -->

                        <div class="tab-pane fade in show active" id="pills-approved" role="tabpanel" aria-labelledby="pills-approved-tab">
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            chirag
                                        </div>
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{asset('web_assets/assets//img/profile.png')}}">
                                                </div>
                                                <div class="col-md-8">
                                                    <blockquote class="blockquote mb-0">
                                                        <small class="font-weight-normal mb-2">Order Id: 12457898653212</small><br>
                                                        <small class="text-muted mb-2">Date <span class="float-right">25/8/2021</span></small><br>
                                                        <small class="mb-2">Amount: <span class="float-right">$210</span></small>
                                                        <footer class="blockquote-footer">Morning Slot<cite title="Source Title" class="float-right text-danger">Rejected</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 10 days ago</small>
                                            <div class="det_cl">
                                                <a href="#"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="{{route('appoint-view')}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            chirag
                                        </div>
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{asset('web_assets/assets//img/profile.png')}}">
                                                </div>
                                                <div class="col-md-8">
                                                    <blockquote class="blockquote mb-0">
                                                        <small class="font-weight-normal mb-2">Order Id: 12457898653212</small><br>
                                                        <small class="text-muted mb-2">Date <span class="float-right">25/8/2021</span></small><br>
                                                        <small class="mb-2">Amount: <span class="float-right">$210</span></small>
                                                        <footer class="blockquote-footer">Morning Slot<cite title="Source Title" class="float-right text-danger">Rejected</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 14 days ago</small>
                                            <div class="det_cl">
                                                <a href="#"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="{{route('appoint-view')}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            chirag
                                        </div>
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{asset('web_assets/assets//img/profile.png')}}">
                                                </div>
                                                <div class="col-md-8">
                                                    <blockquote class="blockquote mb-0">
                                                        <small class="font-weight-normal mb-2">Order Id: 12457898653212</small><br>
                                                        <small class="text-muted mb-2">Date <span class="float-right">25/8/2021</span></small><br>
                                                        <small class="mb-2">Amount: <span class="float-right">$210</span></small>
                                                        <footer class="blockquote-footer">Morning Slot<cite title="Source Title" class="float-right text-danger">Rejected</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 10 days ago</small>
                                            <div class="det_cl">
                                                <a href="#"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="{{route('appoint-view')}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            chirag
                                        </div>
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{asset('web_assets/assets//img/profile.png')}}">
                                                </div>
                                                <div class="col-md-8">
                                                    <blockquote class="blockquote mb-0">
                                                        <small class="font-weight-normal mb-2">Order Id: 12457898653212</small><br>
                                                        <small class="text-muted mb-2">Date <span class="float-right">25/8/2021</span></small><br>
                                                        <small class="mb-2">Amount: <span class="float-right">$210</span></small>
                                                        <footer class="blockquote-footer">Morning Slot<cite title="Source Title" class="float-right text-danger">Rejected</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 14 days ago</small>
                                            <div class="det_cl">
                                                <a href="#"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="{{route('appoint-view')}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ------------------pending--------------------- -->

                        <div class="tab-pane fade in" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab">
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            chirag
                                        </div>
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{asset('web_assets/assets//img/profile.png')}}">
                                                </div>
                                                <div class="col-md-8">
                                                    <blockquote class="blockquote mb-0">
                                                        <small class="font-weight-normal mb-2">Order Id: 12457898653212</small><br>
                                                        <small class="text-muted mb-2">Date <span class="float-right">25/8/2021</span></small><br>
                                                        <small class="mb-2">Amount: <span class="float-right">$210</span></small>
                                                        <footer class="blockquote-footer">Morning Slot<cite title="Source Title" class="float-right text-danger">Rejected</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 10 days ago</small>
                                            <div class="det_cl">
                                                <a href="#"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="{{route('appoint-view')}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            chirag
                                        </div>
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{asset('web_assets/assets//img/profile.png')}}">
                                                </div>
                                                <div class="col-md-8">
                                                    <blockquote class="blockquote mb-0">
                                                        <small class="font-weight-normal mb-2">Order Id: 12457898653212</small><br>
                                                        <small class="text-muted mb-2">Date <span class="float-right">25/8/2021</span></small><br>
                                                        <small class="mb-2">Amount: <span class="float-right">$210</span></small>
                                                        <footer class="blockquote-footer">Morning Slot<cite title="Source Title" class="float-right text-danger">Rejected</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 14 days ago</small>
                                            <div class="det_cl">
                                                <a href="#"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="{{route('appoint-view')}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            chirag
                                        </div>
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{asset('web_assets/assets//img/profile.png')}}">
                                                </div>
                                                <div class="col-md-8">
                                                    <blockquote class="blockquote mb-0">
                                                        <small class="font-weight-normal mb-2">Order Id: 12457898653212</small><br>
                                                        <small class="text-muted mb-2">Date <span class="float-right">25/8/2021</span></small><br>
                                                        <small class="mb-2">Amount: <span class="float-right">$210</span></small>
                                                        <footer class="blockquote-footer">Morning Slot<cite title="Source Title" class="float-right text-danger">Rejected</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 10 days ago</small>
                                            <div class="det_cl">
                                                <a href="#"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="{{route('appoint-view')}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            chirag
                                        </div>
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{asset('web_assets/assets//img/profile.png')}}">
                                                </div>
                                                <div class="col-md-8">
                                                    <blockquote class="blockquote mb-0">
                                                        <small class="font-weight-normal mb-2">Order Id: 12457898653212</small><br>
                                                        <small class="text-muted mb-2">Date <span class="float-right">25/8/2021</span></small><br>
                                                        <small class="mb-2">Amount: <span class="float-right">$210</span></small>
                                                        <footer class="blockquote-footer">Morning Slot<cite title="Source Title" class="float-right text-danger">Rejected</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 14 days ago</small>
                                            <div class="det_cl">
                                                <a href="#"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="{{route('appoint-view')}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>

                        <!-- -----------------Rejected--------------- -->

                        <div class="tab-pane fade in" id="pills-rejected" role="tabpanel" aria-labelledby="pills-rejected-tab">
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            chirag
                                        </div>
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{asset('web_assets/assets//img/profile.png')}}">
                                                </div>
                                                <div class="col-md-8">
                                                    <blockquote class="blockquote mb-0">
                                                        <small class="font-weight-normal mb-2">Order Id: 12457898653212</small><br>
                                                        <small class="text-muted mb-2">Date <span class="float-right">25/8/2021</span></small><br>
                                                        <small class="mb-2">Amount: <span class="float-right">$210</span></small>
                                                        <footer class="blockquote-footer">Morning Slot<cite title="Source Title" class="float-right text-danger">Rejected</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 10 days ago</small>
                                            <div class="det_cl">
                                                <a href="#"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="{{route('appoint-view')}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            chirag
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{asset('web_assets/assets//img/profile.png')}}">
                                                </div>
                                                <div class="col-md-8">
                                                    <blockquote class="blockquote mb-0">
                                                        <small class="font-weight-normal mb-2">Order Id: 12457898653212</small><br>
                                                        <small class="text-muted mb-2">Date <span class="float-right">25/8/2021</span></small><br>
                                                        <small class="mb-2">Amount: <span class="float-right">$210</span></small>
                                                        <footer class="blockquote-footer">Morning Slot<cite title="Source Title" class="float-right text-danger">Rejected</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 14 days ago</small>
                                            <div class="det_cl">
                                                <a href="#"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="{{route('appoint-view')}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            chirag
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{asset('web_assets/assets//img/profile.png')}}">
                                                </div>
                                                <div class="col-md-8">
                                                    <blockquote class="blockquote mb-0">
                                                        <small class="font-weight-normal mb-2">Order Id: 12457898653212</small><br>
                                                        <small class="text-muted mb-2">Date <span class="float-right">25/8/2021</span></small><br>
                                                        <small class="mb-2">Amount: <span class="float-right">$210</span></small>
                                                        <footer class="blockquote-footer">Morning Slot<cite title="Source Title" class="float-right text-danger">Rejected</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 10 days ago</small>
                                            <div class="det_cl">
                                                <a href="#"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="{{route('appoint-view')}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            chirag
                                        </div>
                                        <div class="card-body">
                                            <blockquote class="blockquote mb-0">
                                                <small class="font-weight-normal mb-2">Order Id: 12457898653212</small><br>
                                                <small class="text-muted mb-2">Date <span class="float-right">25/8/2021</span></small><br>
                                                <small class="mb-2">Amount: <span class="float-right">$210</span></small>
                                                <footer class="blockquote-footer">Morning Slot<cite title="Source Title" class="float-right text-danger">Rejected</cite></footer>
                                            </blockquote>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 14 days ago</small>
                                            <div class="det_cl">
                                                <a href="#"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="{{route('appoint-view')}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>

                        <div class="tab-pane fade in " id="pills-confirmed" role="tabpanel" aria-labelledby="pills-confirmed-tab">
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            chirag
                                        </div>
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{asset('web_assets/assets//img/profile.png')}}">
                                                </div>
                                                <div class="col-md-8">
                                                    <blockquote class="blockquote mb-0">
                                                        <small class="font-weight-normal mb-2">Order Id: 12457898653212</small><br>
                                                        <small class="text-muted mb-2">Date <span class="float-right">25/8/2021</span></small><br>
                                                        <small class="mb-2">Amount: <span class="float-right">$210</span></small>
                                                        <footer class="blockquote-footer">Morning Slot<cite title="Source Title" class="float-right text-danger">Rejected</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 10 days ago</small>
                                            <div class="det_cl">
                                                <a href="#"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="{{route('appoint-view')}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            chirag
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{asset('web_assets/assets//img/profile.png')}}">
                                                </div>
                                                <div class="col-md-8">
                                                    <blockquote class="blockquote mb-0">
                                                        <small class="font-weight-normal mb-2">Order Id: 12457898653212</small><br>
                                                        <small class="text-muted mb-2">Date <span class="float-right">25/8/2021</span></small><br>
                                                        <small class="mb-2">Amount: <span class="float-right">$210</span></small>
                                                        <footer class="blockquote-footer">Morning Slot<cite title="Source Title" class="float-right text-danger">Rejected</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 14 days ago</small>
                                            <div class="det_cl">
                                                <a href="#"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="{{route('appoint-view')}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            chirag
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{asset('web_assets/assets//img/profile.png')}}">
                                                </div>
                                                <div class="col-md-8">
                                                    <blockquote class="blockquote mb-0">
                                                        <small class="font-weight-normal mb-2">Order Id: 12457898653212</small><br>
                                                        <small class="text-muted mb-2">Date <span class="float-right">25/8/2021</span></small><br>
                                                        <small class="mb-2">Amount: <span class="float-right">$210</span></small>
                                                        <footer class="blockquote-footer">Morning Slot<cite title="Source Title" class="float-right text-danger">Rejected</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 10 days ago</small>
                                            <div class="det_cl">
                                                <a href="#"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="{{route('appoint-view')}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            chirag
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{asset('web_assets/assets//img/profile.png')}}">
                                                </div>
                                                <div class="col-md-8">
                                                    <blockquote class="blockquote mb-0">
                                                        <small class="font-weight-normal mb-2">Order Id: 12457898653212</small><br>
                                                        <small class="text-muted mb-2">Date <span class="float-right">25/8/2021</span></small><br>
                                                        <small class="mb-2">Amount: <span class="float-right">$210</span></small>
                                                        <footer class="blockquote-footer">Morning Slot<cite title="Source Title" class="float-right text-danger">Rejected</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 14 days ago</small>
                                            <div class="det_cl">
                                                <a href="#"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="{{route('appoint-view')}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>

                    <!-- data navs section are end -->
                </div>
            </div>
        </div>
    </div>
</section>
@stop