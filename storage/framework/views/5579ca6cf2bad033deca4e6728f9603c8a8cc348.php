<?php
$title = "Register";
$ph = true;
$no_header = true;
$pcClass = "";
?>


<?php $__env->startSection('content'); ?>
				<div class="container pt-1">
					<form action="<?php echo e(url('register')); ?>" method="post" id="register-form" class="form mt-5">
					<?php echo csrf_field(); ?>

					
					<p class="mb-2">
						Existing user? <a href="<?php echo e(url('login')); ?>" class="text-secondary">Sign in</a>
					</p>
					
									<div class="row">
										<div class="col-sm-6">
											<label>First Name <span class="req">*</span></label>
											<input type="text" class="form-control" name="fname" id="register-fname" required="">
										</div>
										<div class="col-sm-6">
											<label>Last Name <span class="req">*</span></label>
											<input type="text" class="form-control" name="lname" id="register-lname" required="">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
									       <label>Email address <span class="req">*</span></label>
									      <input type="email" class="form-control" name="email" id="register-email" required="">
			                            </div>
										<div class="col-sm-6">
									       <label>Phone number <span class="req">*</span></label>
									      <input type="number" class="form-control" name="phone" id="register-phone" required="">
			                            </div>
									</div>
									<label>Password <span class="req">*</span></label>
									<input type="password" class="form-control" name="pass" id="register-pass">

									<label>Confirm password <span class="req">*</span></label>
									<input type="password" class="form-control" name="pass_confirmation" id="register-pass-2">

									<button id="register-submit" class="btn btn-primary btn-reveal-right">SUNMIT <i class="d-icon-arrow-right"></i></button>
								</form>
				</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\fortune-store\resources\views/register.blade.php ENDPATH**/ ?>