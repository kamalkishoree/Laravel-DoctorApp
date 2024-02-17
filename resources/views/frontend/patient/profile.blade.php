@extends('frontend.layouts.default')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
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
                    <img src="{{asset('patientImage/'.$data['userInformation']['image'])}}" alt="dp" class=" doc-img">
                </div>
            </div>
            <div class="col-md-9">
                <div class="detail">
                    <h2>{{ $data['userInformation']['name']}}</h2>
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
                                <div class="text-muted d-flex"><b>Email:</b>
                                    <div class="sub_det">{{ $data['userInformation']['email']}}</div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="text-muted d-flex"><b>Phone No:</b>
                                    <div class="sub_det">{{ $data['userInformation']['phone']}}</div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="text-muted d-flex"><b>Address:</b>
                                    <div class="sub_det">{{ $data['userInformation']['address']}}</div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="text-muted d-flex"><b>Location:</b>
                                    <div class="sub_det">{{ $data['userInformation']['location']}}</div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="text-muted d-flex"><b>DOB:</b>
                                    <div class="sub_det">{{ $data['userInformation']['dob']}}</div>
                                </div><br>
                            </div>

                            <div class="col-md-6">
                                <div class="text-muted d-flex"><b>Weight:</b>
                                    <div class="sub_det">{{ $data['userInformation']['weight']}}</div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="text-muted d-flex"><b>Height:</b>
                                    <div class="sub_det">{{ $data['userInformation']['height']}}</div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="text-muted d-flex"><b>Blood Pressure:</b>
                                    <div class="sub_det">{{ $data['userInformation']['blood_pressure'] == '1'?"Yes":"No"}}</div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="text-muted d-flex"><b>Blood Suger:</b>
                                    <div class="sub_det">{{ $data['userInformation']['blood_suger'] == '1'?"Yes":"No"}}</div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="text-muted d-flex"><b>Symptom:</b>
                                    <div class="sub_det">{{ $data['userInformation']['symptom']}}</div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="text-muted d-flex"><b>Allergy:</b>
                                    <div class="sub_det">{{ $data['userInformation']['allergy']}}</div>
                                </div><br>
                            </div>
                            <h3>Patient Document</h3>
                            <div class="row">
                                <div class="col-md-8">
                                    <img id="myImg" src="{{asset('patientImage/'.$data['userInformation']['lab_result'])}}" data-bs-toggle="modal" data-bs-target="#doc">
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
                                            <img id="myImg" src="{{asset('patientImage/'.$data['userInformation']['lab_result'])}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="profile-tab">
                        <form method="post"  action="{{route('update-patient-profile')}}" enctype="multipart/form-data" id="patientProfile">
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
                                        <label for="">DOB</label>
                                        <input type="date" class="form-control" name="dob" value="{{ $data['userInformation']['dob']}}" aria-describedby="texthelp" placeholder="enter your first name">
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
                                        <label for="">Phone Number</label>
                                        <input type="number" class="form-control" id="" readonly=""  value="{{ $data['userInformation']['phone']}}" aria-describedby="texthelp" placeholder="+1-234-567-891">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="address" value="{{ $data['userInformation']['address']}}" aria-describedby="texthelp" placeholder="Type Your Address">
                                        <div class="error"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label for="">Location</label>
                                        <input type="text" class="form-control" name="location" value="{{ $data['userInformation']['location']}}" aria-describedby="texthelp" placeholder="Type Your Address">
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
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label for="">Weight</label>
                                        <input type="text" class="form-control" name="weight" value="{{ $data['userInformation']['weight']}}" aria-describedby="texthelp" placeholder="Type Your Address">
                                        <div class="error"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label for="">Height</label>
                                        <input type="text" class="form-control" name="height" value="{{ $data['userInformation']['height']}}" aria-describedby="texthelp" placeholder="Type Your Address">
                                        <div class="error"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group  pb-3">
                                        <label for="patient_bp">Blood Pressure (if have)</label><br><br>
                                        <input type="radio" id="html" {{ $data['userInformation']['blood_pressure'] == '1'?"checked":""}} name="blood_pressure" value="1">
                                        <label for="html">Yes</label>
                                        <input type="radio" id="html" {{ $data['userInformation']['blood_pressure'] != '1'?"checked":""}} name="blood_pressure" value="0">
                                        <label for="html">No</label><br>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label for="patient_sugar">Blood Sugar level (if have)</label><br><br>
                                        <input type="radio" id="html" {{ $data['userInformation']['blood_sugar'] == '1'?"checked":""}} name="blood_sugar" value="1">
                                          <label for="html">Yes</label>
                                        <input type="radio" id="html" {{ $data['userInformation']['blood_sugar'] != '1'?"checked":""}}  name="blood_sugar" value="0">
                                          <label for="html">No</label><br>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group  pb-3">
                                        <label for="patient_bp">Symptom (if have)</label><br>
                                        @php
                                            $symptom = explode(",",$data['userInformation']['symptom']);
                                        @endphp
                                        <select class="js-select2" name="symptom[]" multiple="multiple">
                                            <option value="O1" {{in_array("O1", $symptom)?"selected":""}} data-badge="">Option1</option>
                                            <option value="O2" {{in_array("O2", $symptom)?"selected":""}} data-badge="">Option2</option>
                                            <option value="O3" {{in_array("O3", $symptom)?"selected":""}} data-badge="">Option3</option>
                                            <option value="O4" {{in_array("O4", $symptom)?"selected":""}} data-badge="">Option4</option>
                                            <option value="O5" {{in_array("O5", $symptom)?"selected":""}} data-badge="">Option5</option>
                                            <option value="O6" {{in_array("O6", $symptom)?"selected":""}} data-badge="">Option6</option>
                                            <option value="O7" {{in_array("O7", $symptom)?"selected":""}} data-badge="">Option7</option>
                                            <option value="O8" {{in_array("O8", $symptom)?"selected":""}} data-badge="">Option8</option>
                                            <option value="O9" {{in_array("O9", $symptom)?"selected":""}} data-badge="">Option9</option>
                                            <option value="O10" {{in_array("O10", $symptom)?"selected":""}} data-badge="">Option10</option>
                                            <option value="O11" {{in_array("O11", $symptom)?"selected":""}} data-badge="">Option11</option>
                                            <option value="O12" {{in_array("O12", $symptom)?"selected":""}} data-badge="">Option12</option>
                                            <option value="O13" {{in_array("O13", $symptom)?"selected":""}} data-badge="">Option13</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label for="patient_sugar">Allergy Medicine</label>
                                        <input type="text" name="allergy" value="{{ $data['userInformation']['allergy']}}" class="form-control" id="patient_sugar" placeholder=" ">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn text-light my-sub-section-btn bg-success float-right">Save
                                Changes</button>
                            </div>
                            
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>

<script>
    $(".js-select2").select2({
        closeOnSelect: false,
        placeholder: "Placeholder",
        allowHtml: true,
        allowClear: true,
        tags: true
    });
</script>
<script>
     $('#patientProfile').validate({ // initialize the plugin
        rules: {
            name: {
                required: true,
            },
            dob: {
                required: true,
            },
            address: {
                required: true,
            },
            location: {
                required: true,
            },
            weight: {
                required: true,
            },
            height: {
                required: true,
            }
        },
        messages: {
            name: {
                "required":"Please Enter your name!",
            },
            dob: {
                "required":"Please Enter DOB!",
            },
            address: {
                "required":"Please Enter your address!",
            },
            location: {
                "required":"Please Enter your location!",
            },
            weight: {
                "required":"Please Enter your weight!",
            },
            height: {
                "required":"Please Enter your height!",
            }
        }
    });
</script>
@stop