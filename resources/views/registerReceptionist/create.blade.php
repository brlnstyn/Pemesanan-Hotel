<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Register page</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
				
					<div class="cardx fat mt-4">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<form method="POST" class="my-login-validation" autocomplete="off" action="{{ route('registerReceptionist.store') }}">

								@if ( Session::get('success'))
									 <div class="alert alert-success">
										 {{ Session::get('success') }}
									 </div>
								@endif
								@if ( Session::get('error'))
									 <div class="alert alert-danger">
										 {{ Session::get('error') }}
									 </div>
								@endif
                                @csrf
								<div class="form-group">
									<label for="name">Name</label>
									<input id="name" type="text" class="form-control" name="name"  autofocus placeholder="Nama" value="{{ old('name') }}">
									<span class="text-danger">@error('name'){{ $message }}@enderror</span>
								</div>

								<div class="form-group">
									<label for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email"  placeholder="Email" value="{{ old('email') }}">
									<span class="text-danger">@error('email'){{ $message }}@enderror</span>
								</div>
                    
								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password"  data-eye placeholder="Password">
									<span class="text-danger">@error('password'){{ $message }}@enderror</span>
								</div>
                                <div class="form-group">
									<label for="password-confirm">Confirm Password</label>
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required data-eye placeholder="Confirm Password">
									<span class="text-danger">@error('password_confirmation'){{ $message }}@enderror</span>
                                    
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
                                <div class="mt-4 text-center">
									<a href="{{route('rooms.index')}}">Back</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <script src="jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>