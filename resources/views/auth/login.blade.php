
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="backend/../images/favicon.ico">

    <title>Log in </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="backend/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="backend/css/style.css">
	<link rel="stylesheet" href="backend/css/skin_color.css">	

</head>
<body class="hold-transition theme-primary bg-gradient-primary">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="p-10 content-top-agile">
							<h2 class="text-white">Get started with Us</h2>
							<p class="text-white-50">Sign in to start your session</p>							
						</div>
						<div class="p-30 rounded30 box-shadowed b-2 b-dashed">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

								<div class="form-group">
									<div class="mb-3 input-group">
										<div class="input-group-prepend">
											<span class="text-white bg-transparent input-group-text"><i class="ti-user"></i></span>
										</div>
										<input type="email" id="email" name="email" class="text-white bg-transparent form-control pl-15 plc-white" placeholder="Email">
									</div>
								</div>


								<div class="form-group">
									<div class="mb-3 input-group">
										<div class="input-group-prepend">
											<span class="text-white bg-transparent input-group-text"><i class="ti-lock"></i></span>
										</div>
										<input type="password"  id="password" name="password" class="text-white bg-transparent form-control pl-15 plc-white" placeholder="Password">
									</div>
								</div>
								  <div class="row">
									<div class="col-6">
									  <div class="text-white checkbox">
										<input type="checkbox" id="basic_checkbox_1" >
										<label for="basic_checkbox_1">Remember Me</label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-6">
									 <div class="text-right fog-pwd">
										<a href="{{route('password.request')}}" class="text-white hover-info"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
									  </div>
									</div>
									<!-- /.col -->
									<div class="text-center col-12">
									  <button type="submit" class="mt-10 btn btn-info btn-rounded">SIGN IN</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>														

							<div class="text-center text-white">
							  <p class="mt-20">- Sign With -</p>
							  <p class="mb-20 gap-items-2">
								  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-facebook"></i></a>
								  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-twitter"></i></a>
								  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-google-plus"></i></a>
								  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-instagram"></i></a>
								</p>	
							</div>
							
							<div class="text-center">
								<p class="mb-0 text-white mt-15">Don't have an account? <a href="{{route('register')}}" class="ml-5 text-white">Sign Up</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="backend/js/vendors.min.js"></script>
    <script src="backend/../assets/icons/feather-icons/feather.min.js"></script>	

</body>
</html>
