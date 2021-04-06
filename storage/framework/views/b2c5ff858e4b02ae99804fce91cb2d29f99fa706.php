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
                            <h3>Your Details</h3> <h3>Your Details</h3>
                        </div>
                        <form class="checkout_form" action="<?php echo e(url('checkout')); ?>" method="post" id="checkout-form">
						   <?php echo csrf_field(); ?>

						    <input type="hidden" id="pm" name="pm" value="">
							
							<div id="accordion">
							   <div class="card border-light">
                                        <div class="card-header" id="heading1-1">
                                            <a data-toggle="collapse" data-target="#collapse1-1" href="javascript:void(0)" aria-expanded="true" aria-controls="collapse1-1">Billing Details</a>
                                        </div>
								  <div id="collapse1-1" class="collapse show" aria-labelledby="heading1-1" data-parent="#accordion">
								     <div class="card-body">
							<div class="form-row">
								<div class="form-group col-md-6">
									<input name="first_name" placeholder="First name" class="form-control" type="text">
								</div>
								
								 <div class="form-group col-md-6">								
									<input name="last_name" placeholder="Last name" class="form-control" type="text">
								</div>
							</div>
							
                            <div class="form-group">      
                                  <input name="company_name" placeholder="Company name" class="form-control" type="text">                         
                            </div>
							
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input name="email" placeholder="Email address" class="form-control" type="email">
                                </div>
                           
      
                                <div class="form-group col-md-6">
                                    <input name="phone" placeholder="Phone number" class="form-control" type="text">
                                </div>
							</div>
								
                            <div class="form-group">  
								<label for="country">Country:</label>
								<div class="custom-select-wrapper">
									<select id="country" class="custom-select">
										<option value="canada">Canada *</option>
										<option value="american">American</option>
										<option value="australia">Australia</option>
									</select>
								</div>
                            </div>
							
							
                            <div class="form-group">
								<label for="address">Address:</label>    
								<textarea rows="3" name="street" id="address" placeholder="Street address. Apartment, suite, unit etc. (optional)" class="form-control"></textarea>
                            </div>
							
                             <div class="form-row">
                               <div class="form-group col-md-6">
                                    <input name="code" placeholder="Post code / Zip" class="form-control" type="text">
                                </div>
								
								 <div class="form-group col-md-6">
                                    <input name="city" placeholder="Town / City" class="form-control" type="text">
                                </div>								
                            </div>

                            <div class="form-group">
								<label for="address">Order note:</label>    
								<textarea rows="3" name="street" placeholder="Order note" class="form-control"></textarea>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck1">
									<label class="custom-control-label" for="customCheck1">SHIP TO A DIFFERENT ADDRESS?</label>
								</div>                             
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
										<th class="product-name">Product Name</th>
										<th class="product-total">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="product-name">Pack</td>
										<td class="product-total"><span>$20.00</span></td>
									</tr>
									<tr>
										<td class="product-name">Deluxe Pack</td>
										<td class="product-total"><span>$80.00</span></td>
									</tr>
									<tr>
										<td class="product-name">Anti Mask</td>
										<td class="product-total"><span>$40.00</span></td>
									</tr>
									<tr class="sub-total">
										<td class="product-name">Sub Total</td>
										<td class="product-total"><span>$140.00</span></td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>Total</th>
										<td><span class="amount">$140.00</span></td>
									</tr>
								</tfoot>
							</table>
						</div>
						
                        <div class="payment_method">           
							<ul>
								<li>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
										<label class="custom-control-label" for="customRadio1">Direct Bank Transfer</label>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed lobortis sem. Quisque at 
										sapien ut odio</p>
									</div>						
						
								</li>
								
								<li>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
										<label class="custom-control-label" for="customRadio2">PayPal</label>
									</div>	
								</li>
							</ul>     
                        </div>
						
                        <div class="qc-button">
                            <a href="#" class="btn border-btn" tabindex="0">Place Order</a>
                        </div>
                    </div>
					
                </div>
            </div>
        </section>
			
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\fortune-store\resources\views/checkout.blade.php ENDPATH**/ ?>