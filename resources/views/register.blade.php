<!doctype html>
<html lang="en">
  <head>
  	<title>MyPerspus Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('login-form-20')}}/css/style.css">

	</head>
	<body>
		<header class="masthead">
		<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Register to MyPerpus</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Create an account</h3>
		      	<form action="/register/create" method="POST" class="signin-form">
					  @csrf 
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="username" placeholder="Username" required>
		      		</div>

	            <div class="form-group">
	              <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
                <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Verifikasi Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Register</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="text">Sudah punya akun? 
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Login</a>
								</div>
	          
	</section>

		</header>
	
	<script src="{{asset('login-form-20')}}/js/jquery.min.js"></script>
  <script src="{{asset('login-form-20')}}/js/popper.js"></script>
  <script src="{{asset('login-form-20')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('login-form-20')}}/js/main.js"></script>

	</body>
</html>

