
@extends('frontend.layouts.default')
@section('content')
<style>
    .lab_banner {
        background-image: linear-gradient(to bottom, rgb(0 0 0 / 44%), rgb(0 0 0 / 61%)), url('{{asset("web_assets/assets/img/lab_bgg.jpg")}}');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 100vh;

    }

    .best-medic h6 {
        color: #4ac6e8;
        letter-spacing: 1px;
        font-weight: 600;
        font-family: 'Arial';
    }

    .my-appoint-content {
        border-left: 3px solid #4ac6e8;
    }

    .appointment-search-doctor {
        width: 100%;
        border: 1px solid #4ac6e8;
        padding: 5px;
        border-radius: 7px;
    }

    .my-appoint-div-rate {
        height: 300px;
        overflow-y: scroll;
    }

    .my-border-apoint {
        border-bottom: 1px solid #d4d4d4;
    }

    .my-carousal-img {
        border-radius: 50% !important;
        box-shadow: 3px 4px 10px grey;
        max-width: 100px;
    }

    .intro-para {
        color: #4ac6e8;
    }

    .my-appoint-doctors {
        color: white;
        background: #4ac6e8;
        padding: 10px 14px;
        border-radius: 4px;
        margin-left: 120px;
        border: 1px solid transparent;
    }

    .done {
        color: gold;
    }

    .my-lab-div h3 {
        color: #4ac6e8;
    }

    .fa-flask {
        color: #4ac6e8 !important;
    }

    .lab-anchor a {
        background-color: #4ac6e8;
        color: white;
        font-weight: bolder;
        border: 2px solid #4ac6e8;
        padding: 10px 15px;
        transition: 0.6s;
    }
