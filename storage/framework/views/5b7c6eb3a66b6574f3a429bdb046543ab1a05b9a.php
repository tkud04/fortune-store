<?php
$title = $manufacturer['name'];
$ph = false;
$pcClass = "";
?>


<?php $__env->startSection('content'); ?>


<script>
let page = 1, productsLength = 0, products = [], perPage = 12;

		  <?php
		  $pc = count($products);
		  $pcText = $pc == 1 ? "Product" : "Products";
		  $page1 = $pc < 12 ? $pc : 12;
		  
		  if(count($products) > 0)
		  {
		   foreach($products as $n)
		   {
			   $id = $n['id'];
			   $sku = $n['sku'];
			   $model = $n['model'];
			   $name = $n['name'];
			   $upc = $n['upc'];
			   $ean = $n['ean'];
			   $jan = $n['jan'];
			   $isbn = $n['isbn'];
			   $mpn = $n['mpn'];
			   $qty = $n['qty'];
			   $pd = $n['data'];
			   $imgs = $n['imggs'];
			   $displayName = $name == "" ? $model : $name;
			   $uu = url('product')."?xf=".$model;
			   $cu = url('add-to-cart')."?xf=".$model."&qty=1";
			   $wu = url('add-to-wishlist')."?xf=".$model;
			   //$ccu = url('add-to-compare')."?sku=".$sku;
			   $description = $pd['description'];
			   $category = $pd['category'];
			   $manufacturer = $pd['manufacturer'];
			   $amount = $pd['amount'];
			   $imggs = $n['imggs'];
			    
		  ?>
		   ppd = "<?php echo e(json_encode($pd,JSON_HEX_APOS|JSON_HEX_QUOT)); ?>";
		  ppd = ppd.replace(/&quot;/g, '\"');
		  
		  imggs = "<?php echo e(json_encode($imggs,JSON_HEX_APOS|JSON_HEX_QUOT)); ?>";
		  imggs = imggs.replace(/&quot;/g, '\"');
		   temp = {
			   id: "<?php echo e($id); ?>",
			   name: "<?php echo e($name); ?>",
			   sku: "<?php echo e($sku); ?>",
			   model: "<?php echo e($model); ?>",
			   upc: "<?php echo e($upc); ?>",
			   ean: "<?php echo e($ean); ?>",
			   jan: "<?php echo e($jan); ?>",
			   isbn: "<?php echo e($isbn); ?>",
			   mpn: "<?php echo e($mpn); ?>",
			   uu: "<?php echo e($uu); ?>",
			   cu: "<?php echo e($cu); ?>",
			   wu: "<?php echo e($wu); ?>",
			   pd: ppd,
			   amount: "<?php echo e($amount); ?>",
			   category: "<?php echo e($category['name']); ?>",
			   imggs: imggs,
		   };
		   products.push(temp);
		   <?php
			}
		  }
			?>


$(document).ready(() => {
  console.log("products: ",products);
   productsLength = products.length;
  showPage(1);
});
		  </script>



</script>
<div class="container">
<div class="row main-content-wrap gutter-lg">
						<?php echo $__env->make('shop-sidebar',['c' => $c,'m' => $m], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<div class="col-lg-9 main-content">
							<div class="shop-banner-default banner" style="background-image: url('images/shop/banner.jpg'); background-color: #f2f2f3;">
								<div class="banner-content">
									<h4 class="banner-subtitle mb-2  text-body text-uppercase ls-m font-weight-normal">
										Mobile Buzz</h4>
									<h1 class="banner-title font-weight-normal text-uppercase"><strong class="ls-m"><?php echo e($title); ?></strong></h1>
									<p class="font-primary lh-1 ls-m mb-0">Simple and Fresh ShopStyle</p>
								</div>
							</div>
							<nav class="toolbox sticky-toolbox sticky-content fix-top">
								<div class="toolbox-left">
									<a href="#" class="toolbox-item left-sidebar-toggle btn btn-sm btn-outline btn-primary d-lg-none">Filters<i class="d-icon-arrow-right"></i></a>
									<div class="toolbox-item toolbox-sort select-box">
										<label>Sort By :</label>
										<select name="orderby" id="orderby" class="form-control">
											<option value="default">Default</option>
											<option value="popularity" selected="selected">Most Popular</option>
											<option value="rating">Average rating</option>
											<option value="date">Latest</option>
											<option value="price-low">Sort forward price low</option>
											<option value="price-high">Sort forward price high</option>
											<option value="none">Clear custom sort</option>
										</select>
									</div>
								</div>
								<div class="toolbox-right">
									<div class="toolbox-item toolbox-show select-box">
										<label>Show :</label>
										<select name="count" id="count" class="form-control">
											<option value="12">12</option>
											<option value="24">24</option>
											<option value="36">36</option>
										</select>
									</div>
									<div class="toolbox-item toolbox-layout">
										<a href="javascript:void(0)" id="list" class="d-icon-mode-list btn-layout"></a>
										<a href="javascript:void(0)" id="grid" class="d-icon-mode-grid btn-layout active"></a>
									</div>
								</div>
							</nav>
						<?php if(count($products) > 0): ?>	 
			          <div id="pagination-row">
							<div class="row cols-2 cols-sm-3 product-wrapper" id="products">
								
							</div>
							<nav class="toolbox toolbox-pagination">
								<p class="show-info">Showing <span><?php echo e($page1); ?> of <?php echo e($pc); ?></span> <?php echo e($pcText); ?></p>
								<?php if($pc > 1): ?>
								<ul class="pagination">
									<li class="page-item disabled">
										<a class="page-link page-link-prev"href="javascript:void(0)" onclick="showPreviousPage();" aria-label="Previous" tabindex="-1" aria-disabled="true">
											<i class="d-icon-arrow-left"></i>Prev
										</a>
									</li>
									<li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
									</li>
									
									<li class="page-item">
										<a class="page-link page-link-next" href="javascript:void(0)" onclick="showNextPage();" aria-label="Next">
											Next<i class="d-icon-arrow-right"></i>
										</a>
									</li>
								</ul>
								<?php endif; ?>
							</nav>
					 </div>
							<?php else: ?>
							  <div class="row cols-2 cols-sm-3 product-wrapper">
								<h3>No products from this manufacturer</h3>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/manufacturer.blade.php ENDPATH**/ ?>