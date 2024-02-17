@extends('frontend.layouts.default')
@section('content')
<style>
	.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
		border: 1px solid #40289e !important;
		background: #4ac6e8!important;
		font-weight: normal !important;
		color: #ffffff !important;
	}

	.ui-widget-header {
		border: 1px solid #7e8cd27a !important;
		background: #4ac6e8!important;
		color: #eaf5f7 !important;
		font-weight: bold !important;
	}
</style>
<section class="page-title-area page-title-bg4">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Doctor Details</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>{{ $data['userInformation']['name']}}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="doctor-details-area ptb-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-12">
					<div class="doctor-details-image">
					<img src="{{asset('doctorImage/'.$data['userInformation']['image'].'')}}" alt="image">
					<h3>{{ $data['userInformation']['name']}}</h3>
					<span>{{ $data['userInformation']['specialist']}}</span>
					<ul class="social">
						<li><a href="{{ $data['userInformation']['facebook_url']? $data['userInformation']['facebook_url']:''}}"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="{{ $data['userInformation']['twitter_url']? $data['userInformation']['twitter_url']:''}}"><i class="fab fa-twitter"></i></a></li>
						<li><a href="{{ $data['userInformation']['linkedin_url']? $data['userInformation']['linkedin_url']:''}}"><i class="fab fa-linkedin-in"></i></a></li>
						<li><a href="{{ $data['userInformation']['instagram_url']? $data['userInformation']['instagram_url']:''}}"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-7 col-md-12">
				<div class="doctor-details-desc">
					<h2>Hello i’m Dr. {{ $data['userInformation']['name']}} Introducing My Self.</h2>
					<p>{{ $data['userInformation']['short_description']}}</p>
					<p>{{ $data['userInformation']['long_description']}}</p>
					
				</div>
			</div>
		</div>
		<!--<div class="skill-education-desc">
			<div class="row">
			

			<div class="col-lg-6 col-md-12">
				<div class="skill-desc">
				<span class="sub-title">My Skills</span>
				<h2>I Have Explained about Myself A bit</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
				<ul>
					<li><span><i class="fas fa-check"></i> Cancer Services</span></li>
					<li><span><i class="fas fa-check"></i> Liver Transplant</span></li>
					<li><span><i class="fas fa-check"></i> Kidney Cancer</span></li>
					<li><span><i class="fas fa-check"></i> Cardiac Arrhythmia</span></li>
					<li><span><i class="fas fa-check"></i> Dental Services</span></li>
					<li><span><i class="fas fa-check"></i> Radiation Oncology</span></li>
					<li><span><i class="fas fa-check"></i> Kidney Stone Center</span></li>
					<li><span><i class="fas fa-check"></i> Male Urology Services</span></li>
					<li><span><i class="fas fa-check"></i> Heart Transplant</span></li>
					<li><span><i class="fas fa-check"></i> Pediatric Liver Transplant</span></li>
					<li><span><i class="fas fa-check"></i> Pediatric Heart Transplant</span></li>
					<li><span><i class="fas fa-check"></i> Pancreas Transplant</span></li>
				</ul>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class="education-desc">
			<span class="sub-title">My Education</span>
			<h2>Here is my 33 Years Qualifications</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
			<ul>
			<li>
			<div class="icon">
			<i class="flaticon-doctor"></i>
			</div>
			 <span>Master Of Science</span>
			Oxford Univercity (2011 - 2014)
			</li>
			<li>
			<div class="icon">
			<i class="flaticon-newborn"></i>
			</div>
			<span>Neurology Test</span>
			Stanford Versity (2015 - 2018)
			</li>
			<li>
			<div class="icon">
			<i class="flaticon-laboratory"></i>
			</div>
			<span>Master Of Medicine</span>
			Stanford Versity (2015 - 2018)
			</li>
			<li>
			<div class="icon">
			<i class="flaticon-extraction"></i>
			</div>
			<span>Orthopedics</span>
			Oxford Univercity (2011 - 2014)
			</li>
			</ul>
			</div>
			</div>
			</div>
		</div>
		</div>
<div class="shape3"><img src="{{asset('web_assets/assets/img/shape/3.png')}}" class="wow fadeInLeft" alt="image"></div>-->
</section>


<section class="appointment-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
	<div class="container">
		<div class="appointment-content">
			<span class="sub-title">Get Some Advice?</span>
			<h2>Make An Appointment</h2>
			<div id="responseMess"></div>
			<form method="post" id="book-appointment">
				@csrf
				<input type="hidden" value="{{$data['userInformation']['doctor_id']}}" name="doctor_id">
				<input type="hidden" value="{{$data['userInformation']['specialist_id']}}" name="specialist_id">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<div class="icon">
								<i class="far fa-user"></i>
							</div>
							<label>Your Name</label>
							<input type="text" class="form-control" placeholder="Enter Your Name" id="name" name="name">
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<div class="icon">
								<i class="fas fa-phone-volume"></i>
							</div>
							<label>Your Phone</label>
							<input type="text" class="form-control" placeholder="Enter Your Phone" id="phone" name="phone">
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<div class="icon">
								<i class="fas fa-calendar-alt"></i>
							</div>
							<label>Select Date</label>
							<!-- <input type="text" class="form-control" placeholder="mm/dd/yy" id="datepicker" name="text"> -->
							<input type="text" class="form-control" name="booking_date" id="startdate" placeholder="Select booking date">



						</div>
					</div>
					
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<div class="icon">
								<i class="far fa-clock"></i>
							</div>
						 	<label>Add Time</label>
							 @if($data['timeSlots'] > 0)
								<select class="form-select" aria-label="Default select example" name="time_slot">
									<option value="">Select Time</option>
									@foreach($data['timeSlots'] as $slots)
										<option value="{{$slots}}">{{$slots}}</option>
									@endforeach
								</select>
							@else
								<input type="text" readonly class="form-control" placeholder="Currently Unavailable" id="text" name="time_slot">
							@endif
						</div>
					</div>
					
					<div class="col-lg-12 col-md-12">
						<div class="submit-btn">
							<button class="btn btn-primary">Make Appointment <i class="fas fa-chevron-right"></i></button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript">
	 $('#book-appointment').validate({ // initialize the plugin
        rules: {
            name: {
                required: true,
            },
            phone: {
                required: true,
            },
			booking_date:{
				required: true,
			},
			time_slot:{
				required: true,
			}
        },
        messages: {
            name:"Please enter your name!",
            booking_date: "Please Enter booking date!",
			phone : "Please enter your mobile number!",
			time_slot : "Please select booking time slot!",
        },
        submitHandler: function(form) {
			var userInfo = '{{auth()->user()?auth()->user()->user_type:""}}';
			if(userInfo != '' && userInfo == 'patient'){
				$.ajax({
					url: "{{route('book-appointment')}}",
					type: "post",
					data: $(form).serialize(),
					success: function(response) {
						$data = JSON.parse(JSON.stringify(response))
						$("#responseMess").html($data['html']);
						$('#book-appointment').trigger("reset");
					}
				});
			}
			else{
				$('#login_patient_modal').modal('show');
			}
            
        }

    });

	$(function () {
		$("#startdate").datepicker({
			dateFormat: "yy/mm/dd" ,
				numberOfMonths: 1,
				minDate:1,
		});
	});
</script>


@stop