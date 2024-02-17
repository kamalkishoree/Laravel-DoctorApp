@extends('frontend.layouts.default')
@section('content')
<style>
    .bg_banner {
        background-image: linear-gradient(to bottom, rgb(0 0 0 / 44%), rgb(0 0 0 / 61%)), url(https://omninos.me/Telemedical/assets/img/lab_bgg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 30vh;
    }

    .pro_img {
        overflow: hidden;
        margin-top: -27%;
        width: 100%;
    }

    img.doc-img {
        border-radius: 50%;
        background: #f5f1f1;
        width: 66%;
        padding: 2px 23px;
    }

    .profile_det {
        padding-top: 15px;
    }

    .additional {
        background: #c5c4c41c;
        padding: 3%;
    }

    .sub_det {
        width: 60%;

    }

    .additional b {
        width: 40%;
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        border-right: 5px solid;
        background: #00deff !important;
        -webkit-border-image: -webkit-gradient(linear, left top, left bottom, from(blue), to(cyan))0 100% 0 0 stretch;
        width: 100%;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
    }

    .additional .nav-link {
        width: 100%;
        padding: 8px;
        font-size: 16px;
        font-weight: bold;
    }

    div#det h3 {
        border-bottom: 2px solid #00b8ff;
        padding: 5px 0;
        margin-bottom: 15px;
        padding: 10px;
    }

    div#edit h3 {
        border-bottom: 2px solid #00b8ff;
        padding: 5px 0;
        margin-bottom: 15px;
    }

    img#myImg {
        width: 150px;
    }

    div#doc img {
        width: 100%;
    }

    #doc .modal-content {
        top: -29px;
    }

    .social i {
        border-radius: 50%;
        font-size: 14px;
        padding: 4px 6px;
    }
    div#edit textarea {
    height: 60px !important;
}
</style>
<div class="bg_banner">
</div>
<div class="profile_det">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="pro_img">
                    <img src="{{asset('doctorImage/'.$data['userInformation']['image'])}}" alt="dp" class=" doc-img">
                </div>
            </div>
            <div class="col-md-9">
                <div class="detail">
                    <h2>{{ $data['userInformation']['name']}}</h2>
                    <h6>{{ $data['userInformation']['specialist']}}</h6>
                    <div class="text-muted d-flex"><b>Email:</b>
                        <div class="sub_det">{{ $data['userInformation']['email']}}</div>
                    </div><br>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="additional">
    <div class="container">
        <div class="row">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
            <div class="col-md-4">
                <ul class="nav nav-tabs d-block" id="myTab" role="tablist" style="border:none;">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#det" type="button" role="tab" aria-controls="home" aria-selected="true">About Me</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#edit" type="button" role="tab" aria-controls="profile" aria-selected="false">Setting</button>
                    </li>

                </ul>
            </div>
            <div class="col-md-8">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="det" role="tabpanel" aria-labelledby="home-tab">
                        <h3>About Me</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <p>{{ $data['userInformation']['long_description']?$data['userInformation']['long_description']:"N.A"}}</p>
                            </div>
                        </div>

                        <h3>Personal Information</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-muted d-flex"><b>Full Name:</b>
                                    <div class="sub_det">{{ $data['userInformation']['name']}}</div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="text-muted d-flex"><b>Gender:</b>
                                    <div class="sub_det">{{ $data['userInformation']['gender']}}</div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="text-muted d-flex"><b>Licence Id:</b>
                                    <div class="sub_det">{{ $data['userInformation']['licence_id']}}</div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="text-muted d-flex"><b>Phone No:</b>
                                    <div class="sub_det">{{ $data['userInformation']['phone']}}</div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="text-muted d-flex"><b>Email:</b>
                                    <div class="sub_det">{{ $data['userInformation']['email']}}</div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="text-muted d-flex"><b>Address:</b>
                                    <div class="sub_det">{{ $data['userInformation']['address']}}</div>
                                </div><br>
                            </div>
                            <h3>Social Links</h3>
                            <div class="row social">
                                <div class="col-md-6 mt-2"><i class="fa fa-facebook" style="color:white;background:blue;"></i>&nbsp <span>{{ $data['userInformation']['facebook_url']?$data['userInformation']['facebook_url']:'N.A'}}</span></div>
                                <div class="col-md-6 mt-2"><i class="fa fa-instagram" style="color:white;background:#fa032e;"></i>&nbsp <span>{{ $data['userInformation']['instagram_url']?$data['userInformation']['instagram_url']:'N.A'}}</span></div>
                                <div class="col-md-6 mt-2"><i class="fa fa-linkedin" style="color:white;background:blue;"></i>&nbsp <span>{{ $data['userInformation']['linkedin_url']?$data['userInformation']['linkedin_url']:'N.A'}}</span></div>
                                <div class="col-md-6 mt-2"><i class="fa fa-twitter" style="color:white ;background:cyan;"></i>&nbsp <span>{{ $data['userInformation']['twitter_url']?$data['userInformation']['twitter_url']:'N.A'}}</span></div>
                            </div>
                            <h3>Doctor Document</h3>
                            <div class="row">
                                <div class="col-md-8">
                                    <img id="myImg" src="{{asset('doctorImage/'.$data['userInformation']['document_image'])}}" data-bs-toggle="modal" data-bs-target="#doc">
                                </div>
                            </div>
                            <div class="modal" id="doc">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header" style="border:none;">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <img id="myImg" src="{{asset('doctorImage/'.$data['userInformation']['document_image'])}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="profile-tab">
                        <form method="post"  action="{{route('update-doctor-profile')}}" enctype="multipart/form-data" id="doctorProfile">
                            @csrf
                            <h3>Edit Profile</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label for="">Full Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $data['userInformation']['name']}}" aria-describedby="texthelp" placeholder="enter your first name">
                                        <div class="error"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label for="">Specialist</label>
                                        <input type="text" readonly class="form-control" value="{{ $data['userInformation']['specialist']}}" aria-describedby="texthelp" placeholder="enter your first name">
                                        <div class="error"></div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" readonly=""  value="{{ $data['userInformation']['email']}}" aria-describedby="texthelp" placeholder="abcd123@gmail.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label for="exampleFormControlSelect1">Choose Your Gender</label>
                                        <select class="form-control w-100" name="gender" id="exampleFormControlSelect1">
                                            <option {{ $data['userInformation']['gender'] == 'Male'?"selected":" " }} value="Male">Male</option>
                                            <option {{ $data['userInformation']['gender'] == 'Female'?"selected":" " }} value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label for="">Licence id</label>
                                        <input type="text" readonly class="form-control"  value="{{ $data['userInformation']['licence_id']}}" aria-describedby="texthelp" placeholder="Enter Licence Id">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label for="">Phone Number</label>
                                        <input type="number" class="form-control" id="" readonly=""  value="{{ $data['userInformation']['phone']}}" aria-describedby="texthelp" placeholder="+1-234-567-891">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label for="">Location</label>
                                        <input type="text" class="form-control" name="address" value="{{ $data['userInformation']['address']}}" aria-describedby="texthelp" placeholder="Type Your Address">
                                        <div class="error"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label for="">Profile Picture</label>
                                        <input type="file" class="form-control" name="image">
                                        <div class="error"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label for="">Short Description</label>
                                        <textarea class="form-control" name="short_description"  aria-describedby="texthelp" placeholder="Type Short Description">{{ $data['userInformation']['short_description']}}</textarea>
                                        <div class="error"></div>
                                    </div>
                                </div>
                           
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label for="">Long Description</label>
                                        <textarea class="form-control" name="long_description" aria-describedby="texthelp" placeholder="Type Long Description">{{ $data['userInformation']['long_description']}}</textarea>
                                        <div class="error"></div>
                                    </div>
                                </div>
                            </div>
                            <h3>Social Links</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group pb-3">
                                        <label for="">Facebook</label>
                                        <input type="text" class="form-control" name="facebook_url" value="{{ $data['userInformation']['facebook_url']}}" aria-describedby="texthelp" placeholder="Add Facebook link">
                                        <div class="error"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group pb-3">
                                        <label for="">Instagram</label>
                                        <input type="text" class="form-control" name="instagram_url" value="{{ $data['userInformation']['instagram_url']}}" aria-describedby="texthelp" placeholder="Add Instagram link">
                                        <div class="error"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group pb-3">
                                        <label for="">Linkedin</label>
                                        <input type="text" class="form-control" name="linkedin_url" value="{{ $data['userInformation']['linkedin_url']}}" aria-describedby="texthelp" placeholder="Add Linkedin link">
                                        <div class="error"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group pb-3">
                                        <label for="">Twitter</label>
                                        <input type="text" class="form-control" name="twitter_url" value="{{ $data['userInformation']['twitter_url']}}" aria-describedby="texthelp" placeholder="Add Twitter link">
                                        <div class="error"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn text-light my-sub-section-btn bg-success float-right">Save
                                Changes</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
     $('#doctorProfile').validate({ // initialize the plugin
        rules: {
            name: {
                required: true,
            },
            address: {
                required: true,
            },
            short_description: {
                required: true,
            },
            long_description: {
                required: true,
            },
            
        },
        messages: {
            name: {
                "required":"Please Enter your name!",
            },
            address: {
                "required":"Please Enter your address!",
            },
            short_description: {
                "required":"Please Enter short description!",
            },
            long_description: {
                "required":"Please Enter short description!",
            },
        }
    });
</script>
@stop