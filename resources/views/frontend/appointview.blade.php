@extends('frontend.layouts.default')
@section('content')
<style>
    .patnt_det {
        border: 1px solid gray;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 1px 10px 25px grey;
    }

    .hed_det {
        text-align: center;
        padding: 20px;
    }
</style>
<section class="detail p-5">
    <div class="container">
        <div class="patnt_det">
            <div class="row">
                <div class="col-xxl-12">
                    <h3 class="hed_det"><b>BOOKING ID:</b>12457898653212</h3>
                </div>
            </div>
            <div class="row img_det">
                <div class="col-md-4">
               
                    <img src="https://omninos.me/sypher/assets/images/meta/img_01.png" class="w-30">
                </div>
                <div class="col-md-8">
                    <div class="right_nme">
                        <div class="row">
                            <div class="col-md-3">Patient Name:</div>
                            <div class="col-md-9">Chirag</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Age:</div>
                            <div class="col-md-9">22</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Gender:</div>
                            <div class="col-md-9">Male</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Contact info:</div>
                            <div class="col-md-9">+919312312315</div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <h4 class="hed">Booking Detail</h4>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"><b>Booking Date:</b></div>
                        <div class="col-md-6"><span>25/8/2021</span></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"><b>Slot:</b></div>
                        <div class="col-md-6"><span>Morning</span></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"><b>Address:</b></div>
                        <div class="col-md-6"><span>Lorem Ipsum is simply dummy text of the printing</span></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"><b>Zipcode:</b></div>
                        <div class="col-md-6"><span>121003</span></div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <h4 class="hed">Diagnosis</h4>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"><b>Diagnosis Name:</b></div>
                        <div class="col-md-6"><span>Diverticulitis</span></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"><b>Onset Date:</b></div>
                        <div class="col-md-6"><span>25/08/2021</span></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"><b>Date Reported:</b></div>
                        <div class="col-md-6"><span>25/08/2021</span></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"><b>Status:</b></div>
                        <div class="col-md-6"><span>pending</span></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
@stop