</style>
<section>
    <div class="container-fluid lab_banner">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-6 py-5 ">
                    <h2 class="text-light display-5">Meet our Specialism</h2>
                    <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam esse sed accusantium mollitia doloremque vel at reiciendis ut eum</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 ">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="row">
                    <div class="col-md-12 best-medic">
                        <h6>BOOKED YOUR DISEASE TEST</h6>
                    </div>
                </div>
                <div class="row my-appoint-content">
                    <div class="col-md-12">
                        <h1><b>Search Test By Habits!</b></h1>
                        <h5>Want to book Corporate Lab Tests or Lab Tests in Bulk?</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo porro quos delectus exercitationem illo molestiae commodi blanditiis obcaecati similique. Debitis illum expedita autem iste voluptates explicabo distinctio rerum nisi sapiente?</p>
                        <!--  <a href="#" class="medicine-anchor">Appoint Now</a> -->
                        <h6 style="color: #4ac6e8;"><b>Find your diagnostics..</b></h6>
                        <input class="appointment-search-doctor" type="text" name="search" id="search" placeholder="find best laboratory">
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 my-appoint-div-rate">
                <div class="row my-border-apoint py-3">
                    <div class="col-md-3">
                        <img src="{{asset('web_assets/assets/img/lab-3.svg')}}" class="w-100 m-auto my-carousal-img">
                    </div>
                    <div class="col-md-7">
                        <h5><b>Laboratory name</b><span style="margin-left:20px"><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star ml-1" aria-hidden="true"></i></span></h5>
                        <h6 class="intro-para mb-0">Test name</h6>
                        <h6 class="intro-para mt-2 mb-2"> Actual Price <span class="float-right"><s>$230</s></span></h6>
                        <p class="mb-0 intro-para">Discount <span class="float-right"> $190</span></p>
                        <p>
                        </p>
                        <p>Lorem ipsum dolor sit<br> amet consectetur<br> adipisicing<span class="float-right"><a href="#" data-toggle="modal" data-target="#book-a-test-type" class="my-appoint-doctors">Book Now</a></span></p>

                    </div>
                </div>
                <div class="row my-border-apoint py-3">
                    <div class="col-md-3">
                        <img src="{{asset('web_assets/assets/img/lab-3.svg')}}" class="w-100 m-auto my-carousal-img">
                    </div>
                    <div class="col-md-7">
                        <h5><b>Laboratory name</b><span style="margin-left:20px"><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star ml-1" aria-hidden="true"></i></span></h5>
                        <h6 class="intro-para mb-0">Test name</h6>
                        <h6 class="intro-para mt-2 mb-2"> Actual Price <span class="float-right"><s>$230</s></span></h6>
                        <p class="mb-0 intro-para">Discount <span class="float-right"> $190</span></p>
                        <p>
                        </p>
                        <p>Lorem ipsum dolor sit<br> amet consectetur<br> adipisicing<span class="float-right"><a href="#" class="my-appoint-doctors">Book Now</a></span></p>

                    </div>
                </div>
                <div class="row my-border-apoint py-3">
                    <div class="col-md-3">
                        <img src="{{asset('web_assets/assets/img/lab-3.svg')}}" class="w-100 m-auto my-carousal-img">
                    </div>
                    <div class="col-md-7">
                        <h5><b>Laboratory name</b><span style="margin-left:20px"><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star ml-1" aria-hidden="true"></i></span></h5>
                        <h6 class="intro-para mb-0">Test name</h6>
                        <h6 class="intro-para mt-2 mb-2"> Actual Price <span class="float-right"><s>$230</s></span></h6>
                        <p class="mb-0 intro-para">Discount <span class="float-right"> $190</span></p>
                        <p>
                        </p>
                        <p>Lorem ipsum dolor sit<br> amet consectetur<br> adipisicing<span class="float-right"><a href="#" data-toggle="modal" data-target="#book-a-test-type" class="my-appoint-doctors">Book Now</a></span></p>

                    </div>
                </div>
                <div class="row my-border-apoint py-3">
                    <div class="col-md-3">
                        <img src="{{asset('web_assets/assets/img/lab-3.svg')}}" class="w-100 m-auto my-carousal-img">
                    </div>
                    <div class="col-md-7">
                        <h5><b>Laboratory name</b><span style="margin-left:20px"><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star ml-1" aria-hidden="true"></i></span></h5>
                        <h6 class="intro-para mb-0">Test name</h6>
                        <h6 class="intro-para mt-2 mb-2"> Actual Price <span class="float-right"><s>$230</s></span></h6>
                        <p class="mb-0 intro-para">Discount <span class="float-right"> $190</span></p>
                        <p>
                        </p>
                        <p>Lorem ipsum dolor sit<br> amet consectetur<br> adipisicing<span class="float-right"><a href="#" data-toggle="modal" data-target="#book-a-test-type" class="my-appoint-doctors">Book Now</a></span></p>

                    </div>
                </div>
                <div class="row my-border-apoint py-3">
                    <div class="col-md-3">
                        <img src="{{asset('web_assets/assets/img/lab-3.svg')}}" class="w-100 m-auto my-carousal-img">
                    </div>
                    <div class="col-md-7">
                        <h5><b>Laboratory name</b><span style="margin-left:20px"><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star ml-1" aria-hidden="true"></i></span></h5>
                        <h6 class="intro-para mb-0">Test name</h6>
                        <h6 class="intro-para mt-2 mb-2"> Actual Price <span class="float-right"><s>$230</s></span></h6>
                        <p class="mb-0 intro-para">Discount <span class="float-right"> $190</span></p>
                        <p>
                        </p>
                        <p>Lorem ipsum dolor sit<br> amet consectetur<br> adipisicing<span class="float-right"><a href="#" data-toggle="modal" data-target="#book-a-test-type" class="my-appoint-doctors">Book Now</a></span></p>

                    </div>
                </div>
                <div class="row my-border-apoint py-3">
                    <div class="col-md-3">
                        <img src="{{asset('web_assets/assets/img/lab-3.svg')}}" class="w-100 m-auto my-carousal-img">
                    </div>
                    <div class="col-md-7">
                        <h5><b>Laboratory name</b><span style="margin-left:20px"><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star ml-1" aria-hidden="true"></i></span></h5>
                        <h6 class="intro-para mb-0">Test name</h6>
                        <h6 class="intro-para mt-2 mb-2"> Actual Price <span class="float-right"><s>$230</s></span></h6>
                        <p class="mb-0 intro-para">Discount <span class="float-right"> $190</span></p>
                        <p>
                        </p>
                        <p>Lorem ipsum dolor sit<br> amet consectetur<br> adipisicing<span class="float-right"><a href="#" data-toggle="modal" data-target="#book-a-test-type" class="my-appoint-doctors">Book Now</a></span></p>

                    </div>
                </div>
                <div class="row my-border-apoint py-3">
                    <div class="col-md-3">
                        <img src="{{asset('web_assets/assets/img/lab-3.svg')}}" class="w-100 m-auto my-carousal-img">
                    </div>
                    <div class="col-md-7">
                        <h5><b>Laboratory name</b><span style="margin-left:20px"><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star ml-1" aria-hidden="true"></i></span></h5>
                        <h6 class="intro-para mb-0">Test name</h6>
                        <h6 class="intro-para mt-2 mb-2"> Actual Price <span class="float-right"><s>$230</s></span></h6>
                        <p class="mb-0 intro-para">Discount <span class="float-right"> $190</span></p>
                        <p>
                        </p>
                        <p>Lorem ipsum dolor sit<br> amet consectetur<br> adipisicing<span class="float-right"><a href="#" data-toggle="modal" data-target="#book-a-test-type" class="my-appoint-doctors">Book Now</a></span></p>

                    </div>
                </div>
                <div class="row my-border-apoint py-3">
                    <div class="col-md-3">
                        <img src="{{asset('web_assets/assets/img/lab-3.svg')}}" class="w-100 m-auto my-carousal-img">
                    </div>
                    <div class="col-md-7">
                        <h5><b>Laboratory name</b><span style="margin-left:20px"><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star ml-1" aria-hidden="true"></i></span></h5>
                        <h6 class="intro-para mb-0">Test name</h6>
                        <h6 class="intro-para mt-2 mb-2"> Actual Price <span class="float-right"><s>$230</s></span></h6>
                        <p class="mb-0 intro-para">Discount <span class="float-right"> $190</span></p>
                        <p>
                        </p>
                        <p>Lorem ipsum dolor sit<br> amet consectetur<br> adipisicing<span class="float-right"><a href="#" data-toggle="modal" data-target="#book-a-test-type" data-bs-dismiss="modal" class="my-appoint-doctors">Book Now</a></span></p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 m-auto text-center">
                <h2><b>How it Works</b></h2>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8 m-auto col-lg-4">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="{{asset('web_assets/assets/img/lab-1.svg')}}" class="w-25" alt="lab">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3 text-center">
                        <h5><b>Helpfull Test Tips</b></h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus hic, nobis mollitia eveniet molestias tempora est praesentium nesciunt reprehenderit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 m-auto col-lg-4">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="{{asset('web_assets/assets/img/lab-2.svg')}}" class="w-25" alt="lab">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3 text-center">
                        <h5><b>Get Your Results in Few Hours</b></h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus hic, nobis mollitia eveniet molestias tempora est praesentium nesciunt reprehenderit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 m-auto col-lg-4">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="{{asset('web_assets/assets/img/lab-3.svg')}}" class="w-25" alt="lab">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3 text-center">
                        <h5><b>Tests At Home</b></h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus hic, nobis mollitia eveniet
                            molestias tempora est praesentium nesciunt reprehenderit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 pt-5">
        <div class="row">
            <div class="col-md-12 col-lg-6 my-lab-div">
                <div class="row">
                    <div class="col-md-12">
                        <h3><b><img src="{{asset('web_assets/assets/img/lab-img.svg')}}" class="w-100 text-success" style="max-width:37px;" alt="lab"> LAB CARE</b>
                        </h3>
                        <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ducimus provident
                            corrupti sapiente velit iste esse asperiores architecto enim officia unde minima,
                            consectetur aut, dignissimos magnam nam voluptas, ipsum deleniti?</p>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-6">
                        <p><i class="fa fa-flask mr-2" aria-hidden="true"></i>Qualified Staff of Laboratory</p>
                        <p><i class="fa fa-flask mr-2" aria-hidden="true"></i>24/7 Emergency Services</p>
                        <p><i class="fa fa-flask mr-2" aria-hidden="true"></i>Save Your Money &amp; Time</p>
                    </div>
                    <div class="col-md-6">
                        <p><i class="fa fa-flask mr-2" aria-hidden="true"></i>Easy and Affordable Billing</p>
                        <p><i class="fa fa-flask mr-2" aria-hidden="true"></i>Hightech Equipements</p>
                        <p><i class="fa fa-flask mr-2" aria-hidden="true"></i>Will Make Sure Your Safety</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 lab-anchor">
                        <a href="#">Book a Test Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <img src="{{asset('web_assets/assets/img/lab-test.webp')}}" class="w-100 h-100" alt="lab-test">
            </div>
        </div>
    </div>

</section>

<!-- book a lab modal are start -->
<div class="modal fade show" id="book-a-test-type" tabindex="-1" aria-labelledby="book-a-test-type" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="book-a-test-type">Test Booking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="modal-span">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="form-group">
                                <label>Patient Name</label>
                                <input type="text" class="form-control" id="text" aria-describedby="text">
                                <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" id="text" aria-describedby="text">
                            </div>

                            <div class="row">
                                <div class="col form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="City name">
                                </div>
                                <div class="col form-group">
                                    <label>Zip Code</label>
                                    <input type="text" class="form-control" placeholder="Postal Code">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Choose a gender</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>---Select</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Test Category</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>---Select---</option>
                                            <option>Heart Checkup</option>
                                            <option>Blood Test</option>
                                            <option>Lungs Test</option>
                                            <option>Allergy Test</option>
                                            <option>Thyroid Test</option>
                                            <option>Infections Test</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">To all Things are remember</label>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop