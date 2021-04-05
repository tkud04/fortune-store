<?php
$title = "My Wishlist";
$ph = true;
$pcClass = "";
?>


<?php $__env->startSection('content'); ?>
				<div class="container">
				<div class="col-md-12">
					<?php
							    if(count($wishlist) > 0)
								{
							   ?>
							       <table class="shop-table wishlist-table mt-2 mb-5">
								    <thead>
									  <tr>
										<th>Details</th>
								        <th class="product-add-to-cart"></th>
									  </tr>
									</thead>
									<tbody>
										<?php
									     foreach($wishlist as $w)
									     {
										$n = $w['product'];
										
										$sku = $n['sku'];
			                            $name = $n['name'];
			                            $pd = $n['data'];
			                            $imgs = $n['imggs'];
			                            $displayName = $name == "" ? $sku : $name;
			                            $uu = url('product')."?xf=".$sku;
			                            $amount = $pd['amount'];
			                            $imggs = $n['imggs'];
										
										$date = $w['date'];
										$cu = url('add-to-cart')."?xf=".$sku."&qty=1&from_wishlist=yes";
										$du = url('remove-from-wishlist')."?xf=".$sku;
							  
							            ?>
								      <tr>
									   <td>
										<div class="mb-2">
										   <a href="<?php echo e($uu); ?>" class="mb-2">
										     <figure>
											  <img src="<?php echo e($imggs[0]); ?>" width="60" height="60" alt="<?php echo e($displayName); ?>">
										     </figure>
									       </a>
									       <a href="<?php echo e($uu); ?>"><?php echo e($displayName); ?></a> <b class="badge badge-success">&#8358;<?php echo e(number_format($amount,2)); ?></b>
										   </div>
                                       </td>
									    <td>
										<a href="<?php echo e($uu); ?>" class="mb-3 mr-3 btn btn-primary btn-reveal-right"><span>VIEW</span></a>
										<a href="<?php echo e($cu); ?>" class="mb-3 mr-3 btn btn-primary btn-reveal-right"><span>ADD TO BAG</span></a>
										<a href="<?php echo e($du); ?>" class="mb-3 mr-3 btn btn-primary btn-reveal-right"><span>REMOVE</span></a>
                                        </td>
                                      </tr>
                                      <?php
								       }
						
								       ?>
									</tbody>
									</table>
							   <?php
								}
								else
								{
								?>
								<p class=" b-2">No items in your wishlist yet.</p>
								<a href="<?php echo e(url('shop')); ?>" class="btn btn-primary">Go Shopping</a>
								<?php
								}
						
								?>
				  </div>
				</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\fortune-store\resources\views/wishlist.blade.php ENDPATH**/ ?>