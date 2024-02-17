@extends('frontend.layouts.default')
@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
    button.btn-close {
        background: #059ee6;
        border-radius: 50%;
        font-size: 17px;
        line-height: 19px;
        color: #fff;
    }
    .modal-dialog {
        line-height: 35px;
    }
</style>
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3>Appointment/Booking</h3>
            </div>
        </div>
    </div>
</section>
<section class="appont_tab">
    <div class="container">
        <div class="top_heading">
            <h2>Your Appointments Status</h2>
        </div>
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
        <div class="container my-4">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item new-item-3" role="presentation">
                            <a class="nav-link new-link-3 active text-dark" id="pills-today-tab" onclick="appointment_booking('Today')" data-toggle="pill" href="#pills-today" role="tab" aria-controls="pills-today" aria-selected="true">Today Appointments</a>
                        </li>
                        <li class="nav-item new-item-3" role="presentation">
                            <a class="nav-link new-link-3 text-dark" id="pills-approved-tab" onclick="appointment_booking('Approved')" data-toggle="pill" href="#pills-approved" role="tab" aria-controls="pills-approved" aria-selected="true">Approved Appointments</a>
                        </li>
                        <li class="nav-item new-item-3" role="presentation">
                            <a class="nav-link new-link-3 text-dark" id="pills-pending-tab" onclick="appointment_booking('Pending')" data-toggle="pill" href="#pills-pending" role="tab" aria-controls="pills-pending" aria-selected="false">Pending
                                Appointments</a>
                        </li>

                        <li class="nav-item new-item-3" role="presentation">
                            <a class="nav-link new-link-3 text-dark" id="pills-rejected-tab" onclick="appointment_booking('Rejected')" data-toggle="pill" href="#pills-rejected" role="tab" aria-controls="pills-rejected" aria-selected="false">Rejected
                                Appointments</a>
                        </li>
                        <li class="nav-item new-item-3" role="presentation">
                            <a class="nav-link new-link-3 text-dark" id="pills-confirmed-tab" onclick="appointment_booking('Completed')" data-toggle="pill" href="#pills-confirmed" role="tab" aria-controls="pills-confirmed" aria-selected="false">Completed
                                Appointments</a>
                        </li>
                    </ul>

                    <!-- data navs section are start -->

                    <div class="tab-content" id="pills-tabContent">

                        <!-- --------------------approved-------------------- -->

                        <div class="tab-pane fade in show active" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
                            <div class="row mt-2" id="booking_Today">
                                @if($data['booking']->count() > 0)
                                @foreach($data['booking'] as $info)
                                <div class="col-md-6 mb-5">
                                    <div class="card my-section-card-nek">
                                        <div class="card-header">
                                            {{$info['name']}} ({{$info['phone']}})
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{asset('patientImage/'.$info['image'])}}">
                                                </div>
                                                <div class="col-md-8">
                                                    <blockquote class="blockquote mb-0">
                                                        <small class="font-weight-normal mb-2">Order Id: {{$info['order_id']}}</small><br>
                                                        <small class="text-muted mb-2">Date :<span class="float-right">{{$info['booking_date']}}</span></small><br>
                                                        <small class="mb-2">Disease : <span class="float-right">{{$info['specialist']}}</span></small>
                                                        <footer class="blockquote-footer">Time Slot : <cite title="Source Title" class="float-right text-danger"></cite> {{$info['time_slot']}}</footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted"></small>
                                            <div class="det_cl">
                                                <a href="{{route('doctor-appointment-video',Crypt::encryptString($info['id']))}}"><i class="fa fa-video"></i></a>
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="" data-bs-toggle="modal" onclick="appointmentDetails({{$info['id']}})" data-bs-target="#profile"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <div class="col-md-6">
                                    <div class='alert alert-danger' role='alert'>No Record Found</div>
                                </div>
                                @endif
                            </div>
                        </div>


                        <div class="tab-pane fade in" id="pills-approved" role="tabpanel" aria-labelledby="pills-approved-tab">
                            <div class="row mt-2" id="booking_Approved">
                            </div>
                        </div>

                        <!-- ------------------pending--------------------- -->

                        <div class="tab-pane fade in" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab">
                            <div class="row mt-2" id="booking_Pending">

                            </div>
                        </div>

                        <!-- -----------------Rejected--------------- -->

                        <div class="tab-pane fade in" id="pills-rejected" role="tabpanel" aria-labelledby="pills-rejected-tab">
                            <div class="row mt-2" id="booking_Rejected">
                            </div>
                        </div>
                        <!-- -----------------Completed--------------- -->
                        <div class="tab-pane fade in " id="pills-confirmed" role="tabpanel" aria-labelledby="pills-confirmed-tab">
                            <div class="row mt-2" id="booking_Completed">
                            </div>


                        </div>
                    </div>

                    <!-- data navs section are end -->
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:1000px;">
        <div class="modal-content p-3">
            <div class="brder border border-3 border-dark">
                <div class="modal-header" style="border:none;">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body p-0">
                    <section class="detail p-2" id="appointment-info-div">
                        

                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).on('change','#update-appoinitment-status',function(){
            var status = this.value;
            var id = $('#appointment_id').val();
            swal({
                title: "Are you sure ??",
                text: "if you want to change the status, then click on OK button", 
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "{{route('update-appointment-status')}}",
                        type: "post",
                        data: {
                            status:status,
                            id: id,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            console.log(response);
                            $data = JSON.parse(JSON.stringify(response))
                            if($data['success'] == true){
                                swal("Status updated successfully", {
                                    icon: "success",
                                });
                                setTimeout(function() {
                                    location.reload();
                                }, 3000);
                            }
                            else{
                                swal("OOPS!", "Please try after some time!", "error")
                            }
                        }
                    });
                } else {
                    return false;
                }
            });
        });
        function appointmentDetails(id){
            $.ajax({
                url: "{{route('appointment-info')}}",
                type: "post",
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    console.log(response);
                    $data = JSON.parse(JSON.stringify(response))
                    $("#appointment-info-div").html($data['html']);
                }
            });
        }

        function appointment_booking(type) {
            $.ajax({
                url: "{{route('search-appointment')}}",
                type: "post",
                data: {
                    type: type,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    $data = JSON.parse(JSON.stringify(response))
                    $("#booking_" + type).html($data['html']);
                }
            });
        }
    </script>
    @stop