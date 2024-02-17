@extends('backend.layouts.default')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Patient List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Patient</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Patient List</li>
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
                                                            <th> Mobile </th>
                                                            <th> Email </th>
                                                            <th> Symptom </th>
                                                            <th> Allergy </th>
                                                            <th> Address </th>
                                                            <th>Joining Date</th>
                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if($data['userList']->count() > 0)
                                                        @foreach($data['userList'] as $list)
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="{{ asset('/patientImage/'.$list['image']) }}" alt="">
                                                            </td>
                                                            <td>{{$list['name']}}</td>
                                                            <td class="left">{{$list['phone']}}</td>
                                                            <td class="left">{{$list['email']}}</td>
                                                            <td class="left">{{$list['symptom']}}</td>
                                                            <td class="left">{{$list['allergy']}}</td>
                                                            <td class="left">{{$list['address']}}</td>
                                                            <td class="left">22 Feb 2000</td>
                                                            <td class="center">
                                                                <a href="" class="btn btn-tbl-edit btn-xs">
                                                                    <i class="fa fa-pencil"></i>
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
@stop