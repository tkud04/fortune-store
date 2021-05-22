<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title}} | Luxfabriqs Fashion - Online Store for Stylish and Elegant Laces and Georges </title>

    <meta name="keywords" content="men, women, fashion">
    <meta name="description" content="Luxfabriqs Fashion - Online Store for Stylish and Elegant Laces and Georges">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/icon.png">

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
	<script src="{{asset('js/helpers.js').'?ver='.rand(32,99999)}}"></script>
	<script src="{{asset('js/mmm.js').'?ver='.rand(32,99999)}}"></script>
	
	 
	 	<!--SweetAlert--> 
    <link href="lib/sweet-alert/sweetalert2.css" rel="stylesheet">
    <script src="lib/sweet-alert/sweetalert2.js"></script>
	 
    <!-- Custom CSS File -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css').'?ver='.rand(32,99999)}}">
	
     <style type="text/css">
      * { border: 1px solid red; }     
     </style>			
        <script src="js/jquery.meanmenu.min.js"></script>
		<script src="js/jquery.mixitup.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/venobox.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/simplePlayer.js"></script>
		<script src="js/main.js"></script>
		
	@yield('styles')
	@yield('scripts')

	
<!-- DO NOT EDIT!! start of plugins -->
@foreach($plugins as $p)
  {!! $p['value'] !!}
@endforeach
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
		
		@if(!isset($no_header))
		<!--  Start Header  -->
		<header id="header_area">
			<div class="header_top_area">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="hdr_tp_left">
								<div class="call_area">
									<span class="single_con_add"><i class="fa fa-phone"></i> <a href="tel:07045777852"></span>
									<span class="single_con_add"><i class="fa fa-envelope"></i> <a href="javascript:void(0)" class="__cf_email__">{{$pe['email']}}</a></span>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6">
							<ul class="hdr_tp_right text-right">
							   @if($user == null)
								<li class="account_area"><a href="{{$xu}}"><i class="fa fa-lock"></i> {{$xt}}</a></li>
								@else
								<li class="account_area_2"><a href="#"><i class="fa fa-lock"></i> Hi {{$user->fname}}<i class="fa fa-caret-down"></i></a>
									<ul class="csub-menu">
										<li><a href="{{$xu}}">Dashboard</a></li>
										<li><a href="{{url('bye')}}">Sign out</a></li>
									</ul>
								</li>
								@endif
								
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
							<a class="logo" href="{{url('/')}}"> 
							 <img alt="" src="img/logoo.png">
							 <!--<h3 class="testimonial-title">Luxfabriqs  Fashion</h3>-->
							</a> 
						</div><!--  End Col -->
						 <?php
	$cCount = count($c) < 4 ? count($c) : 4;
