@extends('frontend.layouts.default')
@section('content')
<div class="section-profile py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('web_assets/assets/img/keeps-dr.png')}}" alt="dp" class=" dr-img">
                </div>
                <div class="col-md-8">
                    <h2 class="text-color-2 text-primary">Dr. Sandeep</h2>
                    <small class="text-muted">Full Name: <span class="text-color-1 ml-5">Dr. Sandeep Kumar</span></small><br>
                    <small class="text-muted">Gender: <span class="text-color-1 ml-5">Male</span></small><br>
                    <small class="text-muted">Date of birth: <span class="text-color-1 ml-5">18 May 1996</span></small><br>
                    <small class="text-muted">Phone No: <span class="text-color-1 ml-5">9999988888</span></small><br>
                    <small class="text-muted">Email: <span class="text-color-1 ml-5">user@gmail.com</span></small><br>
                    <small class="text-muted">Address: <span class="text-color-1 ml-5">11 phase
                            mohali</span></small><br>
                </div>
            </div>
        </div>

        <!-- profile section are end -->
        <!-- Edit profile section are start -->


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-color-1">Edit Your Profile</h3>
                </div>
            </div>
        </div>


        <div class="container mb-5">
            <div class="row">
                <div class="col-md-11 m-auto">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group pb-3">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" name="name" value="sandeep" aria-describedby="texthelp" placeholder="enter your first name">
                            <div class="error"></div>
                        </div>
                        <div class="form-group pb-3">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" name="lastName" value="kumar" aria-describedby="texthelp" placeholder="enter your last name">
                            <div class="error"></div>
                        </div>
                        <div class="form-group pb-3">
                            <label for="">Email</label>
                            <input type="text" class="form-control" readonly="" name="email" value="user@gmail.com" aria-describedby="texthelp" placeholder="abcd123@gmail.com">
                        </div>

                        <div class="form-group pb-3">
                            <label for="exampleFormControlSelect1">Choose Your Gender</label>
                            <select class="form-control w-100" name="gender" id="exampleFormControlSelect1">
                                <option selected="" value="2">Male</option>
                                <option value="1">Female</option>
                            </select>
                        </div>
                        <div class="form-group pb-3">
                            <label for="">Phone Number</label>
                            <input type="number" class="form-control" id="" readonly="" name="phone" value="9999988888" aria-describedby="texthelp" placeholder="+1-234-567-891">
                        </div>

                        <!-- <div class="form-group">
                            <label for="">Date Of Birth</label>
                            <input type="date" class="form-control" id="" value="2021-09-10" name="dob" aria-describedby="texthelp" placeholder="enter your name">
                            <div class="error"></div>
                        </div> -->

                        

                        <div class="form-group pb-3">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="address" value="11 phase mohali" aria-describedby="texthelp" placeholder="Type Your Address">
                            <div class="error"></div>
                        </div>
                        <button type="submit" class="btn text-light my-sub-section-btn bg-info float-right">Save
                            Changes</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    @stop