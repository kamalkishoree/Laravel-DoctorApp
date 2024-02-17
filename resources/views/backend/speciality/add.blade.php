@extends('backend.layouts.default')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Edit Speciality</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('speciality-list')}}">Speciality</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Edit Speciality</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <!-- <div class="card-head">
                        <header>Basic Information</header>
                            <button id = "panel-button" 
                                class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
                                data-upgraded = ",MaterialButton">
                                <i class = "material-icons">more_vert</i>
                            </button>
                            <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                data-mdl-for = "panel-button">
                                <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                                <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                                <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
                            </ul>
                    </div> -->
                    <div class="card-body" id="bar-parent">
                        <form action="{{route('speciality-store')}}" method="post" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                            <div class="form-group row">
                                    <label class="control-label col-md-3">Speciality
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="specialist" data-required="1" placeholder="enter speciality" class="form-control input-height" /> </div><br>
                                        @error('specialist')
                                            <div class="error">{{$message}}</div>
                                        @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Image
                                    </label>
                                    <div class="compose-editor">
                                        <input type="file"name="image" class="form control"><br><br>
                                    </div>
                                </div>
                                <div class="form-actions">
                                <div class="row">
                                    <div class="offset-md-3 col-md-9">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop