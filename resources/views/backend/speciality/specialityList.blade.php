@extends('backend.layouts.default')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Speciality List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Speciality</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Speciality List</li>
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
                                            <div class="table-scrollable">
                                                <table class="table table-hover table-checkable order-column full-width" id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th> Titlte </th>
                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if($data['specialist']->count() > 0)
                                                            @foreach($data['specialist'] as $list)
                                                                <tr class="odd gradeX">
                                                                    <td class="patient-img">
                                                                        <img src="{{asset('/specialistImage/'.$list['image'])}}" alt="">
                                                                    </td>
                                                                    <td>{{$list['specialist']}}</td>
                                                                    
                                                                    <td class="center">
                                                                        <form action="{{route('specialist-delete',$list['id'])}}" method="post">
                                                                        <a href="{{route('speciality-edit',$list['id'])}}" class="btn btn-tbl-edit btn-xs">
                                                                            <i class="fa fa-pencil"></i>
                                                                        </a>
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="btn btn-primery"><i class="fa fa-trash-o "></i> </button>
                                                                            
                                                                        </form>

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