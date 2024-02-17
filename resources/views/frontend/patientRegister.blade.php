@extends('frontend.layouts.default')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<div class="main-bg">
    <div class="box-conatiner">
        <div id="a">
            <div class="circle-ripple"></div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h1 class="heading-left">Register as a Patient</h1>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="wrap-login100">
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
                    <form action="{{route('patient-signup')}}" class="login100-form validate-form p-l-55 p-r-55 p-t-20" method="post" enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="name">Enter your Name</label>
                                    <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" aria-describedby="name" placeholder="Enter your name">
                                    @error('name')
                                        <spane class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="slect_gender">Gender</label>
                                    <select class="form-control" name="gender" id="exampleFormControlSelect1">
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="email">Enter your Email</label>
                                    <input type="text" class="form-control" value="{{old('email')}}" name="email" id="email" placeholder="Enter your email">
                                    @error('email')
                                        <spane class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="age">Enter your Age</label>
                                    <input type="date" class="form-control" value="{{old('dob')}}" name="dob" id="patient_age" placeholder="Enter your age">
                                    @error('dob')
                                        <spane class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="phone">Phone number</label>
                                    <input type="text" class="form-control" value="{{old('phone')}}" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your phone number">
                                    @error('phone')
                                        <spane class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="password">Password</label>
                                    <input type="password" class="form-control" value="{{old('password')}}" name="password" id="exampleInputPassword1" placeholder="Enter your password">
                                </div>
                                @error('password')
                                    <spane class="error">{{$message}}</span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="weight">Weight</label>
                                    <input type="text" class="form-control" value="{{old('weight')}}" name="weight" id="patient_ht" placeholder="  Enter your weight">
                                    @error('weight')
                                        <spane class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="height">Height</label>
                                    <input type="text" class="form-control" value="{{old('height')}}" name="height" id="patient_wt" placeholder="  Enter your height">
                                    @error('height')
                                        <spane class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="patient_bp">Blood Pressure (if have)</label><br><br>
                                    <input type="radio" id="html" name="blood_pressure" value="1">
                                    <label for="html">Yes</label>
                                    <input type="radio" id="html" name="blood_pressure" value="0">
                                    <label for="html">No</label><br>
                                </div>
                                @error('blood_pressure')
                                    <spane class="error">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <label for="patient_sugar">Blood Sugar level (if have)</label><br><br>
                                    <input type="radio" id="html" name="blood_sugar" value="1">
                                      <label for="html">Yes</label>
                                    <input type="radio" id="html" name="blood_sugar" value="0">
                                      <label for="html">No</label><br>
                                    @error('blood_sugar')
                                        <spane class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="patient_bp">Symptom (if have)</label><br>
                                    <select class="js-select2" name="symptom[]" multiple="multiple">
                                        <option value="O1" data-badge="">Option1</option>
                                        <option value="O2" data-badge="">Option2</option>
                                        <option value="O3" data-badge="">Option3</option>
                                        <option value="O4" data-badge="">Option4</option>
                                        <option value="O5" data-badge="">Option5</option>
                                        <option value="O6" data-badge="">Option6</option>
                                        <option value="O7" data-badge="">Option7</option>
                                        <option value="O8" data-badge="">Option8</option>
                                        <option value="O9" data-badge="">Option9</option>
                                        <option value="O10" data-badge="">Option10</option>
                                        <option value="O11" data-badge="">Option11</option>
                                        <option value="O12" data-badge="">Option12</option>
                                        <option value="O13" data-badge="">Option13</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <label for="patient_sugar">Allergy Medicine</label>
                                    <input type="text" name="allergy" value="{{old('allergy')}}" class="form-control" id="patient_sugar" placeholder=" ">
                                </div>
                            </div>

                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Profile Image</label>
                                    <input type="file" name="image" class="form-control-file w-100" id="exampleFormControlFile1">
                                    @error('image')
                                        <spane class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Previous lab result (if have)</label>
                                    <input type="file" name="lab_result" class="form-control-file w-100" id="exampleFormControlFile1">
                                    @error('lab_result')
                                        <spane class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address_idd11">Address</label>
                                    <input type="text" name="address" value="{{old('address')}}" class="form-control" id="address" aria-describedby="Location" placeholder="enter your address">
                                    @error('address')
                                        <spane class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="location">Location</label><br><br>
                                    <input type="text" name="location" value="{{old('location')}}" class="form-control" id="location" aria-describedby="Location" placeholder="enter your location">
                                    @error('location')
                                        <spane class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div><br>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input"  name="terms"  id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Allow All Terms &amp; Conditions on this site</label>
                            @error('terms')
                                <spane class="error">{{$message}}</span>
                            @enderror
                        </div><br>
                        <button type="submit" class="btn btn-info">Register<i class="fa fa-long-arrow-right ml-2 text-light" aria-hidden="true"></i></button>
                        <p class="pt-3">You have all Register <span><b><a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#login_modal">Login</a></b></span>?</p>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="register">

    <div class="rg_bc"></div>
    <div class="container" id="registration-form">
        <h1>Register as Patient</h1>
        <div class="frm">

            <div class="row" style="padding:0;margin:0;">
                <div class="col-md-4" style="background: url(http://127.0.0.1:8000/web_assets/assets/img/about-img1.jpg);background-repeat: no-repeat;background-size: cover;background-position: center;">
                </div>
                <div class="col-md-8">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="name">Enter your Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="slect_gender">Gender</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="email">Enter your Email</label>
                                    <input type="text" class="form-control" id="patient_age" placeholder="Enter your age">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="age">Enter your Age</label>
                                    <input type="text" class="form-control" id="patient_age" placeholder="Enter your age">
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="phone">Phone number</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your phone number">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your Phone with anyone
                                        else.</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="password">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="weight">Weight</label>
                                    <input type="text" class="form-control" id="patient_ht" placeholder="  Enter your weight">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="height">Height</label>
                                    <input type="text" class="form-control" id="patient_wt" placeholder="  Enter your height">
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="patient_bp">Blood Pressure (if have)</label><br><br>
                                    <input type="radio" id="html" name="blood_pressure" value="HTML">
                                      <label for="html">Yes</label>
                                    <input type="radio" id="html" name="blood_pressure" value="HTML">
                                      <label for="html">No</label><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <label for="patient_sugar">Blood Sugar level (if have)</label><br><br>
                                    <input type="radio" id="html" name="blood_sugar" value="HTML">
                                      <label for="html">Yes</label>
                                    <input type="radio" id="html" name="blood_sugar" value="HTML">
                                      <label for="html">No</label><br>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="patient_bp">Symptom (if have)</label><br>
                                    <select class="js-select2" multiple="multiple">
                                        <option value="O1" data-badge="">Option1</option>
                                        <option value="O2" data-badge="">Option2</option>
                                        <option value="O3" data-badge="">Option3</option>
                                        <option value="O4" data-badge="">Option4</option>
                                        <option value="O5" data-badge="">Option5</option>
                                        <option value="O6" data-badge="">Option6</option>
                                        <option value="O7" data-badge="">Option7</option>
                                        <option value="O8" data-badge="">Option8</option>
                                        <option value="O9" data-badge="">Option9</option>
                                        <option value="O10" data-badge="">Option10</option>
                                        <option value="O11" data-badge="">Option11</option>
                                        <option value="O12" data-badge="">Option12</option>
                                        <option value="O13" data-badge="">Option13</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <label for="patient_sugar">Allergy Medicine</label>
                                    <input type="text" class="form-control" id="patient_sugar" placeholder=" ">
                                </div>
                            </div>

                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Previous lab result (attachment if have)</label>
                                    <input type="file" class="form-control-file w-100" id="exampleFormControlFile1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="location">Location</label>
                                    <input type="text" class="form-control" id="location" aria-describedby="Location" placeholder="enter your location">
                                </div>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label for="address_idd11">Address</label>
                            <textarea class="form-control form_rrr" style="border-color:#4ac6e8" id="address_idd11" rows="3"></textarea>
                        </div><br>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Allow All Terms &amp; Conditions on this site</label>
                        </div>
                        <button type="submit" class="btn btn-info">Register<i class="fa fa-long-arrow-right ml-2 text-light" aria-hidden="true"></i></button>
                    </form>
                    <p class="pt-3">You have all Register <span><b><a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#login_modal">Login</a></b></span>?</p>
                </div>
            </div>

        </div>
    </div>
</div> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




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

@stop