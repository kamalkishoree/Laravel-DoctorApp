<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Takecare Med Admin Template" />
    <meta name="author" content="Takecare Med" />
    <title>Takecare Med | Online doctor patient appointment booking</title>
     <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="{{asset('admin_assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
	<!-- <link rel="stylesheet" href="../assets/plugins/iconic/css/material-design-iconic-font.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- style -->
    <link rel="stylesheet" href="{{asset('admin_assets/css/pages/extra_pages.css')}}">
	<!-- favicon -->
    <link rel="shortcut icon" href="https://radixtouch.com/templates/admin/sunray/source/assets/img/favicon.ico" /> 
</head>
<body>
    <div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
                <form autocomplete="off" class="login100-form validate-form" action="{{route('admin-login')}}" method="post">
                    @csrf
					<span class="login100-form-logo">
						<img alt="" src="{{asset('admin_assets/img/hospital.png')}}">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input autocomplete="false" class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="text-center p-t-30">
						<a class="txt1" href="forgot_password.html">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
    <!-- start js include path -->
     <script src="{{asset('admin_assets//plugins/jquery/jquery.min.js')}}" ></script>
    <!-- bootstrap -->
    <script src="{{asset('admin_assets/plugins/bootstrap/js/bootstrap.min.js')}}" ></script>
    <script src="{{asset('admin_assets/js/pages/extra_pages/extra_pages.js')}}"></script>
    <!-- end js include path -->
</body>
</html>