<?php
$title = "Checkout";
$ph = true;
$pcClass = "";
?>


<?php $__env->startSection('content'); ?>
<!-- Checkout Page -->

<script>
let pd = [], sd = [], ppd = null, pm = "none";

$(document).ready(() => {

<?php if(count($pd) > 0): ?>
  <?php $__currentLoopData = $pd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   pd.push({
	  xf: "<?php echo e($p['id']); ?>",
	  fname: "<?php echo e($p['fname']); ?>",
	  lname: "<?php echo e($p['lname']); ?>",
	  company: "<?php echo e($p['company']); ?>",
	  address_1: "<?php echo e($p['address_1']); ?>",
	  address_2: "<?php echo e($p['address_2']); ?>",
	  city: "<?php echo e($p['city']); ?>",
	  region: "<?php echo e($p['region']); ?>",
	  zip: "<?php echo e($p['zip']); ?>",
	  country: "<?php echo e($p['country']); ?>",
   });
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(count($sd) > 0): ?>
  <?php $__currentLoopData = $sd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   sd.push({
	  xf: "<?php echo e($p['id']); ?>",
	  fname: "<?php echo e($p['fname']); ?>",
	  lname: "<?php echo e($p['lname']); ?>",
	  company: "<?php echo e($p['company']); ?>",
	  address_1: "<?php echo e($p['address_1']); ?>",
	  address_2: "<?php echo e($p['address_2']); ?>",
	  city: "<?php echo e($p['city']); ?>",
	  region: "<?php echo e($p['region']); ?>",
	  zip: "<?php echo e($p['zip']); ?>",
	  country: "<?php echo e($p['country']); ?>",
   });
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

});
</script>
			
<section class="checkout_page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title">
                            <h3>Your Details</h3>
                        </div>
                        <form class="checkout_form" action="<?php echo e(url('checkout')); ?>" method="post" id="checkout-form">
						   <?php echo csrf_field(); ?>

						    <input type="hidden" id="pm" name="pm" value="">
							
							<div id="accordion">
							   <div class="card border-light">
                                  <div class="card-header" id="heading1-1">
                                     <a data-toggle="collapse" data-target="#collapse1-1" href="javascript:void(0)" aria-expanded="true" aria-controls="collapse1-1">Shipping Details</a>
                                  </div>
								  <div id="collapse1-1" class="collapse show" aria-labelledby="heading1-1" data-parent="#accordion">
								     <div class="card-body">
							           <div class="form-row">
								         <div class="form-group col-md-12">
										   <div class="custom-select-wrapper">
									       <select class="custom-select" id="checkout-sd" name="sd">
									       <option value="none">Add new shipping detail</option>
										<?php
										 if(count($sd) > 0)
										 {
											 foreach($sd as $s)
											 {
										?>
									    <option value="<?php echo e($s['id']); ?>"><?php echo e($s['address_1'].", ".$s['city'].", ".strtoupper($s['country'])); ?></option>
									    <?php
											 }
										 }
										?>
									       </select>
										   </div>
								         </div>
								
								         <div class="form-group col-md-6">								
									      <label>First Name *</label>
										   <input type="text" class="form-control" id="sd-fname" name="sd-fname" required="">
								         </div>
										 <div class="form-group col-md-6">								
									      <label>Last Name *</label>
										  <input type="text" class="form-control" id="sd-lname" name="sd-lname" required="">
								         </div>
							           </div>
							
                                       <div class="form-group">      
                                        <label>Company Name(Optional)</label>
								        <input type="text" class="form-control" id="sd-company" name="sd-company" required="">                     
                                       </div>
								
                                       <div class="form-group">  
								         <label for="country">Country:</label>
								         <div class="custom-select-wrapper">
									        <select id="sd-country" name="sd-country" class="custom-select">
										     <option value="none">Select country</option>
									         <option value="nigeria">Nigeria</option>
										     <?php
										       if(count($countries) > 0)
										        {
											      foreach($countries as $k => $v)
											       {
										      ?>
									         <option value="<?php echo e($k); ?>"><?php echo e($v); ?></option>
									         <?php
										           }
												}
										     ?>
									        </select>
								         </div>
                                       </div>
							
							           <div class="form-group">
								         <label for="address">Address:</label>    
							             <input type="text" class="form-control mb-2" id="sd-address-1" name="sd-address-1" required="" placeholder="Address line 1*">
								         <input type="text" class="form-control" id="sd-address-2" name="sd-address-2" required="" placeholder="Address line 2">
                                       </div>
							
                                       <div class="form-row">
								        <div class="form-group col-md-4">
                                        <input type="text" placeholder="Town / City*" class="form-control" id="sd-city" name="sd-city" required="">
                                        </div>		
										
										<div class="form-group col-md-4">
                                        <input type="text" class="form-control" placeholder="State / Region*" id="sd-region" name="sd-region" required="">
                                        </div>
													
										<div class="form-group col-md-4">
                                         <input name="code" placeholder="Post code / Zip*" class="form-control" type="text">
                                        </div>			
                                       </div>

                                        <div class="form-group">
								          <label for="address">Order notes:</label>    
								          <textarea class="form-control" cols="30" rows="6" id="notes" name="notes" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>                       
                                        </div>
                                     </div>
                                   </div>
                                </div>
								
                            </div>
                        </form>
                    </div>
					
					
                    <div class="col-md-6">
                        <div class="title">
                            <h3>your order</h3>
                        </div>
						
						<div class="your-order-table table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="product-name">Items</th>
										<th class="product-total"></th>
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
										<td class="product-name"><img src="<?php echo e($imgs[0]); ?>" alt="<?php echo e($item['name']); ?>" class="mb-2" style="width: 80px; height: 80px;" /><?php echo e($item['name']); ?> <strong class="product-quantity">×&nbsp;<?php echo e($qty); ?></strong></td>
										<td class="product-total"><span>&#8358;<?php echo e(number_format($itemAmount * $qty,2)); ?></span></td>
									</tr>
									<?php
								   }
									?>
									<tr class="sub-total">
										<td class="product-name">Sub Total</td>
										<td class="product-total"><span>&#8358;<?php echo e(number_format($subtotal,2)); ?></span></td>
									</tr>
									<tr class="sub-total">
										<td class="product-name">Shipping</td>
										<td class="product-total"><span>&#8358;<?php echo e(number_format($st['value'],2)); ?></span></td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>Total</th>
										<td><span class="amount">&#8358;<?php echo e(number_format($subtotal + $st['value'],2)); ?></span></td>
									</tr>
								</tfoot>
							</table>
						</div>
						
                        <div class="payment_method">           
							<ul>
								<li>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" disabled>
										<label class="custom-control-label" for="customRadio1">Direct Bank Transfer</label>
										<p>This feature is currently not available.</p>
									</div>						
						
								</li>
								
								<li>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" checked>
										<label class="custom-control-label" for="customRadio2">Pay online</label>
									</div>	
								</li>
							</ul>     
                        </div>
						
                        <div class="qc-button">
                            <a href="javascript:void(0)" onclick="payCard({ref: '<?php echo e($ref); ?>',anon: true,pod: true}); return false;" class="btn border-btn" tabindex="0">Place Order</a>
                        </div>
                    </div>
					
                </div>
            </div>
        </section>
			
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\fortune-store\resources\views/checkout.blade.php ENDPATH**/ ?>