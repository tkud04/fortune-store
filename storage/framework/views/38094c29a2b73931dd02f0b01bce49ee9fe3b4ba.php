<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e($title); ?> | Luxfabriqs Fashion - Online Store for Stylish and Elegant Laces and Georges </title>

    <meta name="keywords" content="men, women, fashion">
    <meta name="description" content="Luxfabriqs Fashion - Online Store for Stylish and Elegant Laces and Georges">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/icons/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">	
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/owl.theme.default.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.min.css" />
	<link rel="stylesheet" href="css/meanmenu.min.css" />
	<link rel="stylesheet" href="css/venobox.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/responsive.css" />	
	
	 <script src="js/jquery-3.6.0.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	 
	 	<!-- custom js -->
	<script src="<?php echo e(asset('js/helpers.js').'?ver='.rand(32,99999)); ?>"></script>
	<script src="<?php echo e(asset('js/mmm.js').'?ver='.rand(32,99999)); ?>"></script>
	
	 
	 	<!--SweetAlert--> 
    <link href="lib/sweet-alert/sweetalert2.css" rel="stylesheet">
    <script src="lib/sweet-alert/sweetalert2.js"></script>
	 
    <!-- Custom CSS File -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/custom.css').'?ver='.rand(32,99999)); ?>">
	
			
        <script src="js/jquery.meanmenu.min.js"></script>
		<script src="js/jquery.mixitup.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/venobox.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/simplePlayer.js"></script>
		<script src="js/main.js"></script>
		
	<?php echo $__env->yieldContent('styles'); ?>
	<?php echo $__env->yieldContent('scripts'); ?>

	
<!-- DO NOT EDIT!! start of plugins -->
<?php $__currentLoopData = $plugins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php echo $p['value']; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- DO NOT EDIT!! end of plugins -->
</head>
 <?php
	  $xu = url('login'); $xt = "Sign in";
	
	  if(is_null($user))
	  {
		$welcomeText = "Sign in";
	  }
	  else
	  {
		$xu = url('dashboard'); $xt = "My Account";
		 $welcomeText = "Welcome back, ".$user->fname."!";
	  }
	  ?>
