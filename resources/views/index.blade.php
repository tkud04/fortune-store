<?php
$title = "Welcome";
?>
@extends('layout')

@section('content')

 @include('banner')
	
 <?php
	//$cCount = count($c) < 4 ? count($c) : 4;
	$cCount = count($c);

      shuffle($c);
?>
		<!--  Categories STRAT  -->
		<section id="promo_area" class="section_padding">
			<div class="container">
				<div class="row">
				   <?php
	                if($cCount > 0)
	                {
					  for($i = 0; $i < $cCount; $i++)
	                  {
						  $cc = $c[$i];
						  $cu = url('category')."?xf=".$cc['category'];
						  $img = $cc['image'][0];
                   ?>
				   
					<div class="col-lg-4 col-md-6 col-sm-12">	
						<a href="{{$cu}}">
							<div class="single_promo">
								<img src="{{$img}}" alt="">
								<div class="box-content">
									<h3 class="title">{{$cc['name']}}</h3>
									<span class="post">2021 Collection</span>
								</div>
							</div>
						</a>						
					</div><!--  End Col -->						
												
				    <?php
	                  }
	                }
                   ?>
				</div>			
			</div>		
		</section>
		<!--  Categories END -->	
		

		<!-- Start product Area -->
		<section id="product_area" class="section_padding">
			<div class="container">		
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="section_title">						
							<h2>Our <span>Products</span></h2>
							<div class="divider"></div>							
						</div>
					</div>
				</div>
			
				<div class="text-center">
					<div class="product_filter">
						<ul>
							<li class=" active filter" data-filter="all">ALL</li>
							<li class="filter" data-filter=".sale">Sale</li>
							<li class="filter" data-filter=".bslr">Bestseller</li>
							<li class="filter" data-filter=".ftrd">Featured</li>
						</ul>
					</div>
					
					<div class="product_item">
						<div class="row">
							<?php
                             foreach($tp as $p)
									  {
										  $tag = $p['tag'];
										  $data = $p['data'];
										  $imgs = $p['imggs'];
										  $pc = $data['category'];
										  $pm = $data['manufacturer'];
										  $amt = $data['amount'];
										  $xf = $p['id'];
										  $uu = url('product')."?xf=".$p['sku'];
										  $ss = "";
										  if($tag == "sale") $ss = "sale";
										  else if($tag == "bestseller") $ss = "bslr";
										  else if($tag == "featured") $ss = "ftrd";
						?>						
							<div class="col-lg-3 col-md-4 col-sm-6 mix {{$ss}}">
								<div class="single_product">
									<div class="product_image">
										<img src="{{$imgs[0]}}" alt="" width="253" height="337"/>
										<div class="new_badge">New</div>
										<div class="box-content">
											<a href="javascript:void(0)" onclick="addToWishlist({xf: '{{$xf}}'})" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
											<a href="javascript:void(0)" onclick="addToCart({xf: '{{$xf}}'})" title="Add to cart"><i class="fa fa-cart-plus"></i></a>
										</div>										
									</div>

									<div class="product_btm_text">
										<h4><a href="{{$uu}}">{{$p['name']}}</a></h4>
										<div class="p_rating">
										   @for($i = 0; $i < $p['rating']; $i++)
											<i class="fa fa-star"></i>
										   @endfor
										</div>										
										<span class="price">&#8358;{{number_format($amt,2)}}</span>
			
									</div>
								</div>
								
							</div> <!-- End Col -->	
                            <?php
									  }
							?>
									
		
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End product Area -->

		<!-- Special Offer Area -->
		<div class="special_offer_area gray_section">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="special_img text-left">
							<img src="img/lace.jpg" width="370" alt="" class="img-responsive">
							<span class="off_baudge text-center">10% <br /> Off</span>
						</div>
					</div>			

					<div class="col-md-7 text-left">
						<div class="special_info">			
							<h3>Laces Collection 2021</h3>
							<p>Get as much as <b>10% off</b> from our exquisite range of Lace and George fabrics today! Available while stocks last.</p>							
							<a href="{{url('shop')}}" class="btn main_btn">Shop Now</a>					
						</div>
					</div>
				</div>

			</div>
		</div> <!-- End Special Offer Area -->
		
		
		
		<!-- Start gallery Area -->
		<section id="gallery_area" class="section_padding">
			<div class="container">		
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="section_title">						
							<h2>Our <span>Gallery</span></h2>
							<div class="divider"></div>							
						</div>
					</div>
				</div>
			
				<div class="text-center">
					
					
					<div class="product_item">
						<div class="row">
							<?php
                             foreach($gallery as $g)
									  {
										
										  $img = $g['img'];
									
						?>						
							<div class="col-lg-3 col-md-4 col-sm-6 mix">
								<div class="single_product">
									<div class="product_image">
										<img src="{{$img}}" alt=""/>
																	
									</div>

									<div class="product_btm_text">
										
			
									</div>
								</div>
								
							</div> <!-- End Col -->	
                            <?php
									  }
							?>
									
		
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End gallery Area -->
		
		
		

		<!-- Start Featured product Area -->
		<section id="featured_product" class="featured_product_area section_padding">
			<div class="container">		
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="section_title">						
							<h2>Featured <span> Products</span></h2>
							<div class="divider"></div>							
						</div>
					</div>
				</div>

				<div class="row text-center">	
                   <?php
                             foreach($tp as $p)
									  {
										  $data = $p['data'];
										  $imgs = $p['imggs'];
										  $pc = $data['category'];
										  $pm = $data['manufacturer'];
										  $amt = $data['amount'];
										  $xf = $p['id'];
										  $uu = url('product')."?xf=".$p['sku'];
										  
										  if($tag == "featured")
										  {
						?>					
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single_product">
							<div class="product_image">
								<img src="{{$imgs[0]}}" alt=""/>
								<div class="box-content">
									<a href="javascript:void(0)" onclick="addToWishlist({xf: '{{$xf}}'})" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
									<a href="javascript:void(0)" onclick="addToCart({xf: '{{$xf}}'})" title="Add to cart"><i class="fa fa-cart-plus"></i></a>
								</div>										
							</div>

							<div class="product_btm_text">
								<h4><a href="{{$uu}}">{{$p['name']}}</a></h4>
								<span class="price">&#8358;{{number_format($amt,2)}}</span>
							</div>
						</div>								
					</div> <!-- End Col -->	
 
                     <?php
						            }
						          }
					 ?>
					
				</div>
			</div>
		</section>
		<!-- End Featured Products Area -->

		<!-- Testimonials Area -->
		<section id="testimonials" class="testimonials_area section_padding" style="background: url(img/testimonial-bg.jpg); background-size: cover; background-attachment: fixed;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="testimonial-slider" class="owl-carousel">
						  <?php
						   foreach($testimonials as $t)
						   {
						  ?>	
                           <div class="testimonial">
								<div class="pic">
									<img src="img/avatar.png" alt="">
								</div>
								<div class="testimonial-content">
									<p class="description">
									{{$t['msg']}}
									</p>
									<h3 class="testimonial-title">{{$t['name']}}</h3>
									<small class="post"> - {{$t['location']}}</small>
								</div>
							</div>
                          <?php						  
						   }
						  ?>
							
			 
						
						</div>
					</div>
				</div>
			</div>
		</section> <!-- End STestimonials Area -->		
		
		<?php
		 /**
        <!--  Blog -->
        <section id="blog_area" class="section_padding">
            <div class="container">	
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="section_title">							
							<h2>latest <span>Blog</span></h2>
							<div class="divider"></div>
						</div>
					</div>
				</div>			
				
				<div class="row">	
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single_blog">
							<div class="single_blog_img">
								<img src="img/blog/1.jpg" alt="">
								<div class="blog_date text-center">
									<div class="bd_day"> 25</div>
									<div class="bd_month">Aug</div>
								</div>
							</div>
												
							<div class="blog_content">	
								<h4 class="post_title"><a href="#">Integer euismod dui non auctor</a> </h4>
								<ul class="post-bar">
									<li><i class="fa fa-user"></i> Admin</li>									
									<li><i class="fa fa-comments-o"></i> <a href="#">2 comments</a></li>
									<li><i class="fa fa-heart-o"></i> <a href="#">4 like</a></li>
								</ul>							
								<p>Proin in blandit lacus. Nam pellentesque tortor eget dui feugiat venenatis ....</p>
							</div>
						</div>
					</div> <!--  End Col -->				
					
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single_blog">
							<div class="single_blog_img">
								<img src="img/blog/2.jpg" alt="">
								<div class="blog_date text-center">
									<div class="bd_day"> 25</div>
									<div class="bd_month">Aug</div>
								</div>
							</div>
												
							<div class="blog_content">
								<h4 class="post_title"><a href="#">Integer tempor urna a condimentum</a> </h4>								
								<ul class="post-bar">
									<li><i class="fa fa-user"></i> Admin</li>									
									<li><i class="fa fa-comments-o"></i> <a href="#">2 comments</a></li>
									<li><i class="fa fa-heart-o"></i> <a href="#">4 like</a></li>
								</ul>
								
								<p>Proin in blandit lacus. Nam pellentesque tortor eget dui feugiat venenatis ....</p>
							</div>
						</div>
					</div> <!--  End Col -->				
					
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single_blog">
							<div class="single_blog_img">
								<img src="img/blog/3.jpg" alt="">
								<div class="blog_date text-center">
									<div class="bd_day"> 25</div>
									<div class="bd_month">Aug</div>
								</div>
							</div>
												
							<div class="blog_content">
				
								<h4 class="post_title"><a href="#">Vivamus velit est iaculis id tempus</a> </h4>
								<ul class="post-bar">
									<li><i class="fa fa-user"></i> Admin</li>										
									<li><i class="fa fa-comments-o"></i> <a href="#">2 comments</a></li>
									<li><i class="fa fa-heart-o"></i> <a href="#">4 like</a></li>
								</ul>
								<p>Proin in blandit lacus. Nam pellentesque tortor eget dui feugiat venenatis ....</p>
							</div>
						</div>
					</div> <!--  End Col -->

				</div>
            </div>
        </section>
        <!--  Blog end -->
		**/
		?>
		
        <!--  Process -->
		<section class="process_area section_padding gradient_section">
			<div class="container">
				<div class="row text-center">		
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-process">
							<!-- process Icon -->
							<div class="picon"><i class="fa fa-truck"></i></div>
							<!-- process Content -->
							<div class="process_content">
								<h3>free shipping</h3>
								<p>for orders in Lagos</p>
							</div>
						</div>	
					</div>	<!-- End Col -->				

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-process">
							<!-- process Icon -->
							<div class="picon"><i class="fa fa-money"></i></div>
							<!-- process Content -->
							<div class="process_content">
								<h3>Pay On Delivery</h3>
								<p>for orders in Lagos</p>
							</div>
						</div>	
					</div>	<!-- End Col -->				

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-process">
							<!-- process Icon -->
							<div class="picon"><i class="fa fa-headphones "></i></div>
							<!-- process Content -->
							<div class="process_content">
								<h3>Support 24/7</h3>
								<p>We're always here to help!</p>
							</div>
						</div>	
					</div>	<!-- End Col -->				

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-process">
							<!-- process Icon -->
							<div class="picon"><i class="fa fa-clock-o"></i></div>
							<!-- process Content -->
							<div class="process_content">
								<h3>Open All Week</h3>
								<p>24/7</p>
							</div>
						</div>	
					</div>	<!-- End Col -->
					
				</div>
			</div>
		</section>
        <!--  End Process -->


@stop
