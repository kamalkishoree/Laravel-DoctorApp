
@extends('frontend.layouts.default')
@section('content') 
<div class="home-slides owl-carousel owl-theme">
    <div class="main-banner item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <span>Best Healing Service</span>
                        <h1>TakecareMed is the No. 1 Hospital</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna Quis ipsumpsum dolor sit amet consectetur.</p>
                        <div class="btn-box">
                            <a href="{{route('appointment-Book')}}" class="btn btn-primary">Make appointment <i class="fas fa-bell"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="circle-shape1"><img src="{{asset('web_assets/assets/img/circle-shape1.png')}}" alt="image"></div>
        <div class="circle-shape2"><img src="{{asset('web_assets/assets/img/circle-shape2.png')}}" alt="image"></div>
        <div class="shape1"><img src="{{asset('web_assets/assets/img/shape/1.png')}}" alt="image"></div>
    </div>
    <div class="main-banner item-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <span>Women Care</span>
                        <h1>Exceptional Care for Women</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna Quis ipsumpsum dolor sit amet consectetur.</p>
                        <div class="btn-box">
                            <a href="{{route('appointment-Book')}}" class="btn btn-primary">Make appointment <i class="fas fa-bell"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="circle-shape1"><img src="{{asset('web_assets/assets/img/circle-shape1.png')}}" alt="image"></div>
        <div class="circle-shape2"><img src="{{asset('web_assets/assets/img/circle-shape2.png')}}" alt="image"></div>
        <div class="shape1"><img src="{{asset('web_assets/assets/img/shape/1.png')}}" alt="image"></div>
    </div>
    <div class="main-banner item-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <span>Health Service</span>
                        <h1>Your Health is Our Top Priority</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna Quis ipsumpsum dolor sit amet consectetur.</p>
                        <div class="btn-box">
                            <a href="{{route('appointment-Book')}}" class="btn btn-primary">Make appointment <i class="fas fa-bell"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="circle-shape1"><img src="{{asset('web_assets/assets/img/circle-shape1.png')}}" alt="image"></div>
        <div class="circle-shape2"><img src="{{asset('web_assets/assets/img/circle-shape2.png')}}" alt="image"></div>
        <div class="shape1"><img src="{{asset('web_assets/assets/img/shape/1.png')}}" alt="image"></div>
    </div>
</div>