<body>
	
		<!--  Preloader  -->
		
		<div class="preloader">
			<div class="status-mes">
				<div class="bigSqr">
					<div class="square first"></div>
					<div class="square second"></div>
					<div class="square third"></div>
					<div class="square fourth"></div>
				</div>
				<div class="text_loading text-center">loading</div>
			</div>
		</div>
		
		<?php if(!isset($no_header)): ?>
		<!--  Start Header  -->
		<header id="header_area">
			<div class="header_top_area">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="hdr_tp_left">
								<div class="call_area">
									<span class="single_con_add"><i class="fa fa-phone"></i> <?php echo e($pe['phone']); ?></span>
									<span class="single_con_add"><i class="fa fa-envelope"></i> <a href="javascript:void(0)" class="__cf_email__"><?php echo e($pe['email']); ?></a></span>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6">
							<ul class="hdr_tp_right text-right">
								<li class="account_area"><a href="<?php echo e($xu); ?>"><i class="fa fa-lock"></i> <?php echo e($xt); ?></a></li>
								<li class="lan_area"><a href="#"><i class="fa fa-language "></i> English <i class="fa fa-caret-down"></i></a>
									<ul class="csub-menu">
										<li><a href="#">English</a></li>
									</ul>
								</li>
								<li class="currency_area"><a href="#"><i class="fa fa-gg "></i> &#8358; <i class="fa fa-caret-down"></i></a>
									<ul class="csub-menu">
										<li><a href="#">&#8358; </a></li>	
									</ul>								
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div> <!--  HEADER START  -->
			
			<div class="header_btm_area">
				<div class="container">
					<div class="row">		
						<div class="col-xs-12 col-sm-12 col-md-3"> 
							<a class="logo" href="<?php echo e(url('/')); ?>"> <img alt="" src="img/logo.png"></a> 
						</div><!--  End Col -->
						
						<div class="col-xs-12 col-sm-12 col-md-9 text-right">
							<div class="menu_wrap">
								<div class="main-menu">
									<nav>
										<ul>
											<li><a href="<?php echo e(url('/')); ?>">home</a>					
											</li>									
											<li><a href="<?php echo e(url('categories')); ?>">Categories <i class="fa fa-angle-down"></i></a>
												<!-- Mega Menu -->
												<div class="mega-menu mm-4-column mm-left">
													<div class="mm-column mm-column-link float-left">
														<h3>Men</h3>
														<a href="#">Blazers</a>
														<a href="#">Jackets</a>
														<a href="#">Collections</a>
														<a href="#">T-Shirts</a>
														<a href="#">jens pant’s</a>
														<a href="#">sports shoes</a>												
													</div>
													
													<div class="mm-column mm-column-link float-left">
														<h3>Women</h3>
														<a href="#">Blazers</a>
														<a href="#">Jackets</a>
														<a href="#">Collections</a>
														<a href="#">T-Shirts</a>
														<a href="#">jens pant’s</a>
														<a href="#">sports shoes</a>												
													</div>
													
													<div class="mm-column mm-column-link float-left">
														<h3>Jackets</h3>
														<a href="#">Blazers</a>
														<a href="#">Jackets</a>
														<a href="#">Collections</a>
														<a href="#">T-Shirts</a>
														<a href="#">jens pant’s</a>
														<a href="#">sports shoes</a>	
													</div>						

													<div class="mm-column mm-column-link float-left">
														<h3>jens pant’s</h3>
														<a href="#">Blazers</a>
														<a href="#">Jackets</a>
														<a href="#">Collections</a>
														<a href="#">T-Shirts</a>
														<a href="#">jens pant’s</a>
														<a href="#">sports shoes</a>	
													</div>

												</div>
											</li>
											
											<li><a href="<?php echo e(url('about')); ?>">about us</a></li>
											<li><a href="<?php echo e(url('faq')); ?>">faq</a></li>
											<li><a href="<?php echo e(url('contact')); ?>">contact</a></li>
										</ul>
									</nav>
								</div> <!--  End Main Menu -->					

								<div class="mobile-menu text-right ">
									<nav>
										<ul>
											<li><a href="<?php echo e(url('/')); ?>">home</a></li>																		
											<li><a href="#">Men</a>																		
												<ul>
													<li><a href="#">Blazers</a></li>
													<li><a href="#">Jackets</a></li>
													<li><a href="#">Collections</a></li>
													<li><a href="#">T-Shirts</a></li>
													<li><a href="#">jens pant’s</a></li>
													<li><a href="#">sports shoes</a></li>
												</ul>																				
											</li>
											<li><a href="#">Women</a>																		
												<ul>
													<li><a href="#">Blazers</a></li>
													<li><a href="#">Jackets</a></li>
													<li><a href="#">Collections</a></li>
													<li><a href="#">T-Shirts</a></li>
													<li><a href="#">jens pant’s</a></li>
													<li><a href="#">sports shoes</a></li>
												</ul>																				
											</li>
											<li><a href="<?php echo e(url('about')); ?>">about us</a></li>
											<li><a href="<?php echo e(url('faq')); ?>">faq</a></li>
											<li><a href="<?php echo e(url('contact')); ?>">contact</a></li>
										</ul>
									</nav>
								</div> <!--  End mobile-menu -->
								
								<div class="right_menu">
									<ul class="nav justify-content-end">
										<li>
											<div class="search_icon">
												<i class="fa fa-search search_btn" aria-hidden="true"></i>
												<div class="search-box">
													<form action="#" method="get">
														<div class="input-group">
															<input type="text" class="form-control"  placeholder="enter keyword"/>				
															<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>			
														</div>
													</form>
												</div>
											</div>
										</li>
										<?php
			             $cc = (isset($cart)) ? count($cart) : 0;
						 $subtotal = 0;
		                ?>
										<li>
										<?php
				                   for($a = 0; $a < $cc; $a++)
				                   {
					                 $item = $cart[$a]['product'];
					                 $qty = $cart[$a]['qty'];
					                 $itemAmount = $item['data']['amount'];
									  $subtotal += ($itemAmount * $qty);
				                 ?>
								 
						<?php
								   }
						?>
											<div class="cart_menu_area">
												<div class="cart_icon">
													<a href="#"><i class="fa fa-shopping-bag " aria-hidden="true"></i></a>
													<span class="cart_number"><?php echo e($cc); ?></span>
												</div>
												
												
												<!-- Mini Cart Wrapper -->
												<div class="mini-cart-wrapper">
													<!-- Product List -->
													<div class="mc-pro-list fix">
													 <?php
								   $subtotal = 0;
				                   for($a = 0; $a < $cc; $a++)
				                   {
					                 $item = $cart[$a]['product'];
					                 $qty = $cart[$a]['qty'];
					                 $itemAmount = $item['data']['amount'];
									 $subtotal += ($itemAmount * $qty);
									 $imgs = $item['imggs'];
									 $uu = url('product')."?xf=".$item['id'];
				                 ?>
														<div class="mc-sin-pro fix">
															<a href="<?php echo e($uu); ?>" class="mc-pro-image float-left"><img src="<?php echo e($imgs[0]); ?>" alt="<?php echo e($item['name']); ?>" /></a>
															<div class="mc-pro-details fix">
																<a href="<?php echo e($uu); ?>"><?php echo e($item['name']); ?></a>
																<span><?php echo e($qty); ?>x&#8358;<?php echo e(number_format($itemAmount,2)); ?></span>
																<a class="pro-del" href="#"><i class="fa fa-times-circle"></i></a>
															</div>
														</div>
														 <?php
			                          }
			                         ?>
													</div>
													<!-- Sub Total -->
													<div class="mc-subtotal fix">
														<h4>Subtotal <span>&#8358;<?php echo e(number_format($subtotal,2)); ?></span></h4>												
													</div>
													<!-- Cart Button -->
													<div class="mc-button">
														<a href="<?php echo e(url('checkout')); ?>" class="checkout_btn">checkout</a>
													</div>
												</div>											
											</div>	
											
										</li>
									</ul>
								</div>							
							</div>
						</div><!--  End Col -->										
					</div>
				</div>
			</div>
		</header>
		<!--  End Header  -->
        <?php endif; ?>
		
		<?php if(isset($ph) && $ph): ?>
             <?php echo $__env->make('page-header',['title' => $title,'img' => asset('img/page-header.jpg')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		 <?php endif; ?>
		 
		   <!--------- Session notifications-------------->
        	<?php
               $pop = ""; $val = "";
               
               if(isset($signals))
               {
                  foreach($signals['okays'] as $key => $value)
                  {
                    if(session()->has($key))
                    {
                  	$pop = $key; $val = session()->get($key);
                    }
                 }
              }
              
             ?> 

                 <?php if($pop != "" && $val != ""): ?>
                   <?php echo $__env->make('session-status',['pop' => $pop, 'val' => $val], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                 <?php endif; ?>
        	<!--------- Input errors -------------->
                    <?php if(count($errors) > 0): ?>
                          <?php echo $__env->make('input-errors', ['errors'=>$errors], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     <?php endif; ?> 
		
		<?php echo $__env->yieldContent('content'); ?>
		
		<!--  FOOTER START  -->
		<footer class="footer_area">
			<div class="container">
				<div class="row">				
					<div class="col-md-3 col-sm-6">
						<div class="single_ftr">
							<h4 class="sf_title">Contacts</h4>
							<ul>
								<li>4060 Reppert Coal Road Jackson, MS 39201 USA</li>
								<li>(+123) 685 78 <br> (+064) 987 245</li>
								<li><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c182aeafb5a0a2b581b8aeb4b3a2aeacb1a0afb8efa2aeac">[email&#160;protected]</a></li>
							</ul>
						</div>
					</div> <!--  End Col -->
					
					<div class="col-md-3 col-sm-6">
						<div class="single_ftr">
							<h4 class="sf_title">Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div> <!--  End Col -->
					
					<div class="col-md-3 col-sm-6">
						<div class="single_ftr">
							<h4 class="sf_title">Services</h4>
							<ul>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Site Map</a></li>
								<li><a href="#">Wish List</a></li>
								<li><a href="#">My Account</a></li>
								<li><a href="#">Order History</a></li>
							</ul>
						</div>
					</div> <!--  End Col -->	
					
					<div class="col-md-3 col-sm-6">
						<div class="single_ftr">
							<h4 class="sf_title">Newsletter</h4>
							<div class="newsletter_form">
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have </p>
								<form method="post" class="form-inline">				
									<input name="EMAIL" id="email" placeholder="Enter Your Email" class="form-control" type="email">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
					</div> <!--  End Col -->
					
				</div>
			</div>
	
		
			<div class="ftr_btm_area">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="ftr_social_icon">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<p class="copyright_text text-center">&copy; 2018 All Rights Reserved FancyShop</p>
						</div>
						
						<div class="col-sm-4">
							<div class="payment_mthd_icon text-right">
								<ul>
									<li><i class="fa fa-cc-paypal"></i></li>
									<li><i class="fa fa-cc-visa"></i></li>
									<li><i class="fa fa-cc-discover"></i></li>
									<li><i class="fa fa-cc-mastercard"></i></li>
									<li><i class="fa fa-cc-amex"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--  FOOTER END  -->

</body>
</html>
<?php /**PATH C:\bkupp\lokl\repo\fortune-store\resources\views/layout.blade.php ENDPATH**/ ?>