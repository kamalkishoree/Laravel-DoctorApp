@extends('backend.layouts.default')
@section('content') 
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Appointment List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Appointment</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Appointment List</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card  card-box">
                    <div class="card-head">
                        <header></header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="table-scrollable">
                            <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Date Of Appointment </th>
                                        <th> Time </th>
                                        <!-- <th> To </th> -->
                                        <th> Mobile </th>
                                        <th> Consulting Doctor </th>
                                        <th>Injury/Condition</th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($data['appoitmentList']->count() > 0)
                                    @foreach($data['appoitmentList'] as $list)
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{ asset('/patientImage/'.$list['image']) }}" alt="">
                                        </td>
                                        <td>{{$list['patientName']}}</td>
                                        <td>{{$list['email']}}</td>
                                        <td class="center">{{date("d-F-Y",strtotime($list['booking_date']))}}</td>
                                        <td class="center">{{date("h:i",strtotime($list['time_slot']))}}</td>
                                        <!-- <td class="center">07:30</td> -->
                                        <td><a href="tel:444543564">
                                                {{$list['phone']}} </a></td>
                                        <td>{{'Dr.'.$list['doctorName']}}</td>
                                        <td>Fever</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs" data-toggle="modal" onclick="appointmentInfo({{$list['id']}})" data-target="#myModal">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                        @else
                                        <tr>
                                            <td colspan="9">No List found</td>
                                        </tr>
                                        @endif
                                    <!-- <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user1.jpg')}}" alt="">
                                        </td>
                                        <td>Pankaj Singh</td>
                                        <td>pankaj@gmail.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">07:45</td>
                                        <td class="center">08:00</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Sarah Smith</td>
                                        <td>Malaria</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user2.jpg')}}" alt="">
                                        </td>
                                        <td>Jenish shah</td>
                                        <td>shah@gmail.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:15</td>
                                        <td class="center">08:30</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Rajesh</td>
                                        <td>Fever</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user3.jpg')}}" alt="">
                                        </td>
                                        <td>Pankaj Singh</td>
                                        <td>pankaj@gmal.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:45</td>
                                        <td class="center">08:00</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Sarah Smith</td>
                                        <td>Malaria</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user2.jpg')}}" alt="">
                                        </td>
                                        <td>Jenish shah</td>
                                        <td>shah@gmail.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:15</td>
                                        <td class="center">08:30</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Rajesh</td>
                                        <td>Fever</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user3.jpg')}}" alt="">
                                        </td>
                                        <td>Pankaj Singh</td>
                                        <td>pankaj@gmal.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:45</td>
                                        <td class="center">08:00</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Sarah Smith</td>
                                        <td>Malaria</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user2.jpg')}}" alt="">
                                        </td>
                                        <td>Jenish shah</td>
                                        <td>shah@gmail.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:15</td>
                                        <td class="center">08:30</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Rajesh</td>
                                        <td>Fever</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user3.jpg')}}" alt="">
                                        </td>
                                        <td>Pankaj Singh</td>
                                        <td>pankaj@gmal.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:45</td>
                                        <td class="center">08:00</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Sarah Smith</td>
                                        <td>Malaria</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user2.jpg')}}" alt="">
                                        </td>
                                        <td>Jenish shah</td>
                                        <td>shah@gmail.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:15</td>
                                        <td class="center">08:30</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Rajesh</td>
                                        <td>Fever</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user3.jpg')}}" alt="">
                                        </td>
                                        <td>Pankaj Singh</td>
                                        <td>pankaj@gmal.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:45</td>
                                        <td class="center">08:00</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Sarah Smith</td>
                                        <td>Malaria</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user2.jpg')}}" alt="">
                                        </td>
                                        <td>Jenish shah</td>
                                        <td>shah@gmail.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:15</td>
                                        <td class="center">08:30</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Rajesh</td>
                                        <td>Fever</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user3.jpg')}}" alt="">
                                        </td>
                                        <td>Pankaj Singh</td>
                                        <td>pankaj@gmal.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:45</td>
                                        <td class="center">08:00</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Sarah Smith</td>
                                        <td>Malaria</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user2.jpg')}}" alt="">
                                        </td>
                                        <td>Jenish shah</td>
                                        <td>shah@gmail.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:15</td>
                                        <td class="center">08:30</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Rajesh</td>
                                        <td>Fever</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user3.jpg')}}" alt="">
                                        </td>
                                        <td>Pankaj Singh</td>
                                        <td>pankaj@gmal.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:45</td>
                                        <td class="center">08:00</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Sarah Smith</td>
                                        <td>Malaria</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user2.jpg')}}" alt="">
                                        </td>
                                        <td>Jenish shah</td>
                                        <td>shah@gmail.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:15</td>
                                        <td class="center">08:30</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Rajesh</td>
                                        <td>Fever</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user3.jpg')}}" alt="">
                                        </td>
                                        <td>Pankaj Singh</td>
                                        <td>pankaj@gmal.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:45</td>
                                        <td class="center">08:00</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Sarah Smith</td>
                                        <td>Malaria</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user2.jpg')}}" alt="">
                                        </td>
                                        <td>Jenish shah</td>
                                        <td>shah@gmail.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:15</td>
                                        <td class="center">08:30</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Rajesh</td>
                                        <td>Fever</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user3.jpg')}}" alt="">
                                        </td>
                                        <td>Pankaj Singh</td>
                                        <td>pankaj@gmal.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:45</td>
                                        <td class="center">08:00</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Sarah Smith</td>
                                        <td>Malaria</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user2.jpg')}}" alt="">
                                        </td>
                                        <td>Jenish shah</td>
                                        <td>shah@gmail.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:15</td>
                                        <td class="center">08:30</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Rajesh</td>
                                        <td>Fever</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user3.jpg')}}" alt="">
                                        </td>
                                        <td>Pankaj Singh</td>
                                        <td>pankaj@gmal.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:45</td>
                                        <td class="center">08:00</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Sarah Smith</td>
                                        <td>Malaria</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="{{asset('admin_assets/img/user/user2.jpg')}}" alt="">
                                        </td>
                                        <td>Jenish shah</td>
                                        <td>shah@gmail.com</td>
                                        <td class="center">12 Jan 2012</td>
                                        <td class="center">08:15</td>
                                        <td class="center">08:30</td>
                                        <td><a href="tel:444543564">
                                                444543564 </a></td>
                                        <td>Dr.Rajesh</td>
                                        <td>Fever</td>
                                        <td>
                                            <a href="" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal_doctor" id="myModal">
    <div class="modal-dialog" style="max-width: 750px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header border-0">
         
             <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
            
            <div class="modal-body" id="appointment-info">

            </div>

      </div>
    </div>
  </div>
  
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.doctor_status').click(function() {
            bootbox.confirm("Do you really want to delete record?", function(result) {
                alert("sdf");
            });
        });
    });

    function appointmentInfo(id) {
        $.ajax({
            url: "{{route('single-appointment-info')}}",
            type: "post",
            data: {
                id: id,
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                console.log(response);
                $data = JSON.parse(JSON.stringify(response))
                $("#appointment-info").html($data['html']);
            }
        });
    }
</script>
@stop