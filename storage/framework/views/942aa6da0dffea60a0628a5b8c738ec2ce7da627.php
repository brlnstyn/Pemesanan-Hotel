<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Forgot password</title>
	<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/my-login.css')); ?>">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">

					<div class="cardx fat">
						<div class="card-body">
							<h4 class="card-title">Forgot Password</h4>
							<form method="POST" class="my-login-validation" novalidate="" action="<?php echo e(route('password.email')); ?>">
                                <?php echo csrf_field(); ?>

                                <?php if(session('status')): ?>
                                    <div class="alert alert-ssuccess">
                                        <?php echo e(session('status')); ?>

                                    </div>
                                <?php endif; ?>
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Enter your email">
                                    <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Send Password Link
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2021 &mdash; Your Company
					</div>
				</div>
			</div>
		</div>
	</section>

	
</body>
</html><?php /**PATH C:\xampp\htdocs\LARAVEL\PemesananHotel\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>