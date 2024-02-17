<!--  patient  login Modal are start -->
<div class="modal fade" id="login_patient_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="padding:2px !important;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dloginModalLabel"><b>Login As Patient</b></h5>
                <button type="button" class="close butnn" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="modal-span">×</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                        <div id="presponseMess"></div>
                            <form method="post" id="patientLogin">
                                @csrf
                                <div class="form-group">
                                    <label class="form-check-label" for="pemail">Enter your Email</label>
                                    <input type="text" name="email" class="form-control" id="pemail" aria-describedby="text" placeholder="enter your mobile number">
                                </div>
                                <div class="form-group">
                                <label class="form-check-label" for="ppassword">Enter your Password</label>
                                    <input type="password" name="password" class="form-control" id="ppassword" placeholder="Password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember
                                        Password</label>
                                    <small class="float-right">Forget Password?</small>
                                </div>
                                <button type="submit" class="btn btn-info">Login<i class="fa fa-long-arrow-right ml-2 text-light" aria-hidden="true"></i></button>
                            </form>
                            <p class="pt-3">Don't have an account <span><b><a href="{{route('patient-register')}}" >Register</a></b></span>?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--  patient  login Modal are end -->



<!-- doctor  login modal are start -->

<!-- Modal -->
<div class="modal fade" id="doctor_login_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">login as Doctor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="dresponseMess"></div>
                            <form method="post" id="doctorLogin">
                                @csrf
                                <div class="form-group">
                                <label class="form-check-label" for="doctor_email">Enter your Email</label>
                                    <input type="text" name="email" class="form-control" id="email" aria-describedby="text" placeholder="enter your mobile number">
                                </div>
                                <div class="form-group">
                                <label class="form-check-label" for="dotor_password">Enter your Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember
                                        Password</label>
                                    <small class="float-right">Forget Password?</small>
                                </div>
                                <button type="submit" class="btn btn-info">Login<i class="fa fa-long-arrow-right ml-2 text-light" aria-hidden="true"></i></button>
                            </form>
                            <p class="pt-3">Don't have an account <span><b><a href="{{route('doctor-register')}}">Register</a></b></span>?</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- doctor login modal are end -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
<script>
    var firebaseConfig = {
        apiKey: "AIzaSyBnRezhTmooVWe_AYN-ri9gj27SIxKW214",
        authDomain: "takecaremed-b144a.firebaseapp.com",
        databaseURL: "https://takecaremed-b144a.firebasedatabase.app/",
        projectId: "takecaremed-b144a",
        storageBucket: "takecaremed-b144a.appspot.com",
        messagingSenderId: "855891454816",
        appId: "1:855891454816:web:488de02ee3f615c84c8c05",
        measurementId: "G-K2RY140CNC"
    };
    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();


     // patient login form
     $('#patientLogin').validate({ // initialize the plugin
        rules: {
            email: {
                required: true,
                email:true
            },
            password: {
                required: true,
            }
        },
        messages: {
            email: {
                "required":"Please Enter your email address!",
                "email" : "Please enter valid email address"
            },
            password: "Please Enter your password!"
        },
        submitHandler: function(form) {
            var email = $('#pemail').val();
            var password = $('#ppassword').val();
            messaging
            .requestPermission()
            .then(function () {
                return messaging.getToken()
            })
            .then(function (response) {
                $.ajax({
                    url: "{{route('patient-login')}}",
                    type: "post",
                    data: {email:email,password:password,device_key:response,_token: "{{ csrf_token() }}"},
                    success: function(response) {
                    $data = JSON.parse(JSON.stringify(response))
                    if($data['success'] == true){
                        $("#presponseMess").html($data['html']);
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                    }
                    else{
                        $("#presponseMess").html($data['html']);
                    }
                    }
                });
            }).catch(function (error) {
                alert(error);
                $("#presponseMess").html("<div class='alert alert-danger' role='alert'>Token Issue, Please try after some time.</div>");
            });
        }

    });


     // doctor login form
     $('#doctorLogin').validate({ // initialize the plugin
        rules: {
            email: {
                required: true,
                email:true
            },
            password: {
                required: true,
            }
        },
        messages: {
            email: {
                "required":"Please Enter your email address!",
                "email" : "Please enter valid email address"
            },
            password: "Please Enter your password!"
        },
        submitHandler: function(form) {
            var email = $('#email').val();
            var password = $('#password').val();
            messaging
            .requestPermission()
            .then(function () {
                return messaging.getToken()
            })
            .then(function (response) {
                $.ajax({
                    url: "{{route('doctor-login')}}",
                    type: "post",
                    data: {email:email,password:password,device_key:response,_token: "{{ csrf_token() }}"},
                    success: function(response) {
                    $data = JSON.parse(JSON.stringify(response))
                        if($data['success'] == true){
                            $("#dresponseMess").html($data['html']);
                                setTimeout(function() {
                                    location.reload();
                                }, 2000);
                        }
                        else{
                            $("#dresponseMess").html($data['html']);
                        }
                    }
                });

            }).catch(function (error) {
                $("#dresponseMess").html("<div class='alert alert-danger' role='alert'>Token Issue, Please try after some time.</div>");
            });

            
        }

    });
</script>