<section class="main-services-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>{{__('home.main_features')}}</span>
            <h2>{{__('home.main_services')}}</h2>
            <p>{{__('home.lorim_ipsum')}}</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="main-services-box">
                    <div class="icon">
                        <i class="fa fa-user-md"></i>
                    </div>
                    <h3><a href="#">{{__('home.advaced_care')}}</a></h3>
                    <p>{{__('home.lorim_ipsum')}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="main-services-box">
                    <div class="icon">
                        <i class="fas fa-teeth"></i>
                    </div>
                    <h3><a href="#">{{__('home.internal_medicine')}}</a></h3>
                    <p>{{__('home.lorim_ipsum')}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="main-services-box">
                    <div class="icon">
                        <i class="fa fa-heartbeat"></i>
                    </div>
                    <h3><a href="#">{{__('home.otolaryngology')}}</a></h3>
                    <p>{{__('home.lorim_ipsum')}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="main-services-box">
                    <div class="icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3><a href="#">{{__('home.otolaryngology')}}</a></h3>
                    <p>{{__('home.lorim_ipsum')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="shape2"><img src="{{asset('web_assets/assets/img/shape/2.png')}}" alt="image"></div>
</section>


<section class="specialist">
    <div class="container">
        <h2>{{__('home.find_doctor_spec')}}</h2>
        <div class="row">
            @foreach($data['specialist'] as $specialist)
                <div class="col-md-3">
                    <a href="{{ route('find-doctor',Crypt::encryptString($specialist['id'])) }}">
                        <div class="text_hovering_cards">
                            <!--CARD BEGINING-->
                            <div class="text_hovering_card" style='background-image:url({{asset("web_assets/assets/img/flat.jpg")}});background-size: cover;'>
                                <div class="text_hovering_card_content">
                                    <section>
                                        <span class="section_left">
                                            {{ $specialist['specialist']}}
                                        </span>
                                        <span class="section_right">
                                            <a href="{{route('Doctor')}}" class="card_but"><i class="fa fa-chevron-right"></i></a>
                                        </span>
                                    </section>
                                </div>
                            </div>
                            
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="about-area">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="about-image">
                    <img src="{{asset('web_assets/assets/img/about-img1.jpg')}}" alt="image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
                <div class="about-content">
                    <span>
                        {{__('home.about_Us')}}

                    </span>

                    <p>{{__('home.lorim_ipsum')}}
                     </p>
                    <ul>
                        <li><i class="fa fa-check"></i>{{__('home.Scientific_Skills_For_getting_a_better_result')}}
                    </li>
                        <li><i class="fa fa-check"></i> {{__('home.Communication_Skills_to_getting_in_touch')}}</li>
                        <li><i class="fa fa-check"></i>{{__('home.A_Career_Overview_opportunity_Available')}}</li>
                        <li><i class="fa fa-check"></i> A good Work Environment For work</li>
                    </ul>
                    <a href="#" class="btn btn-primary">{{__('home.learn_More')}}<i class="fa fa-fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-mission-area ptb-100">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="our-mission-content">
                    <span class="sub-title">
                    {{__('home.our_mission_vision')}}
                    </span>
                    <h2>{{__('home.better_information,_better_health')}}</h2>
                    <p>{{__('home.lorim_ipsum')}}</p>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-user-md"></i>
                            </div>
                            <span>{{__('home.professional_staff')}}</span>
                            {{__('home.lorim_ipsum')}}
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-baby"></i>
                            </div>
                            <span>{{__('home.newborn_care')}}</span>
                            {{__('home.lorim_ipsum')}}
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-vials"></i>
                            </div>
                            <span>{{__('home.sufficient_lab_tests')}}</span>
                            {{__('home.lorim_ipsum')}}

                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-teeth"></i>
                            </div>
                            <span> {{__('home.tooth_extraction')}}</span>
                            {{__('home.lorim_ipsum')}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
                <div class="our-mission-image">
                    <img src="{{asset('web_assets/assets/img/mission-img1.jpg')}}" alt="image">
                </div>
            </div>
        </div>
    </div>
    <div class="shape3"><img src="{{asset('web_assets/assets/img/shape/3.png')}}" class="wow fadeInLeft" alt="image"></div>
</section>


<section class="fun-facts-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                <div class="single-fun-facts">
                    <div class="icon">
                        <i class="fa fa-user-md"></i>
                    </div>
                    <h3>
                        <span class="odometer" data-count="540"></span>
                        <span class="optional-icon">+</span>
                    </h3>
                    <p>Expert Doctors</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                <div class="single-fun-facts">
                    <div class="icon">
                        <i class="fa fa-lightbulb"></i>
                    </div>
                    <h3>
                        <span class="odometer" data-count="899"></span>
                        <span class="optional-icon">K</span>
                    </h3>
                    <p>Problem Solve</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                <div class="single-fun-facts">
                    <div class="icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>
                        <span class="odometer" data-count="100"></span>
                        <span class="optional-icon">+</span>
                    </h3>
                    <p>Award Winning</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                <div class="single-fun-facts">
                    <div class="icon">
                        <i class="fa fa-trophy"></i>
                    </div>
                    <h3>
                        <span class="odometer" data-count="56"></span>
                        <span class="optional-icon">K</span>
                    </h3>
                    <p>Experiences</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="services-area ptb-100 bg-f4f9fd">
    <div class="container">
        <div class="section-title">
            <span>Our Services</span>
            <h2>Our Healthcare Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box bg-1">
                    <div class="icon">
                        <i class="flaticon-cancer"></i>
                    </div>
                    <h3><a href="#">Cancer Services</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.</p>
                    <a href="#" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box bg-2">
                    <div class="icon">
                        <i class="flaticon-liver"></i>
                    </div>
                    <h3><a href="#">Liver Transplant</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.</p>
                    <a href="#" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box bg-3">
                    <div class="icon">
                        <i class="flaticon-kidney"></i>
                    </div>
                    <h3><a href="#">Kidney Cancer</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.</p>
                    <a href="#" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box bg-4">
                    <div class="icon">
                        <i class="flaticon-ekg"></i>
                    </div>
                    <h3><a href="#">Cardiac Arrhythmia</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.</p>
                    <a href="#" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box bg-5">
                    <div class="icon">
                        <i class="flaticon-tooth"></i>
                    </div>
                    <h3><a href="#">Dental Services</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.</p>
                    <a href="#" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box bg-6">
                    <div class="icon">
                        <i class="flaticon-radiation"></i>
                    </div>
                    <h3><a href="#">Radiation Oncology</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.</p>
                    <a href="#" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="more-services-btn">
                    <a href="#" class="btn btn-primary">More Services <i class="fa fa-fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@stop