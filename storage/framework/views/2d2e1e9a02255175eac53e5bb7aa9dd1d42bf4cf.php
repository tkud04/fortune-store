

<?php $__env->startSection('title',"Checkout"); ?>

<?php $__env->startSection('scripts'); ?>
<script>

	console.log("anon");
	let anon = true;
	$('#payment-type-acd').hide();
	$('#fieldset-2').hide();
	$('#fieldset-3').hide();
	$('#fieldset-4').hide();
	$('#fieldset-5').hide();
	$('#ca-preview-prepaid').hide();
	$('#ca-preview-pod').hide();

</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <!--start of middle sec-->
<div class="middle-sec wow fadeIn animated animated" data-wow-offset="10" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s;">
    <div class="page-header">
      <div class="container text-center">
        <h2 class="text-primary text-uppercase">checkout</h2>
      </div>
    </div>
    <section class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="inner-ad">
            <figure><img class="img-responsive" src="<?php echo e($ad); ?>" width="1170" height="100" alt=""></figure>
          </div>
        </div>
        <div class="col-sm-12 equal-height-container">
          <div class="row">
		   
            <div class="col-sm-4 col-md-3 sub-data-left sub-equal">
              <div id="sticky">
                <section class="col-sm-12">
				<input type="hidden" id="checkout-subtotal" value="<?php echo e($totals['subtotal']); ?>">
                  <h5 class="sub-title text-info text-uppercase">order summary</h5>
                  <ul class="list-group summary">
                    <li class="list-group-item text-uppercase"><strong>items:<span class="pull-right"> <?php echo e($totals['items']); ?></span></strong></li>
                    <li class="list-group-item text-uppercase"><strong>subtotal:<span class="pull-right"> &#8358;<?php echo e(number_format($totals['subtotal'],2)); ?></span></strong></li>
                    <li class="list-group-item text-uppercase"><strong>shipping: <span class="pull-right" id="deliv">...</span></strong></li>
				  </ul>
                </section>
                <section class="col-sm-12">
				  <?php
				   $totalText = "subtotal"; $total = $totals['subtotal'];
				   
				   if(!is_null($user))
				   {
					   $totalText = "total"; $total = $totals['subtotal'] + $totals['delivery'];
				   }
				  ?>
				  <h5 class="sub-title text-info text-uppercase"><?php echo e($totalText); ?></h5>
                  <div class=" summary sum js-total text-center"> <strong id="checkout-total"> &#8358;<?php echo e(number_format($total,2)); ?></strong> </div>
                  <a href="<?php echo e(url('cart')); ?>" class="btn btn-block btn-default hvr-underline-from-center-default"><i class="rm-icon ion-arrow-return-left"></i> return to cart</a>
                </section>
              </div>
			  <br>
			 
			
            </div>
            <div class="col-sm-8 col-md-9 sub-data-left main-sec">
			<?php
			  $fname = ""; $lname = "";
			  $email = ""; $phone = "";
			  $address = ""; $country = "";
			  $state = "none"; $city = ""; $zip = ""; $notes = "";
			  $rd = "";
			  
			  if(!is_null($user))
			  {
				 $rd = "readonly";
				$fname = $user->fname; $lname = $user->lname;
			    $email = $user->email; $phone = $user->phone;
			    $address = $ss['address']; $state = $ss['state']; 
				$city = $ss['city']; $zip = $ss['zipcode']; $notes = "";  
			  }
			  
			  //for tests
			  $secureCheckout = "https://www.aceluxurystore.com/checkout";
			  $unsecureCheckout = url('checkout');
			  $securePay = "https://www.aceluxurystore.com/pay";
			  $unsecurePay = url('pay');
			  $securePOD = "https://www.aceluxurystore.com/pod";
			  $unsecurePOD = url('pod');
			  
			  $isSecure = (isset($secure) && $secure);
			  $pay = $isSecure ? $securePay : $unsecurePay;
			  $checkout = $isSecure ? $secureCheckout : $unsecureCheckout;
			  $pod = $isSecure ? $securePOD : $unsecurePOD;
			  
		    ?>
				 <input type="hidden" id="bank-action" value="<?php echo e($checkout); ?>">
                            	<input type="hidden" id="card-action" value="<?php echo e($pay); ?>">
                            	<input type="hidden" id="pod-action" value="<?php echo e($pod); ?>">

                            	
                             
							
              <div class="row"> 
                
                <!--start of breadcrumb-->
                <div class="col-sm-12">
                  <ol class="breadcrumb dashed-border row">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li class="active">checkout</li>
                  </ol>
                </div>
                <!--end of breadcrumb--> 
                <div class="col-sm-12 mb-20">
			  <div class="alert alert-info" role="alert"><i class="ion-information-circled"></i> Returning customer? <a href="javascript:void(0)" data-toggle="modal" data-target="#login-box">Click here to login</a></div>
			</div><br><br>
                <!--start of checkout-->
                <div class="col-sm-12">
				 <div class="row">
				   <div class="col-sm-6" style="margin-bottom: 10px;">				    
				    <center>
					 <div class="alert alert-warning" role="alert"><i class="ion-information-circled"></i>Don't have an account? <a href="javascript:void(0)">It's easy to sign up! With an account you get to access some of the awesome features of our website.</a></div>
				      <a class="btn btn-primary btn-lg" href="javascript:void(0)" onclick="showCheckout('new')">CREATE AN ACCOUNT</a>
					</center>
				   </div>
				   <div class="col-sm-6">
				    <center>
					   <div class="alert alert-success" role="alert"><i class="ion-information-circled"></i>Don't want to waste time? <a href="javascript:void(0)">Great! Just give us a name, your contact details to reach you and make your payment.</a></div>
				      <a class="btn btn-primary btn-lg" href="javascript:void(0)" onclick="showCheckout('anon')">PROCEED TO CHECKOUT</a>
					</center>
				   </div>
				 </div><br><br>
                </div>
				
				<div class="col-sm-12" id="checkout-new">
				<?php if(is_null($user)): ?>
                  <form role="form" action="<?php echo e(url('register')); ?>" method="post">
			    <?php else: ?>
                  <form role="form" id="checkout-form" method="post">
			                <!-- payment form -->
                            	<input type="hidden" name="email" value="<?php echo e($email); ?>"> 
                            	<input type="hidden" name="quantity" value="1"> 
                            	<input type="hidden" name="amount" value="<?php echo e(($totals['subtotal'] + $totals['delivery']) * 100); ?>"> 
                            	<input type="hidden" name="metadata" id="nd" value="" > 
                            
                                <input type="hidden" id="meta-comment" value="">  
                            <!-- End payment form -->

			    <?php endif; ?>
				<?php echo csrf_field(); ?>

				<input type="hidden" id="href" name="u" value="">
		   <script>
		     document.querySelector('#href').value = document.location.href;
		   
								 mc = {"ref":"<?php echo e($ref); ?>",
								       "type":"checkout",
								       "email":"<?php echo e($email); ?>",
								       "phone":"<?php echo e($phone); ?>",
								       "address":"<?php echo e($address); ?>",
								       "city":"<?php echo e($city); ?>",
								       "state":"<?php echo e($state); ?>",
									   "notes":""
									  };
                             
           </script>
                    <div class="row"> 
                      
                      <!-- START Presonal information -->
                      <fieldset class="col-md-12">
                        <legend>Billing Details</legend>
                        
                        <!-- Name -->
                         <div class="row">
                          <div class="col-sm-6 form-group">
                            <label class="control-label" for="fname">First Name</label>
                            <input type="text" id="fname" name="fname" value="<?php echo e($fname); ?>" class="form-control" <?php echo e($rd); ?>>
						  </div>
						  <div class="col-sm-6 form-group">
                            <label class="control-label" for="lname">Last Name</label>
                            <input type="text" id="lname" name="lname" value="<?php echo e($lname); ?>" class="form-control" <?php echo e($rd); ?>>
						  </div>
                         </div>
						 
						 <!-- Email and phone -->
                         <div class="row">
                          <div class="col-sm-6 form-group">
                            <label class="control-label" for="email">Email address</label>
                            <input type="text" id="email" name="email" value="<?php echo e($email); ?>" class="form-control" <?php echo e($rd); ?>>
						  </div>
						  <div class="col-sm-6 form-group">
                            <label class="control-label" for="lname">Phone number</label>
                            <input type="text" id="phone" name="phone" value="<?php echo e($phone); ?>" class="form-control" <?php echo e($rd); ?>>
						  </div>
                         </div>
                        
                        <!-- Address -->
                        <div class="form-group">
                          <label class="control-label" for="address">Shipping address</label>
                          <input type="text" id="address" name="address" value="<?php echo e($address); ?>" class="form-control" <?php echo e($rd); ?>>
                        </div>
                        
                        <!-- Country and state -->
                        <div class="row">
                          <div class="col-sm-6 form-group">
                            <label class="control-label" for="city">City</label>
                            <input type="text" id="city" name="city" value="<?php echo e($city); ?>" class="form-control" <?php echo e($rd); ?>>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label class="control-label" for="state">State</label>
                            <select class="selectpicker" id="state" name="state" value="<?php echo e($state); ?>" style="display: none;">
							<option value="none">Select state</option>
							<?php
							 if(is_null($user))
							 {
							 foreach($states as $key => $value)
							 {
								 $sss = $key == $state ? "selected='selected'" : "";
						    ?>
                              <option value="<?php echo e($key); ?>"<?php echo e($sss); ?>><?php echo e(ucwords($value)); ?></option>
							<?php
							 }
							 }
							 else
							 {
							?>
							   <option value="<?php echo e($state); ?>" selected><?php echo e($states[$state]); ?></option>
							<?php
							 }
                            ?>							
                            </select>
                          </div>
                        </div>
                        
                        <!-- City and Zip code -->
                        <div class="row">
						  <div class="col-sm-12 form-group">
                            <label class="control-label" for="country">Country</label>
                            <select class="selectpicker" id="country" style="display: none;">
                              <option>Nigeria</option>
                            </select>
                          </div>
                        </div>
                      </fieldset>
                      <!-- END Personal information-->                      
                   
                    </div>
                    
                    <!-- Agree checkbox and Continue button -->
                    <div class="row">
					  <?php if(!is_null($user)): ?>
                      <div class="col-sm-12">
                        <fieldset>
                          <legend>order notes</legend>
                          <textarea class="form-control" rows="5" cols="40" name="notes" id="notes" required=""></textarea>
                          <hr>
                        </fieldset>
                      </div>
					  <?php endif; ?>
                      <div class="col-sm-6">
                        <div class="checkbox small">
						<?php
						$checked = " checked";
						?>
                          <input type="checkbox" id="terms" value="on" name="terms"<?php echo e($checked); ?>>
                          <label for="terms">Do you agree to the <a href="<?php echo e(url('returns')); ?>">terms?</a></label>
                        </div>
                      </div>
                      <div class="col-sm-6 text-right">
                        
                      </div>
                    </div>
					
					<?php if(is_null($user)): ?>
					<!-- Email and phone -->
                         <div class="row">
                          <div class="col-sm-6 form-group">
                            <label class="control-label" for="pass">Password</label>
                            <input type="password" id="pass" name="pass" class="form-control">
						  </div>
						  <div class="col-sm-6 form-group">
                            <label class="control-label" for="pass2">Confirm password</label>
                            <input type="password" id="pass2" name="pass_confirmation" class="form-control">
						  </div>
                         </div>
						 
					<div class="row" style="margin-bottom: 20px;">
					  <div class="col-sm-12">
					    <input type="submit" class="btn btn-primary" value="Submit">
					  </div>
					</div>
                 </form>
			    <?php else: ?>
                  </form>
			    <?php endif; ?>
                  
                </div>
				
                <div class="col-sm-12" id="checkout-anon">
				  
                  <form role="form" id="checkout-form" method="post">
			                <!-- payment form -->
                            	<input type="hidden" name="email"> 
                            	<input type="hidden" name="quantity" value="1"> 
                            	<input type="hidden" name="amount" id="ca-amount" value="<?php echo e(($totals['subtotal'] + $totals['delivery']) * 100); ?>"> 
                            	<input type="hidden" name="metadata" id="nd" value="" > 
                            
                                <input type="hidden" id="meta-comment" value="">  
                            <!-- End payment form -->

			    <?php echo csrf_field(); ?>

				<input type="hidden" id="href" name="u" value="">
				                            	<input type="hidden" name="courier" id="ca-courierr" value="">
					<input type="hidden" name="pod-bank" id="ca-pod" value="no">
		   <script>
		     document.querySelector('#href').value = document.location.href;
		   
								 mc = {"ref":"<?php echo e($ref); ?>",
								       "type":"checkout",
								       "email":"<?php echo e($email); ?>",
								       "phone":"<?php echo e($phone); ?>",
								       "address":"<?php echo e($address); ?>",
								       "city":"<?php echo e($city); ?>",
								       "state":"<?php echo e($state); ?>",
									   "notes":""
									  };
                             
           </script>
                    <div class="row"> 
                      
                      <!-- START Shipping information -->
                      <fieldset class="col-md-12" style="margin-bottom: 15px;" id="fieldset-1">
					    <legend>Billing Details</legend>
						 <!-- Name  -->
                         <div class="row">
                          <div class="col-sm-12 form-group">
                           <label class="control-label" for="ca-name">Name</label>
                            <input type="text" id="ca-name" name="name" class="form-control" <?php echo e($rd); ?>>
						  </div>
                         </div>
						 
						 <!-- Name and phone -->
                         <div class="row">
                          <div class="col-sm-6 form-group">
                           <label class="control-label" for="ca-email">Email address</label>
                            <input type="text" id="ca-email" name="email" class="form-control" <?php echo e($rd); ?>>
						  </div>
						  <div class="col-sm-6 form-group">
                            <label class="control-label" for="ca-phone">Phone number</label>
                            <input type="text" id="ca-phone" name="phone" class="form-control" <?php echo e($rd); ?>>
						  </div>
                         </div>
						
						 <div class="row" style="margin-bottom: 20px;">
					       <div class="col-sm-12">
					        <a href="javascript:void(0)" class="btn btn-primary" onclick="fi_next(1); return false;">Next</a>
					       </div>
					     </div>
					  </fieldset>
					  <!-- START Shipping information -->
					  
					  <!-- START Presonal information -->
                      <fieldset class="col-md-12" id="fieldset-2">
					    <legend>Shipping Details</legend>
						 <!-- Address -->
                        <div class="row">
						<div class="col-sm-6 form-group">
                          <label class="control-label" for="address">Shipping address</label>
                          <input type="text" id="ca-address" name="address" class="form-control" <?php echo e($rd); ?>>
                        </div>
						<div class="col-sm-6 form-group">
                            <label class="control-label" for="city">City</label>
                            <input type="text" id="ca-city" name="city" class="form-control" <?php echo e($rd); ?>>
                          </div>
						</div>
						 <!-- Country and state -->
                        <div class="row">
                          <div class="col-sm-6 form-group">
                            <label class="control-label" for="state">State</label>
                            <select class="selectpicker" id="ca-state" name="state" value="<?php echo e($state); ?>" style="display: none;">
							<option value="none">Select state</option>
							<?php
							 if(is_null($user))
							 {
							 foreach($states as $key => $value)
							 {
								 $sss = $key == $state ? "selected='selected'" : "";
						    ?>
                              <option value="<?php echo e($key); ?>"<?php echo e($sss); ?>><?php echo e(ucwords($value)); ?></option>
							<?php
							 }
							 }
							 else
							 {
							?>
							   <option value="<?php echo e($state); ?>" selected><?php echo e($states[$state]); ?></option>
							<?php
							 }
                            ?>							
                            </select>
                          </div>
						  <div class="col-sm-6 form-group">
                            <label class="control-label" for="country">Country</label>
                            <select class="selectpicker" id="ca-country" style="display: none;">
                              <option selected="selected">Nigeria</option>
                            </select>
                          </div>
                        </div>
						
						 <div class="row" style="margin-bottom: 20px;">
					       <div class="col-sm-12">
					        <a href="javascript:void(0)" class="btn btn-default" onclick="fi_back(2); return false;">Back</a>
					        <a href="javascript:void(0)" class="btn btn-primary" onclick="fi_next(2); return false;">Next</a>
					       </div>
					     </div>
                        
                      </fieldset>
                      <!-- END Personal information-->
					  
					  <!-- START Courier info-->
                      <fieldset class="col-md-12" id="fieldset-3">
                        <legend>Checkout</legend>
						<!-- Country and state -->
                        <div class="row">
                          <div class="col-sm-12 form-group">
                            <label class="control-label" for="courier">Select payment/delivery method</label>
                            <div id="ca-courier">
							  <table class="table ace-table" id="courier-table">
							    <thead>
								  <tr>
								    <th>Courier</th>
								    <th>Payment type</th>
								    <th>Coverage</th>
								    <th>Delivery time</th>
								    <th>Price</th>
								    <th>Action</th>
								  </tr>
								</thead>
							    <tbody></tbody>
							  </table>					
                            </div>
                          </div>
						 </div>
						 
						 <div class="row" style="margin-bottom: 20px;">
					       <div class="col-sm-12">
					        <a href="javascript:void(0)" class="btn btn-default" onclick="fi_back(3); return false;">Back</a>
					        <a href="javascript:void(0)" class="btn btn-primary" onclick="fi_preview(); return false;"> Next</a>
					       </div>
					     </div>
                        
                      </fieldset>
                      <!-- END Courier info-->  
					  
					  <!-- START preview and checkout-->
                      <fieldset class="col-md-12" id="fieldset-4">
                        <legend>Preview</legend>
						<!-- Pay Now -->					 
						 <div class="row" id="ca-preview-prepaid" style="margin-bottom: 20px;">
						   <div class="col-sm-6 form-group">
                             Make your payment directly into our bank account. Please use your order reference # as the payment reference. Your order will not be shipped until the funds have cleared in our account. <br><br>
						     <center> <button onclick="payBank(); return false;" class="btn btn-primary hvr-underline-from-center-primary " type="button">pay to bank</button></center>
                           </div>
						   <div class="col-sm-6 form-group">
                              <img class="img img-responsive" src="images/ps.png"> <br><br>
						      <center> <a href="javascript:void(0)" onclick="payCard({ref: '<?php echo e($ref); ?>',anon: true}); return false;" class="btn btn-primary hvr-underline-from-center-primary ">pay with card</a></center>
                           </div>
					       <div class="col-sm-12">
					        <a href="javascript:void(0)" class="btn btn-default" onclick="fi_back(4); return false;">Back</a>
					       </div>
					     </div>
						 
						 <!-- Pay on Delivery -->					 
						 <div class="row" id="ca-preview-pod" style="margin-bottom: 20px;">
						   <div class="col-sm-12 form-group">
                             Make your payment on delivery to your doorstep. Please use your order reference # as the payment reference. <br><br>
						      <center> <a href="javascript:void(0)" onclick="fi_pod(); return false;" class="btn btn-primary hvr-underline-from-center-primary ">pay on delivery</a></center>
                           </div>
					       <div class="col-sm-12">
					        <a href="javascript:void(0)" class="btn btn-default" onclick="fi_back(4); return false;">Back</a>
					       </div>
					     </div>
                        
                      </fieldset>
                      <!-- END preview and checkout-->       

					  <!-- START pod checkout -->
                      <fieldset class="col-md-12" id="fieldset-5">
                        <legend>Pay on delivery</legend>
						<!-- Pay Now -->					 
						 <div class="row" style="margin-bottom: 20px;">
						   <div class=" summary sum js-total text-center">All Payment on Delivery orders attract a down payment of 50% of the total amount at checkout.</div>
						   <h5>50% of total amount: &#8358;<span id="pod-amount"></span></h5>
						   
						 </div>
						 <div class="row" style="margin-bottom: 20px;">
						   <div class="col-sm-6 form-group">
                             Make your payment directly into our bank account. Please use your order reference # as the payment reference. <br><br>
						     <center> <button onclick="payBank({pod:true}); return false;" class="btn btn-primary hvr-underline-from-center-primary " type="button">pay to bank</button></center>
                           </div>
						   <div class="col-sm-6 form-group">
                              <img class="img img-responsive" src="images/ps.png"> <br><br>
						      <center> <a href="javascript:void(0)" onclick="payCard({ref: '<?php echo e($ref); ?>',anon: true,pod: true}); return false;" class="btn btn-primary hvr-underline-from-center-primary ">pay with card</a></center>
                           </div>
					       <div class="col-sm-12">
					        <a href="javascript:void(0)" class="btn btn-default" onclick="fi_back(5); return false;">Back</a>
					       </div>
					     </div>
						
                      </fieldset>
                      <!-- END pod checkout-->                      
                   
                    </div>
                    
                    <!-- Agree checkbox and Continue button -->
                    <div class="row">
					  <div class="col-sm-2">
                        <div class="checkbox small">
						<?php
						$checked = " checked";
						?>
                          <input type="checkbox" id="ca-terms" value="on" name="terms"<?php echo e($checked); ?>>
                          <label for="terms">Do you agree to the <a href="<?php echo e(url('returns')); ?>">terms?</a></label>
                        </div>
                      </div>
					  <div class="col-sm-10">
                        <fieldset>
                          <legend>order notes</legend>
                          <textarea class="form-control" rows="5" cols="40" name="notes" id="ca-notes" required=""></textarea>
                          <hr>
                        </fieldset>
                      </div>
					  
                    </div>

                 </form>
				</div>
                <!--end of checkout--> 
                
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--end of middle sec--> 
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ace\resources\views/anon-checkout.blade.php ENDPATH**/ ?>