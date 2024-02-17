@extends('frontend.layouts.default')
@section('content')
<section class="page-title-area page-title-bg3">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Doctor</h2>
                    <ul>
                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li>Doctor</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="doctor-area py-4">
    <div class="container">
        <div class="row pb-5">
            <div class="col-md-12">
                <h6 style="color: #4ac6e8;"><b>Find Your Specialist..</b></h6>
                <select class="form-control" id="specialistId">
                    @foreach($data['specialist'] as $specialist)
                        <option {{$data['specialistId'] == $specialist['id'] ?"selected":""}} value="{{$specialist['id']}}">{{$specialist['specialist']}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="section-title">
            <span>Doctors</span>
            <h2>Meet Our Qualified Doctors</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row" id="searchDoctor">
            @if($data['doctorList']->count() > 0)
                @foreach($data['doctorList'] as $doctorList)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-doctor-box">
                            <div class="doctor-image">
                                <img src="{{ asset('/doctorImage/'.$doctorList['image']) }}" alt="image">
                                <a href="{{route('doctor-information',Crypt::encryptString($doctorList['doctor_id']))}}" class="details-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="doctor-content">
                                <h3><a href="#">{{ $doctorList['name']}}</a></h3>
                                <span>{{ $doctorList['specialist']}}</span>
                                <ul class="social">
                                    <li><a target="_blank" href="{{ $doctorList['facebook_url']? $doctorList['facebook_url']:''}}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a target="_blank" href="{{ $doctorList['twitter_url']? $doctorList['twitter_url']:''}}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="{{ $doctorList['linkedin_url']? $doctorList['linkedin_url']:''}}"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a target="_blank" href="{{ $doctorList['instagram_url']? $doctorList['instagram_url']:''}}"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class='alert alert-danger' role='alert'>No List found!</div>
               
            @endif
        </div>
    </div>
    <div class="shape3"><img src="{{asset('web_assets/assets/img/shape/3.png')}}" class="wow fadeInLeft" alt="image"></div>
</section>

<script>
    $("#specialistId").change(function(){
        var id =  $("#specialistId").val();
        $.ajax({
            url: "{{route('search-with-specialist')}}",
            type: "post",
            data:{id:id,_token: "{{ csrf_token() }}"},
            success: function(response) {
                $data = JSON.parse(JSON.stringify(response))
                $("#searchDoctor").html($data['html']);
            }
        });
    });
</script>
@stop