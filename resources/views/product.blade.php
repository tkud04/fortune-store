<?php
$title = $product['name'];
$ph = true;
$pcClass = "";
?>
@extends('layout')

@section('content')
<?php
               $id = $product['id'];
               $name = $product['name'];
               $model = $product['model'];
			   $pd = $product['data'];
			   $imgs = $product['imggs'];
			   $displayName = $name == "" ? $model : $name;
			   $uu = url('product')."?xf=".$model;
			   $cu = url('add-to-cart')."?xf=".$model."&qty=1";
			   $wu = url('add-to-wishlist')."?xf=".$model;
			   //$ccu = url('add-to-compare')."?sku=".$sku;
			   $description = $pd['description'];
			   $category = $pd['category'];
			   $manufacturer = $pd['manufacturer'];
			   $amount = $pd['amount'];
			   $imggs = $product['imggs'];
			    
?>

<script>
	let i = 0, imgs = [];
<?php
     for($i = 0; $i < count($imggs); $i++)
		{
			$ii = $imggs[$i];
			$ss = $i == 0 ? " active" : "";
 ?>
      imgs.push({i: "{{$i}}", img: "{{$ii}}"}); 
 <?php
	   }
 ?>
 	
 $(document).ready(() => {
 	//alert("imgs.length: " + imgs.length);
 	showImage(0);
 });
 </script>
<!-- Product Details Area  -->
	<div class="prdct_dtls_page_area">
		<div class="container">
		  <input type="hidden" id="product-xf" value="{{$id}}">
			<div class="row">
				<!-- Product Details Image -->
				<div class="col-md-6 col-xs-12">
					<div class="pd_img fix">
						  <a id="va" data-img="" href="javascript:void(0)"><img id="vi" src="" alt="{{$displayName}}"/></a>
					</div>
					<div class="pd_btn fix">
							<a href="javascript:void(0)" id="vprev" class="btn btn-default acc_btn btn_icn"><i class="fa fa-chevron-left"></i></a>
							<a href="javascript:void(0)" id="vnext" class="btn btn-default acc_btn btn_icn"><i class="fa fa-chevron-right"></i></a>
						</div>
				</div>
				<!-- Product Details Content -->
				<div class="col-md-6 col-xs-12">
					<div class="prdct_dtls_content">
						<a class="pd_title" href="javascript:void(0)">{{$displayName}}</a>
						<div class="pd_price_dtls fix">
							<!-- Product Price -->
							<div class="pd_price">
								<span class="new">&#8358;{{number_format($amount,2)}}</span>
								
							</div>
							<!-- Product Ratting -->
							<div class="pd_ratng">
								<div class="rtngs">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>
							</div>
						</div>
						<div class="pd_text">
							<h4>overview:</h4>
							<p> SKU: <span class="product-sku">{{$product['sku']}}</span> </p>
						</div>
						
						<div class="pd_clr_qntty_dtls fix">
							
							<div class="pd_qntty_area">
								<h4>quantity:</h4>
								<div class="pd_qty fix">
									<input value="1" name="qttybutton" id="product-qty" class="cart-plus-minus-box" type="number">
								</div>
							</div>
						</div>
						<!-- Product Action -->
						<div class="pd_btn fix">
							<a class="btn btn-default acc_btn" href="javascript:void(0)" id="product-add-to-cart-btn" >add to bag</a>
							<a class="btn btn-default acc_btn btn_icn" href="javascript:void(0)" id="product-add-to-wishlist-btn"><i class="fa fa-heart"></i></a>
							
						</div>
						<div class="pd_share_area fix">
							<h4>share this on:</h4>
							<div class="pd_social_icon">
								<a class="facebook" href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
								<a class="twitter" href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
								<a class="instagram" href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12">					
					<div class="pd_tab_area fix">									
						<ul class="pd_tab_btn nav nav-tabs" role="tablist">
						  <li>
							<a class="active" href="#description" role="tab" data-toggle="tab">Description</a>
						  </li>
						  
						  <li>
							<a href="#reviews" role="tab" data-toggle="tab">Reviews</a>
						  </li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade show active" id="description">
								{!! $description !!}					  
							</div>

							

								<div role="tabpanel" class="tab-pane fade" id="reviews">
									<div class="pda_rtng_area fix">
										<h4>4.5 <span>(Overall)</span></h4>
										<span>Based on 9 Comments</span>
									</div>
									<div class="rtng_cmnt_area fix">
										<div class="single_rtng_cmnt">
											<div class="rtngs">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											<span>(4)</span>
											</div>
											<div class="rtng_author">
												<h3>John Doe</h3>
												<span>11:20</span>
												<span>6 January 2017</span>
											</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</p>
										</div>

									</div>
									<div class="col-md-6 rcf_pdnglft">
										<div class="rtng_cmnt_form_area fix">
											<h3>Add your Comments</h3>
											<div class="rtng_form">
												<form action="#">
													<div class="input-area"><input type="text" placeholder="Type your name" /></div>
													<div class="input-area"><input type="text" placeholder="Type your email address" /></div>
													<div class="input-area"><textarea name="message" placeholder="Write a review"></textarea></div>
													<input class="btn border-btn" type="submit" value="Add Review" />
												</form>
											</div>
										</div>
									</div>				  
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	<!-- Related Product Area -->
	<div class="related_prdct_area text-center">
		<div class="container">		
				<!-- Section Title -->
				<div class="rp_title text-center"><h3>Related products</h3></div>
				
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single_product">
							<div class="product_image">
								<img src="img/product/1.jpg" alt=""/>
								<div class="box-content">
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-cart-plus"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>										
							</div>

							<div class="product_btm_text">
								<h4><a href="#">Product Title</a></h4>
								<span class="price">$123.00</span>
							</div>
						</div>								
					</div> <!-- End Col -->			

					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single_product">
							<div class="product_image">
								<img src="img/product/2.jpg" alt=""/>
								<div class="box-content">
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-cart-plus"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>										
							</div>

							<div class="product_btm_text">
								<h4><a href="#">Product Title</a></h4>
								<span class="price">$123.00</span>
							</div>
						</div>								
					</div> <!-- End Col -->				

					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single_product">
							<div class="product_image">
								<img src="img/product/3.jpg" alt=""/>
								<div class="box-content">
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-cart-plus"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>										
							</div>

							<div class="product_btm_text">
								<h4><a href="#">Product Title</a></h4>
								<span class="price">$123.00</span>
							</div>
						</div>								
					</div> <!-- End Col -->			
					
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single_product">
							<div class="product_image">
								<img src="img/product/4.jpg" alt=""/>
								<div class="box-content">
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-cart-plus"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>										
							</div>

							<div class="product_btm_text">
								<h4><a href="#">Product Title</a></h4>
								<span class="price">$123.00</span>
							</div>
						</div>								
					</div> <!-- End Col -->					
			</div>
		</div>
	</div>
@stop
