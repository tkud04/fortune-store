	<!-- Start Slider Area -->
		<section id="slider_area" class="text-center">
			<div class="slider_active owl-carousel">
			   <?php
			     foreach($banners as $b)
			     {
			   ?>
				<div class="single_slide" style="background-image: url(<?php echo e($b['img']); ?>); background-size: cover; background-position: center;">
					<div class="container">	
						<div class="single-slide-item-table">
							<div class="single-slide-item-tablecell">
								<div class="slider_content text-left slider-animated-1">						
									<p class="animated"><?php echo e(strtoupper($b['subtitle_1'])); ?></p>
									<h1 class="animated"><?php echo e($b['title']); ?></h1>
									<h4 class="animated"><?php echo e(strtoupper($b['subtitle_2'])); ?></h4>
									<a href="javascript:void(0)" class="btn main_btn animated">shop now</a>
								</div>
							</div>
						</div>						
					</div>
				</div>
				<?php
			     }
			   ?>
				
			</div>
		</section>
		<!-- End Slider Area -->		
<?php /**PATH C:\bkupp\lokl\repo\fortune-store\resources\views/banner.blade.php ENDPATH**/ ?>