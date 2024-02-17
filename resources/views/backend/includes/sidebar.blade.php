<!-- start sidebar menu -->
<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{asset('doctorImage/')}}/{{Auth()->user()->image}}" class="img-circle user-img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p> {{Auth()->user()->name}}</p>
                            <small>{{Auth()->user()->user_type}}</small>
                        </div>
                    </div>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'dashboard'? 'active open': '' }}">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  {{ Route::currentRouteName() == 'dashboard'? 'active open': '' }}">
                            <a href="{{route('dashboard')}}" class="nav-link ">
                                <span class="title">Overview</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'view-appointment'? 'active open': '' }} ">
                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">assignment</i>
                        <span class="title">Appointment</span><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <!-- <li class="nav-item  ">
                            <a href="{{route('doctor-schedule')}}" class="nav-link "> <span class="title">Doctor Schedule</span>
                            </a>
                        </li> -->
                        <li class="nav-item {{ Route::currentRouteName() == 'view-appointment'? 'active open': '' }} ">
                            <a href="{{route('view-appointment')}}" class="nav-link "> <span class="title">View All Appointment</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  {{ Route::currentRouteName() == 'doctor-list'? 'active open': '' }}">
                    <a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
                        <span class="title">Doctors</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  {{ Route::currentRouteName() == 'doctor-list'? 'active open': '' }}">
                            <a href="{{route('doctor-list')}}" class="nav-link "> <span class="title">Doctor List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  {{ Route::currentRouteName() == 'patient-list'? 'active open': '' }}">
                    <a href="#" class="nav-link nav-toggle"> <i class="material-icons">accessible</i>
                        <span class="title">Patients</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  {{ Route::currentRouteName() == 'patient-list'? 'active open': '' }}">
                            <a href="{{route('patient-list')}}" class="nav-link "> <span class="title">Patients List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  {{ Route::currentRouteName() == 'speciality-list' || Route::currentRouteName() == 'speciality-create' ||Route::currentRouteName() == 'speciality-edit'? 'active open': '' }}">
                    <a href="#" class="nav-link nav-toggle"> <i class="material-icons">accessible</i>
                        <span class="title">Speciality</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  {{ Route::currentRouteName() == 'speciality-list'? 'active open': '' }}">
                            <a href="{{route('speciality-list')}}" class="nav-link "> <span class="title">Speciality List</span>
                            </a>
                        </li>
                        <li class="nav-item  {{ Route::currentRouteName() == 'speciality-create'? 'active open': '' }}">
                            <a href="{{route('speciality-create')}}" class="nav-link "> <span class="title">Add Speciality</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
