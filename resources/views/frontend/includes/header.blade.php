<style>
    .img_box {
        object-fit: cover;
        width: 50%;
        margin: auto;
        border-radius: 50%;
        overflow: hidden;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .calling {
        width: 36%;
    }
    #my_ring{
        display: none;
    }
    .modal-span {
        color: #0dcaf0;
    }

    .butnn {
        border: none;
        background: transparent;
        font-size: 30px;
    }

    .my-ul-nav {
        background-color: #19ce67 !important;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: white !important;
        color: #19ce67 !important;
        font-weight: bold !important;
    }

    .main-nav-item-2 a {
        color: white;
    }

    .main-nav-item-2 a:hover {
        color: white;
    }

    .btn-success {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
    }

    .form-control {
        height: 35px;
        padding: 0 15px;
        font-size: 15px;
        line-height: initial;
        color: #121521;
        background-color: #fff;
        border: 1px solid #eee;
        border-radius: 0;
        -webkit-transition: .5s;
        transition: .5s;
    }

    .navbar-area .btn-primary {
    padding: 10px 22px !important;
}

    .fovia-nav ul {
        line-height: 37px;
    }

    .od-btn-warning {
        color: #fff;
        background-color: #1f62a5;
        border-color: #1f62a5;
    }
    /* .navbar-area div#navbarSupportedContent {
    display: flex!important;
    flex-basis: auto;
    flex-grow: 1;
    align-items: center;
} */
.navbar-area .navbar-nav{
margin: auto;
}
ul.navbar-nav li {
    position: relative;
    padding-top: 15px;
    padding-bottom: 15px;
    padding-left: 0;
    padding-right: 0;
}
ul.navbar-nav li a {
    font-size: 15.5px;
    font-weight: 500;
    color: #121521;
    text-transform: capitalize;
    -webkit-transition: .5s;
    transition: .5s;
    padding-left: 0;
    padding-right: 0;
    padding-top: 0;
    padding-bottom: 0;
    margin-left: 15px;
    margin-right: 15px;
}
.error {
    color: #d75e5e !important;
    text-transform: inherit !important;
}
</style>

<style>
iframe{
display : none !important;
}
body{
	top : 0px !important;
}
html{
    height : 0px !important;
}
#google_translate_element {
    visibility:collapse;
}

#google_translate_element select{
    visibility:visible;
}
#goog-gt-tt{
	visibility : hidden !important;
}
#google_translate_element select{
	color : white;
	background : #FFAB00 !important;
	height : 37px;
	border : none;
}
#google_translate_element{
	padding : 12px;
}
</style>


<div class="top-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <ul class="header-contact-info">
                    <li><i class="far fa-clock"></i> Mon - Fri 09:00 - 19:00</li>
                    <li><i class="fas fa-phone"></i> Call Us: <a href="#">+9999999999</a></li>
                    <li><i class="far fa-paper-plane"></i> <a href="#"><span class="__cf_email__">loremipsum@gmail.com</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3">
                <div class="header-right-content">
                    <ul class="top-header-social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="btn-group">
                    <div id="google_translate_element"  class="btn btn-info btn-sm"></div>
                    <!-- <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-language"></i> <a href="#"><span class="__cf_email__">Language</span></a>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('change-lang','en')}}">English</a></li>
                        <li><a class="dropdown-item" href="{{route('change-lang','thai')}}">Thai</a></li>
                    </ul> -->
                </div>
                <!-- <div id="google_translate_element"></div> -->
            </div>
        </div>
    </div>
</div>

<div class="navbar-area">
    
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="logo">
                    <a href="{{URL::to('/')}}">
                        <img src="{{asset('web_assets/assets/img/telemedlogo.png')}}" class="logo_width">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{URL::to('/')}}" class="nav-link active">Home</a></li>
                        <li class="nav-item"><a href="{{route('lab')}}" class="nav-link">Lab</a></li>
                        <li class="nav-item"><a href="{{route('medicine')}}" class="nav-link">Medicine</a></li>
                        <li class="nav-item"><a href="{{route('contact-us')}}" class="nav-link">Contact</a></li>
                       
                        @if(Auth::user() != '' && Auth::user()->user_type == 'doctor')
                            <li class="nav-item"><a href="#" class="nav-link"><img src="{{asset('doctorImage/'.auth()->user()->image)}}" style="border-radius: 50%;max-width: 40px;"></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{route('doctor-profile')}}" class="nav-link">Profile</a></li>
                                    <li class="nav-item"><a href="{{route('doctor-appointment')}}" class="nav-link">Appointment</a></li>
                                    <li class="nav-item"><a href="{{route('doctor-logout')}}" class="nav-link">LOGOUT</a></li>
                                </ul>
                            </li>
                        @elseif(Auth::user() != ''  && Auth::user()->user_type == 'patient')
                            <li class="nav-item"><a href="#" class="nav-link"><img src="{{asset('patientImage/'.auth()->user()->image)}}" style="border-radius: 50%;max-width: 40px;"></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{route('patient-profile')}}" class="nav-link">Profile</a></li>
                                    <li class="nav-item"><a href="{{route('patient-appointment')}}" class="nav-link">Appointment</a></li>
                                    <li class="nav-item"><a href="{{route('patient-logout')}}" class="nav-link">LOGOUT</a></li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item"><a href="#" class="nav-link btn btn-primary">Login/signup</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#login_patient_modal">Patient</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#doctor_login_modal">Doctor
                                        </a></li>
                                </ul>
                            </li>
                        @endif
                       
                    </ul>
                </div>
            </div>
        </nav>
        
    </div>
</div>

<div class="modal" id="callModal">
    <div class="modal-dialog m-1" role="document" style="float: right;width:270px;">
        <div class="modal-content bg-dark p-2" id="callInformation">

        </div>
      </div>
</div>

<!--  patient  login Modal are start -->
<!-- Modal -->
@if(Auth::user() == '')
    <x-login-register/>
@endif


<!--  patient login modal are end -->



</div>
</div>