?>
						<div class="col-xs-12 col-sm-12 col-md-9 text-right">
							<div class="menu_wrap">
								<div class="main-menu">
									<nav>
										<ul>
											<li><a href="{{url('/')}}">home</a>					
											</li>									
											<li><a href="{{url('categories')}}">Categories <i class="fa fa-angle-down"></i></a>
												<!-- Mega Menu -->
												<div class="mega-menu mm-4-column mm-left">
												<div class="mm-column mm-column-link float-left">
												 <?php
	                if($cCount > 0)
	                {
					  for($i = 0; $i < $cCount; $i++)
	                  {
						  $cc = $c[$i];
						  $cu = url('category')."?xf=".$cc['category'];
						  $img = $cc['image'][0];
                   ?>
													
														<h3><a href="{{$cu}}">{{$cc['name']}}</a></h3>
													
													
												 <?php
	                  }
	                }
                   ?>
				                                </div>
												</div>
											</li>
											
											<li><a href="{{url('about')}}">about us</a></li>
											<li><a href="{{url('faq')}}">faq</a></li>
											<li><a href="{{url('contact')}}">contact</a></li>
										</ul>
									</nav>
								</div> <!--  End Main Menu -->					

								<div class="mobile-menu text-right ">
									<nav>
										<ul>
											<li><a href="{{url('/')}}">home</a></li>																		
											<li><a href="#">Categories</a>																		
												<ul>
												      <?php
	                                                    if($cCount > 0)
	                                                    {
					                                      for($i = 0; $i < $cCount; $i++)
	                                                      {
					                                    	  $cc = $c[$i];
					                                    	  $cu = url('category')."?xf=".$cc['category'];
					                                    	  $img = $cc['image'][0];
                                                       ?>
													<li><a href="{{$cu}}">{{$cc['name']}}</a></li>
													 <?php
	                                                      }
	                                                    }
                                                     ?>												
												</ul>																				
											</li>
											
											<li><a href="{{url('about')}}">about us</a></li>
											<li><a href="{{url('faq')}}">faq</a></li>
											<li><a href="{{url('contact')}}">contact</a></li>
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
													<span class="cart_number">{{$cc}}</span>
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
															<a href="{{$uu}}" class="mc-pro-image float-left"><img src="{{$imgs[0]}}" alt="{{$item['name']}}" style="width: 80px; height: 80px;" /></a>
															<div class="mc-pro-details fix">
																<a href="{{$uu}}">{{$item['name']}}</a>
																<span>{{$qty}}x&#8358;{{number_format($itemAmount,2)}}</span>
																<a class="pro-del" href="#"><i class="fa fa-times-circle"></i></a>
															</div>
														</div>
														 <?php
			                          }
			                         ?>
													</div>
													<!-- Sub Total -->
													<div class="mc-subtotal fix">
														<h4>Subtotal <span>&#8358;{{number_format($subtotal,2)}}</span></h4>												
													</div>
													<!-- Cart Button -->
													<div class="mc-button">
														<a href="{{url('checkout')}}" class="checkout_btn">checkout</a>
														<a href="{{url('cart')}}" class="text-bold">View cart</a>
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
        @endif
		
		@if(isset($ph) && $ph)
             @include('page-header',['title' => $title,'img' => asset('img/page-header.jpg')])
		 @endif
		 
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

                 @if($pop != "" && $val != "")
                   @include('session-status',['pop' => $pop, 'val' => $val])
                 @endif
        	<!--------- Input errors -------------->
                    @if (count($errors) > 0)
                          @include('input-errors', ['errors'=>$errors])
                     @endif 
		
		@yield('content')
		
		<!--  FOOTER START  -->
		<footer class="footer_area">
			<div class="container">
				<div class="row">				
					<div class="col-md-3 col-sm-6">
						<div class="single_ftr">
							<h4 class="sf_title">Luxfabriqs Fashion</h4>
							<ul>
								<li>Ikeja, Lagos 10001 NG</li>
								<li>(+234) {{$pe['phone']}}</li>
								<li><a href="javascript:void(0)" class="__cf_email__">{{$pe['email']}}</a></li>
							</ul>
						</div>
					</div> <!--  End Col -->
					
					<div class="col-md-3 col-sm-6">
						<div class="single_ftr">
							<h4 class="sf_title">Information</h4>
							<ul>
								<li><a href="{{url('about')}}">About Us</a></li>
								<li><a href="{{url('delivery')}}">Delivery Information</a></li>
								<li><a href="{{url('privacy')}}">Privacy Policy</a></li>
								<li><a href="{{url('terms')}}">Terms & Conditions</a></li>
								<li><a href="{{url('contact')}}">Contact Us</a></li>
							</ul>
						</div>
					</div> <!--  End Col -->
	
					
					<div class="col-md-6 col-sm-12">
						<div class="single_ftr">
							<h4 class="sf_title">Newsletter</h4>
							<div class="newsletter_form">
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have </p>
								<form method="post" class="form-inline">				
									<input name="email" id="email" placeholder="Enter Your Email" class="form-control" type="email">
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
									<li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
									<li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
									<li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<p class="copyright_text text-center">&copy; {{date("Y")}}, All Rights Reserved Luxfabriqs Fashion</p>
						</div>
						
						<div class="col-sm-4">
							<div class="payment_mthd_icon text-right">
								<ul>
									<li><i class="fa fa-cc-visa"></i></li>
									<li><i class="fa fa-cc-mastercard"></i></li>
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
