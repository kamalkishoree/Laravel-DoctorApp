@extends('frontend.layouts.default')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="register">

    <div class="rg_bc"></div>
    <div class="container" id="registration-form">
        <div class="main-bg">
            <div class="box-conatiner">
                <div id="a">
                    <div class="circle-ripple"></div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h1 class="heading-left">Register as a Doctor</h1>
                    </div>
                    <div class="col-sm-8 col-md-8">
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
                            <form  action="{{route('doctor-signup')}}" class="login100-form validate-form p-l-55 p-r-55 p-t-20" method="post" id="doctor_register" enctype='multipart/form-data'>
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-check-label" for="name">Enter your Name</label>
                                            <input type="text" class="form-control" value="{{old('name')}}" id="name" name="name" aria-describedby="name" placeholder="Enter your name">
                                            @error('name')
                                                <span class="error">{{$message}}</span>
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
                                            <input type="text" name="email" value="{{old('email')}}" class="form-control" id="patient_age" placeholder="Enter your email">
                                            @error('email')
                                                <span class="error">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-check-label" for="licence">Licence Id</label>
                                            <input type="text" name="licence_id" value="{{old('licence_id')}}" class="form-control" id="license_idd" placeholder="License">
                                            @error('licence_id')
                                                <span class="error">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-check-label" for="phone">Phone number</label>
                                            <input type="text" name="phone" value="{{old('phone')}}" class="form-control" id="phone" placeholder="enter your phone number">
                                            @error('phone')
                                                <span class="error">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-check-label" for="password">Password</label>
                                            <input type="password" value="{{old('password')}}" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                                            @error('password')
                                                <span class="error">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Select Specialist</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="specialist_id">
                                                @foreach($data['specialist'] as $specialist)
                                                    <option value="{{ $specialist['id']}}" >{{ $specialist['specialist']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('specialist')
                                            <span class="error">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address_idd11">Address</label>
                                            <textarea name="address" class="form-control form_rrr" style="border-color:#4ac6e8" id="address_idd11" rows="3">{{old('address')}}</textarea>
                                            @error('address')
                                                <span class="error">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="profile_image">Profile Image</label>
                                            <input type="file" class="form-control" id="profile_image"  name="image">
                                            @error('image')
                                                <span class="error">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-check-label" for="document_image">Document</label>
                                            <input type="file" class="form-control" id="document_image" name="document_image">
                                            @error('document_image')
                                                <span class="error">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-check-label" for="location">Location</label>
                                            <input type="text" value="{{old('location')}}" class="form-control" name="location" id="location" aria-describedby="Location" placeholder="enter your location">
                                            @error('location')
                                                <span class="error">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div><br>

                                <div class="form-group form-check">
                                    <input type="checkbox" name="terms" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label"  for="exampleCheck1">Allow All Terms &amp; Conditions on this site</label>
                                    @error('terms')
                                        <span class="error">{{$message}}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-info">Register<i class="fa fa-long-arrow-right ml-2 text-light" aria-hidden="true"></i></button>
                                <p class="pt-3">You have all Register <span><b><a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#login_modal">Login</a></b></span>?</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@stop