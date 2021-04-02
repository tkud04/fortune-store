<?php
$title = "Not Found";
$ph = false;
$pcClass = "";
$plugins = [];
$signals = ['okays' => []];
$pe = ['phone' => "",'email' => ""];
$user = null;
if(Auth::check()) $user = Auth::user();
?>


<?php $__env->startSection('title',"Not Found"); ?>

<?php $__env->startSection('content'); ?>
<!-- 404 Page -->
		<div id="page_404_area">
			<div class="container">
				<div class="row text-left">
					<div class="col-sm-6">
						<div class="page_404_content">
							<h1>404</h1>
							<h3>We searched very hard however the page you requested cannot be found.</h3>
						</div>
						<div class="404_btn">
							<a href="<?php echo e(url('/')); ?>" class="btn border-btn"><i class="fa fa-arrow-circle-o-left"></i> Back To Home</a>
						</div>
					</div>
					
					<div class="col-sm-6 text-center">
						<img src="img/404.png" class="img-responsive" width="350" alt="">
					</div>
				</div>
			</div>
		</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\fortune-store\resources\views/errors/404.blade.php ENDPATH**/ ?>