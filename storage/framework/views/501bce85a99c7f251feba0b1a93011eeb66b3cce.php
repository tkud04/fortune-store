<?php
$title = "Order #".$o['reference'];
$ph = true;
$pcClass = "";
?>



<?php $__env->startSection('title',$title); ?>


<?php $__env->startSection('content'); ?>
<script>
let xf = "", products = [], pCover = "none", tkOrderHistory = "<?php echo e(csrf_token()); ?>",
    orderProducts = [], eoPaymentXF = "new", eoShippingXF = "new",
	shipping = {
		id: "<?php echo e($shipping['id']); ?>",
		name: "<?php echo e($shipping['name']); ?>",
		value: "<?php echo e($shipping['value']); ?>",
	};

  

$(document).ready(() => {
	hideElem(["#eo-loading"]);
	
	 <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	  products.push({
		  id: "<?php echo e($p['id']); ?>", 
		  name: "<?php echo e($p['name']); ?>", 
		  sku: "<?php echo e($p['sku']); ?>", 
		  qty: "<?php echo e($p['qty']); ?>", 
		  amount: "<?php echo e($p['data']['amount']); ?>"
		  });
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
 <?php $__currentLoopData = $o['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	  orderProducts.push({p: <?php echo e($i['product_id']); ?>, q: <?php echo e($i['qty']); ?>});
	  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  
	  refreshProducts({type: "normal", target: "#order-products", t: 'order'});
		   refreshProducts({type: "review", target: "#order-products-review", t: 'order'});
		   refreshProducts({type: "review", target: "#order-products-2", t: 'order'});
});
</script>

<?php
$pd = $o['pd'];
$sd = $o['sd'];
$customer = $o['user'];
$cname = $customer['fname']." ".$customer['lname'];

$payment_method = "Credit Card/Debit Card";
$shipping_method = $shipping['name']." - &#8358;".number_format($shipping['value'],2);

$pu = url('invoice')."?xf=".$o['reference'];
$su = url('shipping-list')."?xf=".$o['reference'];
$eu = url('order')."?xf=".$o['id']."&type=edit";
?>I

<div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
	    <div class="text-right" id="ap-submit">
	      <a href="<?php echo e($pu); ?>" target="_blank" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Print Invoice"><i class="fa fa-print"></i></a>
	     <!-- <a href="<?php echo e($su); ?>" target="_blank" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Print Shipping List"><i class="fa fa-truck"></i></a> -->
	     <a href="<?php echo e(url('orders')); ?>" class="btn btn-primary"><i class="fa fa-reply"></i></a>
	    </div>
	  </div>
      
	  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-6 mb-3">
	    <div class="card">
           <div class="card-body">
                <h3 class="card-title"><i class="fa fa-user"></i> Order Details</h3>
           </div>
           <ul class="list-group list-group-flush">
		   
                <li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Date added"><i class="fa fa-calendar"></i> </span>
				  <?php echo e($o['date']); ?>

				</li>
				<li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Payment method"><i class="fa fa-credit-card"></i> </span>
				  <?php echo e($payment_method); ?>

				</li>
				<li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shipping method"><i class="fa fa-truck"></i> </span>
				  <?php echo $shipping_method; ?>

				</li>
           </ul>
        </div>
	  </div>
	  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-6 mb-3">
	    <div class="card">
           <div class="card-body">
                <h3 class="card-title"><i class="fa fa-user"></i> Customer Details</h3>
           </div>
           <ul class="list-group list-group-flush">
		   
                <li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Customer name"><i class="fa fa-user"></i> </span>
				  <?php echo e(ucwords($cname)); ?>

				</li>
				<li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Customer email"><i class="fa fa-envelope"></i> </span>
				  <?php echo e(ucwords($customer['email'])); ?>

				</li>
				<li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Customer phone number"><i class="fa fa-phone"></i> </span>
				  <?php echo e(ucwords($customer['phone'])); ?>

				</li>
           </ul>
        </div>
	  </div>
	  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
	    <div class="card">
           <div class="card-body">
                <h3 class="card-title"><i class="fa fa-user"></i> Order #<?php echo e($o['reference']); ?></h3>
				<div class="table-responsive mb-5">
				  <table class="table table-striped table-bordered first etuk-table">
                                              <thead>
                                                <tr>
                                                  <th>Shipping Address</th>
                                                </tr>
                                              </thead>
                                              <tbody>
										      <?php
											  
											  ?>
											   <tr>
												  <td>
											      <?php echo e(strtoupper($cname)); ?><br>
											      <?php echo e(strtoupper($sd['address_1'])); ?><br>
											      <?php if($sd['address_2'] != ""): ?><?php echo e(strtoupper($sd['address_2'])); ?><br><?php endif; ?>
											      <?php echo e(strtoupper($sd['city'])." ".$sd['zip']); ?><br>
											      <?php echo e(strtoupper($sd['region'])); ?><br>
											      <?php echo e(ucwords($countries[$sd['country']])); ?><br>
											      </td>											  
											   </tr>
											  <?php
											  
											  ?>
									    	  </tbody>
					</table>
				</div>
				<div class="table-responsive mb-5">
				   <table class="table table-striped table-bordered first etuk-table">
                                              <thead>
                                                <tr>
                                                  <th>Product</th>
                                                  <th>Model</th>
												  <th>Quantity</th>
                                                  <th>Unit price</th>
                                                  <th>Total</th>
                                                </tr>
                                              </thead>
                                              <tbody id="order-products-2">
										        <?php
												
												?>
												 
												<?php
												
												?>
									    	  </tbody>
											 </table>
				</div>
           </div>
		</div>
	  </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	   <h3 class="mb-2"><i class="fa fa-comment-o"></i> Order History</h3>
         <div class="mt-5 mb-5">
                                             <table class="table table-striped table-bordered first etuk-table">
                                              <thead>
                                                <tr>
                                                  <th>Date added</th>
                                                  <th>Comment</th>
												  <th>Status</th>
                                                </tr>
                                              </thead>
                                              <tbody>
										      <?php
											    foreach($o['history'] as $t)
												{
													$ts = $statuses[$t['status']];
											  ?>
											   <tr>
											     <td><?php echo e($t['date']); ?></td>
											     <td><?php echo e($t['comment']); ?></td>
											     <td><b><?php echo e(strtoupper($ts)); ?></b></td>
											   </tr>
											  <?php
												}
											  ?>
									    	  </tbody>
											 </table>
										     </div>         
        </div>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\fortune-store\resources\views/order.blade.php ENDPATH**/ ?>