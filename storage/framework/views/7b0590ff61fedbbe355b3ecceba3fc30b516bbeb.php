<?php
$title = $category['name'];
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
			  // pd: ppd,
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
  // alert(`products length: ${productsLength}`);
  showPage(1);
});
		  </script>



</script>
<!-- Shop Product Area -->
		<div class="shop_page_area">
			<div class="container">
			    <?php echo $__env->make('shop-sidebar',['c' => $c,'m' => $m], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<div class="shop_details text-center">
						<?php if(count($products) > 0): ?>	
                     <div class="row" id="products"></div>						
							<?php else: ?>
							  <div class="row">
								<h3>No products in this category</h3>
							</div>
							<?php endif; ?>
				 </div>
						
						<?php if($pc > 1): ?>
						<!-- Blog Pagination -->
				<div class="col-xs-12">
					<div class="blog_pagination pgntn_mrgntp fix">
						<div class="pagination text-center">
							<ul>
								<li><a href="javascript:void(0)" onclick="showPreviousPage();"><i class="fa fa-angle-left"></i></a></li>
								<li><a href="#" class="page-link active">1</a></li>
								<li><a href="javascript:void(0)" onclick="showNextPage();"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<?php endif; ?>
				</div>
			 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\fortune-store\resources\views/category.blade.php ENDPATH**/ ?>