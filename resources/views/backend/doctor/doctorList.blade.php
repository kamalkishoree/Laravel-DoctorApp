@extends('backend.layouts.default')
@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
    body {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    }

    .emp-profile {
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }

    .profile-img {
        text-align: center;
    }

    .profile-img img {
        width: 70%;
        height: 100%;
    }

    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }

    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }

    .profile-head h5 {
        color: #333;
    }

    .profile-head h6 {
        color: #0062cc;
    }

    .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }

    .proile-rating {
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }

    .proile-rating span {
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }

    .profile-head .nav-tabs {
        margin-bottom: 5%;
    }

    .profile-head .nav-tabs .nav-link {
        font-weight: 600;
        border: none;
    }

    .profile-head .nav-tabs .nav-link.active {
        border: none;
        border-bottom: 2px solid #0062cc;
    }

    .profile-work {
        padding: 14%;
        margin-top: -15%;
    }

    .profile-work p {
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }

    .profile-work a {
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }

    .profile-work ul {
        list-style: none;
    }

    .profile-tab label {
        font-weight: 600;
    }

    .profile-tab p {
        font-weight: 600;
        color: #0062cc;
    }
</style>

<style>
  .img_box {
    object-fit: cover;
    width: 50%;
    margin: auto;
    padding: 2px 15px;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 1px 5px 13px;
}

  .modal_doctor {
    position: fixed;
    top: 0px;
    left: 0%;
    z-index: 1055;
    display: none;
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    outline: 0;
  }

  .bottom-bar {
    display: flex;
    align-items: center;
  }
 .icons i{
    color: #fff;
    padding: 6px 9px;
    border-radius: 50%;
    width: auto;
 }
 ul.d-flex.icons.list-unstyled {
    justify-content: space-around;
}
  i.fa.fa-facebook {
    background: #0c7dda;
    
  }
  i.fa.fa-instagram {
    background: #ed2c4e;
    
}
i.fa.fa-linkedin {
    background: blue;
}
i.fa.fa-twitter {
    background: #49b7e3;
}
.row.spaec {
    line-height: 45px;
}
.Abt_content {
    line-height: 30px;
}
</style>
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Doctor List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Doctors</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Doctor List</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line">
                    <div class="tab-content">
                        <div class="tab-pane active fontawesome-demo" id="tab1">
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
                                                <table class="table table-hover table-checkable order-column full-width" id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th> Name </th>
                                                            <th> License ID </th>
                                                            <th> Specialization </th>
                                                            <th> Mobile </th>
                                                            <th> Email </th>
                                                            <!-- <th> Address </th> -->
                                                            <th> Status</th>
                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if($data['userList']->count() > 0)
                                                        @foreach($data['userList'] as $list)
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="{{ asset('/doctorImage/'.$list['image']) }}" alt="">
                                                            </td>
                                                            <td>{{$list['name']}}</td>
                                                            <td class="left">{{$list['licence_id']}}</td>
                                                            <td class="left">{{$list['specialist']}}</td>
                                                            <td class="left">{{$list['phone']}}</td>
                                                            <td class="left">{{$list['email']}}</td>
                                                            <!-- <td class="left">{{$list['address']}}</td> -->
                                                            <td class="left">
                                                                @if($list['status_verify']=='Pending')
                                                                <span class="label label-sm label-warning">{{$list['status_verify']}}</span>
                                                                @elseif($list['status_verify']=='Approved')
                                                                <span class="label label-sm label-success">{{$list['status_verify']}}</span>
                                                                @elseif($list['status_verify']=='Rejected')
                                                                <span class="label label-sm label-danger">{{$list['status_verify']}}</span>
                                                                @endif
                                                                <!-- <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-9">
                                                                    <input type="checkbox" id="switch-9" class="mdl-switch__input doctor_status">
                                                                </label> -->
                                                            </td>
                                                            <td class="center">
                                                                <a href="" class="btn btn-tbl-edit btn-xs" data-toggle="modal" onclick="doctorInfo({{$list['id']}})" data-target="#myModal">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                                <a class="btn btn-tbl-delete btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        <tr>
                                                            <td colspan="9">No List found</td>
                                                        </tr>
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<div class="container">
  
  <!-- Button to Open the Modal -->
  

  <!-- The Modal -->
  <div class="modal modal_doctor" id="myModal">
    <div class="modal-dialog" style="max-width: 750px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header border-0">
         
             <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
            
            <div class="modal-body" id="doctor-info">

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

    function doctorInfo(id) {
        $.ajax({
            url: "{{route('single-doctor-info')}}",
            type: "post",
            data: {
                id: id,
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                console.log(response);
                $data = JSON.parse(JSON.stringify(response))
                $("#doctor-info").html($data['html']);
            }
        });
    }
</script>
    <script>
        
        $(document).on('change','#update-doctor-status',function(){
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
                        url: "{{route('update-doctor-status')}}",
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
        
    </script>
@stop