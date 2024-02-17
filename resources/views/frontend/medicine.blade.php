@extends('frontend.layouts.default')
@section('content')
<style>
	.lab_banner{
    background-image: linear-gradient(to bottom, rgb(0 0 0 / 44%), rgb(0 0 0 / 61%) ),url('{{asset("web_assets/assets/img/medicine_bgg.jpg")}}');
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
}.my-border-apoint {
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
.progress {
    height: 5px !important;
}
.progress-lab-1 p {
    color: #4ac6e8;
}
.progress-lab-1 span {
    float: right;
}
.silver-shad {
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
}
.mysite{
	margin-left: 32px!important;
}
.custom-file-input::before {
    content: "\f0c5 Choose from the gallery ";
    color: #4ac6e8;
    font-family: 'FontAwesome';
    display: inline-block;
    background: white;
    padding: 5px 35px;
    white-space: nowrap;
    -webkit-user-select: none;
    cursor: pointer;
    font-weight: 400;
    border-radius: 4px;
    border: 1px solid #4ac6e8;
}
.custom-file-input {
    color: transparent;
    opacity: 5;
    width: 65.5%;
}
.progress-bar-striped{
    background-color:#223d65;
}
</style>
<section>
	<!-- first section are start -->
	<div class="container-fluid lab_banner">
		<div class="container py-5">
			<div class="row py-5">
				<div class="col-md-8 py-5">

					<h2 class="display-4 text-light">The presence of the doctor is the beginning of the cure.</h2>
					<p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam esse sed accusantium mollitia doloremque vel at reiciendis ut eum
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- first section are end -->

	<!-- first 1 section are start -->
	<div class="container mt-5">
         
         <div class="row m-auto">
             <div class="col-md-10">
         		<label for="exampleFormControlTextarea1" class="form-label pr mt-1">
                    <b>ADD PRESCRIPTONS MANUALLY</b>
                 </label>
         		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-md-2">
            <a href="" class="btn btn-primary mt-4">Submit</a>
            </div>
         </div>
         <div class="row mt-3">
            <div class="col-md-12">
               <h4 class="pl-2">Prescription</h4>
            </div>
         </div>
      </div>
     <!-- first 1 section are end  -->



     <!-- second section 1 are start -->
     <div class="container">
     <div class="row mt-3 mb-3">
                        <div class="col-md-4 mysite ml-4 silver-shad rounded ">
                            <div class="row pt-2">
                                <div class="col-md-12">
                                    <p>Choose from the following to upload prescription:</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 text-center">
                                    <input type="file" class="custom-file-input">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 px-3">
                                    <p>Uploaded Prescriptions will be shown here</p>
                                
                                </div>
                            </div>

                        </div>
                        <div class="col-md-7 mysite ml-4 silver-shad rounded">
                        	
                              <div class="row pt-2">
                                  <div class="col-12">
                                  <p class="text-info toggle2">Guide for a valid prescription:</p>
                                  </div>
                              </div>
                            <div class="row pt-2" id="target2">
                                <div class="col-md-12">
                                     <ul class="text-muted ">
                                         <li><small>Maximum allowed file size: 3MB</small></li>
                                         <li><small>Medicines will be dispensed as per prescription</small></li>
                                         <li><small>Supported files type: jpg , png , pdf, jpeg</small></li>
                                         <li><small>Avoid blur images</small></li>
                                         <li><small>Include details of doctor and patient + clinic visit date</small></li>
                                         <li><small>Don’t crop out any part of the image</small></li>
                                     </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
     <!-- second section 1 are end -->



	<!-- second section are start--->
	<div class="container my-5 pt-3">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="row">
                    <div class="col-md-12 best-medic">
                        <h6>GET DELIVER URGENTLY</h6>
                    </div>
                </div>
                <div class="row my-appoint-content">
                    <div class="col-md-12">
                        <h1><b>Delivery Open 24/7</b></h1>
                        <h5>Get Medicines Delivered in 02 Hours or Very Urgent on Priority</h5>
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
                              <img src="{{asset('web_assets/assets/img/med-1.jpg')}}" class="w-100 m-auto my-carousal-img" style="height:93px;">
                    </div>
                    <div class="col-md-7">
                         <h5><b>Medicine name</b><span style="margin-left:20px"><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star ml-1" aria-hidden="true"></i></span></h5>
                        <h6 class="intro-para mb-0">Specility medicine</h6>
                        <h6 class="intro-para mt-2 mb-2"> Actual Price <span class="float-right"><s>$120</s></span></h6>
                        <p class="mb-0 intro-para">Discount <span class="float-right"> $50</span></p><p>
                        </p><p>Lorem ipsum dolor sit<br> amet consectetur<br> adipisicing<span class="float-right"><a href="#" class="my-appoint-doctors">Order Now</a></span></p>
                        
                    </div>
                </div>
                <div class="row my-border-apoint py-3">
                    <div class="col-md-3">
                              <img src="{{asset('web_assets/assets/img/med-1.jpg')}}" class="w-100 m-auto my-carousal-img" style="height:93px;">
                    </div>
                    <div class="col-md-7">
                         <h5><b>Medicine name</b><span style="margin-left:20px"><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star ml-1" aria-hidden="true"></i></span></h5>
                        <h6 class="intro-para mb-0">Specility medicine</h6>
                        <h6 class="intro-para mt-2 mb-2"> Actual Price <span class="float-right"><s>$120</s></span></h6>
                        <p class="mb-0 intro-para">Discount <span class="float-right"> $50</span></p><p>
                        </p><p>Lorem ipsum dolor sit<br> amet consectetur<br> adipisicing<span class="float-right"><a href="#" class="my-appoint-doctors">Order Now</a></span></p>
                        
                    </div>
                </div>
                <div class="row my-border-apoint py-3">
                    <div class="col-md-3">
                              <img src="{{asset('web_assets/assets/img/med-1.jpg')}}" class="w-100 m-auto my-carousal-img" style="height:93px;">
                    </div>
                    <div class="col-md-7">
                         <h5><b>Medicine name</b><span style="margin-left:20px"><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star ml-1" aria-hidden="true"></i></span></h5>
                        <h6 class="intro-para mb-0">Specility medicine</h6>
                        <h6 class="intro-para mt-2 mb-2"> Actual Price <span class="float-right"><s>$120</s></span></h6>
                        <p class="mb-0 intro-para">Discount <span class="float-right"> $50</span></p><p>
                        </p><p>Lorem ipsum dolor sit<br> amet consectetur<br> adipisicing<span class="float-right"><a href="#" class="my-appoint-doctors">Order Now</a></span></p>
                        
                    </div>
                </div>
                <div class="row my-border-apoint py-3">
                    <div class="col-md-3">
                              <img src="{{asset('web_assets/assets/img/med-1.jpg')}}" class="w-100 m-auto my-carousal-img" style="height:93px;">
                    </div>
                    <div class="col-md-7">
                         <h5><b>Medicine name</b><span style="margin-left:20px"><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star ml-1" aria-hidden="true"></i></span></h5>
                        <h6 class="intro-para mb-0">Specility medicine</h6>
                        <h6 class="intro-para mt-2 mb-2"> Actual Price <span class="float-right"><s>$120</s></span></h6>
                        <p class="mb-0 intro-para">Discount <span class="float-right"> $50</span></p><p>
                        </p><p>Lorem ipsum dolor sit<br> amet consectetur<br> adipisicing<span class="float-right"><a href="#" class="my-appoint-doctors">Order Now</a></span></p>
                        
                    </div>
                </div>
                <div class="row my-border-apoint py-3">
                    <div class="col-md-3">
                              <img src="{{asset('web_assets/assets/img/med-1.jpg')}}" class="w-100 m-auto my-carousal-img" style="height:93px;">
                    </div>
                    <div class="col-md-7">
                         <h5><b>Medicine name</b><span style="margin-left:20px"><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star ml-1" aria-hidden="true"></i></span></h5>
                        <h6 class="intro-para mb-0">Specility medicine</h6>
                        <h6 class="intro-para mt-2 mb-2"> Actual Price <span class="float-right"><s>$120</s></span></h6>
                        <p class="mb-0 intro-para">Discount <span class="float-right"> $50</span></p><p>
                        </p><p>Lorem ipsum dolor sit<br> amet consectetur<br> adipisicing<span class="float-right"><a href="#" class="my-appoint-doctors">Order Now</a></span></p>
                        
                    </div>
                </div>
                <div class="row my-border-apoint py-3">
                    <div class="col-md-3">
                              <img src="{{asset('web_assets/assets/img/med-1.jpg')}}" class="w-100 m-auto my-carousal-img" style="height:93px;">
                    </div>
                    <div class="col-md-7">
                         <h5><b>Medicine name</b><span style="margin-left:20px"><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star ml-1" aria-hidden="true"></i></span></h5>
                        <h6 class="intro-para mb-0">Specility medicine</h6>
                        <h6 class="intro-para mt-2 mb-2"> Actual Price <span class="float-right"><s>$120</s></span></h6>
                        <p class="mb-0 intro-para">Discount <span class="float-right"> $50</span></p><p>
                        </p><p>Lorem ipsum dolor sit<br> amet consectetur<br> adipisicing<span class="float-right"><a href="#" class="my-appoint-doctors">Order Now</a></span></p>
                        
                    </div>
                </div>
                <div class="row my-border-apoint py-3">
                    <div class="col-md-3">
                              <img src="{{asset('web_assets/assets/img/med-1.jpg')}}" class="w-100 m-auto my-carousal-img" style="height:93px;">
                    </div>
                    <div class="col-md-7">
                         <h5><b>Medicine name</b><span style="margin-left:20px"><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star ml-1" aria-hidden="true"></i></span></h5>
                        <h6 class="intro-para mb-0">Specility medicine</h6>
                        <h6 class="intro-para mt-2 mb-2"> Actual Price <span class="float-right"><s>$120</s></span></h6>
                        <p class="mb-0 intro-para">Discount <span class="float-right"> $50</span></p><p>
                        </p><p>Lorem ipsum dolor sit<br> amet consectetur<br> adipisicing<span class="float-right"><a href="#" class="my-appoint-doctors">Order Now</a></span></p>
                        
                    </div>
                </div>
                <div class="row my-border-apoint py-3">
                    <div class="col-md-3">
                              <img src="{{asset('web_assets/assets/img/med-1.jpg')}}" class="w-100 m-auto my-carousal-img" style="height:93px;">
                    </div>
                     <div class="col-md-7">
                         <h5><b>Medicine name</b><span style="margin-left:20px"><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star done ml-1" aria-hidden="true"></i><i class="fa fa-star ml-1" aria-hidden="true"></i></span></h5>
                        <h6 class="intro-para mb-0">Specility medicine</h6>
                        <h6 class="intro-para mt-2 mb-2"> Actual Price <span class="float-right"><s>$120</s></span></h6>
                        <p class="mb-0 intro-para">Discount <span class="float-right"> $50</span></p><p>
                        </p><p>Lorem ipsum dolor sit<br> amet consectetur<br> adipisicing<span class="float-right"><a href="#" class="my-appoint-doctors">Order Now</a></span></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  second section are end -->

    <!-- third section are start -->
    <div class="container my-5 pt-5">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="row">
                    <div class="col-md-12 about-my-lab">
                        <h6 class="">About Us Medicines</h6>
                        <h1><b>The Medicines Give A Second Life!</b></h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit ad doloribus ipsa cupiditate
                            porro eveniet vitae dicta a sunt. Beatae pariatur, minus accusantium voluptas vitae eos
                            quaerat? Vitae, voluptatem voluptatum?</p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12 progress-lab-1">
                        <p><b>Costing<span>25%</span></b></p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%; height:5px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12 progress-lab-1">
                        <p><b>Verifying Products<span>65%</span></b></p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped " role="progressbar" style="width: 65%; height:5px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12 progress-lab-1">
                        <p><b>Advanced Biotics<span>85%</span></b></p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped " role="progressbar" style="width: 85%; height:5px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12 progress-lab-1">
                        <p><b>Recommended Medicose<span>90%</span></b></p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%; height:5px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-2">
                <img src="{{asset('web_assets/assets/img/medical-1.jpg')}}" class="w-100 h-100" alt="about-lab">
            </div>
        </div>
    </div>
    <!-- third section are end -->
</section>
@stop