<!DOCTYPE html>
<html lang="en">
    <head>
        @include('backend.includes.head')
    </head>
    <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
            @include('backend.includes.header')
        <!-- end header -->
        
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
                @include('backend.includes.sidebar')
            <!-- end sidebar menu -->
            <!-- start page content -->
                <div class="page-content-wrapper">
                    @yield('content')
                </div>
            <!-- end page content -->
        </div>
            <!-- start footer -->
                @include('backend.includes.footer')
            <!-- end footer -->
    </div>
     
    <!-- start js include path -->
    
    <script src="{{asset('admin_assets/plugins/jquery/jquery.min.js')}}" ></script>
	<script src="{{asset('admin_assets/plugins/popper/popper.min.js')}}" ></script>
    <script src="{{asset('admin_assets/plugins/jquery-blockui/jquery.blockui.min.js')}}" ></script>
	<script src="{{asset('admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('admin_assets/plugins/bootstrap/js/bootstrap.min.js')}}" ></script>
    <!-- calendar -->
    <script src="{{asset('admin_assets/plugins/moment/moment.min.js')}}" ></script>
    <script src="{{asset('admin_assets/plugins/fullcalendar/fullcalendar.min.js')}}" ></script>
    <script src="{{asset('admin_assets/js/pages/calendar/calendar.min.js')}}" ></script>
    <!-- counterup -->
    <script src="{{asset('admin_assets/plugins/counterup/jquery.waypoints.min.js')}}" ></script>
    <script src="{{asset('admin_assets/plugins/counterup/jquery.counterup.min.js')}}" ></script>
    <!-- Common js-->
	<script src="{{asset('admin_assets/js/app.js')}}" ></script>
    <script src="{{asset('admin_assets/js/layout.js')}}" ></script>
    <script src="{{asset('admin_assets/js/theme-color.js')}}" ></script>
    
    <!-- material -->
    <script src="{{asset('admin_assets/plugins/material/material.min.js')}}"></script>
    <!-- morris chart -->
    
    <script src="{{asset('admin_assets/plugins/morris/morris.min.js')}}" ></script>
    <script src="{{asset('admin_assets/plugins/morris/raphael-min.js')}}" ></script>
    <script src="{{asset('admin_assets/js/pages/chart/morris/morris-home-data.js')}}" ></script>

    <script src="{{asset('admin_assets/plugins/datatables/jquery.dataTables.min.js')}}" ></script>
 	<script src="{{asset('admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js')}}" ></script>
 	<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js" ></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js" ></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js" ></script>
 	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js" ></script>
    <script src="{{asset('admin_assets/js/pages/table/table_data.js')}}" ></script>

    
    <!-- end js include path -->
  </body>

</html>