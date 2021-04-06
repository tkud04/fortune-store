<?php
$title = "Cart";
$ph = true;
$pcClass = "";
?>


<?php $__env->startSection('content'); ?>

<script>
let cart = [];
</script>
					<!-- Cart Page -->
		<div class="cart_page_area">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="cart_table_area table-responsive">
							<table id="cart-table" class="table cart_prdct_table text-center">
								<thead>
									<tr>
										<th class="cpt_img">Product</th>
										<th class="cpt_q">quantity</th>
										<th class="cpt_p">price</th>
										<th class="cpt_t">total</th>
										<th class="cpt_r">remove</th>
									</tr>
								</thead>
								<tbody>
									<?php
								$cc = (isset($cart)) ? count($cart) : 0;
								   $subtotal = 0;
				                   for($a = 0; $a < $cc; $a++)
				                   {
					                 $item = $cart[$a]['product'];
									 $xf = $item['id'];
					                 $qty = $cart[$a]['qty'];
					                 $itemAmount = $item['data']['amount'];
									 $subtotal += ($itemAmount * $qty);
									 $imgs = $item['imggs'];
									 $uu = url('product')."?xf=".$xf;
									 $ru = url('remove-from-cart')."?xf=".$xf;
				                 ?>
									<tr>
										<td>
                                          <a href="<?php echo e($uu); ?>" class="cp_img"><img src="<?php echo e($imgs[0]); ?>" alt="<?php echo e($item['name']); ?>" /></a>
                                          <a href="<?php echo e($uu); ?>" class="cp_title"><?php echo e($item['name']); ?></a>
                                          <a href="<?php echo e($uu); ?>" class="cp_title"><?php echo e($item['name']); ?></a>
                                        </td>
										<td></td>
										<td>										
											<div class="cp_quntty">																			
												<input name="quantity" value="<?php echo e($qty); ?>" data-val="<?php echo e($qty); ?>" data-xf="<?php echo e($xf); ?>" size="2" type="number">													
											</div>
										</td>
										<td><p class="cp_price">&#8358;<?php echo e(number_format($itemAmount,2)); ?></p></td>
										<td><p class="cpp_total">&#8358;<?php echo e(number_format($itemAmount * $qty,2)); ?></p></td>
										<td><a href="<?php echo e($ru); ?>" title="Remove this product" class="btn btn-default cp_remove"><i class="fa fa-trash"></i></a></td>
									</tr>
									<?php
								   }
									?>
									
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-8 col-xs-12 cart-actions cart-button-cuppon">
						<div class="row">
							<div class="col-sm-7">
								<div class="cart-action">
									<a href="<?php echo e(url('/')); ?>" class="btn border-btn">continue shopping</a>
									<a href="javascript:void(0)" id="update-cart-btn" class="btn border-btn">update shopping bag</a>
								</div>
							</div>
							
							<div class="col-sm-5">
								<div class="cuppon-wrap">
									<h4>Discount Code</h4>
									<p>Enter your coupon code if you have</p>
									<form action="#" class="cuppon-form">
										<input type="text" />
										<button class="btn border-btn">apply coupon</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-xs-12 cart-checkout-process text-right">
						<div class="wrap">
							<h4><span>Total</span><span>&#8358;<?php echo e(number_format($subtotal,2)); ?></span></h4>
							<p>Shipping fee:</p>
							<form action="#" class="cuppon-form">
							  <select id="st">
							    <option value="none">Select shipping fee</option>
								<?php
								  foreach($shipping as $s)
								  {
								?>
							    <option value="<?php echo e($s['id']); ?>"><?php echo e($s['name']); ?> - &#8358;<?php echo e(number_format($s['value'],2)); ?></option>
								<?php
								  }
								?>
							  </select>
							</form>
							<a href="javascript:void(0)" id="cart-btn" class="btn border-btn">proced to checkout</a>
						</div>
					</div>
					
				</div>
			</div>
		</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\fortune-store\resources\views/cart.blade.php ENDPATH**/ ?>