<?php
$title = "Checkout";
$ph = true;
$pcClass = "";
$ii = count($cart) == 1 ? "item" : "items";
 $subtotal = 0;
				                   for($a = 0; $a < count($cart); $a++)
				                   {
					                 $item = $cart[$a]['product'];
									 $xf = $item['id'];
					                 $qty = $cart[$a]['qty'];
					                 $itemAmount = $item['data']['amount'];
									 $subtotal += ($itemAmount * $qty);
								   }

 //for tests
			  $secureCheckout = "http://luxfabriqs.tobi-demos.tk/checkout";
			  $unsecureCheckout = url('checkout');
			  $securePay = "http://luxfabriqs.tobi-demos.tk/pay";
			  $unsecurePay = url('pay');
			  
			  $isSecure = (isset($secure) && $secure);
			  $pay = $isSecure ? $securePay : $unsecurePay;
			  $checkout = $isSecure ? $secureCheckout : $unsecureCheckout;
?>
@extends('layout')

@section('content')
<!-- Checkout Page -->

<script>
let pd = [], sd = [], ppd = null, pm = "none";

$(document).ready(() => {

//$('.edh').prop("readonly", true );

@if(count($sd) > 0)
  @foreach($sd as $p)
   sd.push({
	  xf: "{{$p['id']}}",
	  fname: "{{$p['fname']}}",
	  lname: "{{$p['lname']}}",
	  company: "{{$p['company']}}",
	  address_1: "{{$p['address_1']}}",
	  address_2: "{{$p['address_2']}}",
	  city: "{{$p['city']}}",
	  region: "{{$p['region']}}",
	  zip: "{{$p['zip']}}",
	  country: "{{$p['country']}}",
   });
  @endforeach
@endif

});
</script>
		
<input type="hidden" id="card-action" value="{{$pay}}">
                            	<input type="hidden" id="checkout-cc" value="{{count($cart)}}">
		
<section class="checkout_page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title">
                            <h3>Your Details</h3>
                        </div>
                        <form class="checkout_form" action="{{url('checkout')}}" method="post" id="checkout-form">
						   {!! csrf_field() !!}
						    <input type="hidden" id="pm" name="pm" value="card">
							<input type="hidden" id="checkout-ref" name="ref" value="{{$ref}}">
							<input type="hidden" id="checkout-st" name="st" value="{{$st['id']}}">
							
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
									    <option value="{{$s['id']}}">{{$s['address_1'].", ".$s['city'].", ".strtoupper($s['country'])}}</option>
									    <?php
											 }
										 }
										?>
									       </select>
										   </div>
								         </div>
								
								         <div class="form-group col-md-6">								
									      <label>First Name *</label>
										   <input type="text" class="form-control edh" id="sd-fname" name="sd-fname" required="">
								         </div>
										 <div class="form-group col-md-6">								
									      <label>Last Name *</label>
										  <input type="text" class="form-control edh" id="sd-lname" name="sd-lname" required="">
								         </div>
							           </div>
							
                                       <div class="form-group">      
                                        <label>Company Name(Optional)</label>
								        <input type="text" class="form-control edh" id="sd-company" name="sd-company" required="">                     
                                       </div>
								
                                       <div class="form-group">  
								         <label for="country">Country:</label>
								         <div class="custom-select-wrapper">
									        <select id="sd-country" name="sd-country" class="custom-select edh">
										     <option value="none">Select country</option>
									         <option value="nigeria">Nigeria</option>
										     <?php
										       if(count($countries) > 0)
										        {
											      foreach($countries as $k => $v)
											       {
										      ?>
									         <option value="{{$k}}">{{$v}}</option>
									         <?php
										           }
												}
										     ?>
									        </select>
								         </div>
                                       </div>
							
							           <div class="form-group">
								         <label for="address">Address:</label>    
							             <input type="text" class="form-control mb-2 edh" id="sd-address-1" name="sd-address-1" required="" placeholder="Address line 1*">
								         <input type="text" class="form-control edh" id="sd-address-2" name="sd-address-2" required="" placeholder="Address line 2">
                                       </div>
							
                                       <div class="form-row">
								        <div class="form-group col-md-4">
                                        <input type="text" placeholder="Town / City*" class="form-control edh" id="sd-city" name="sd-city" required="">
                                        </div>		
										
										<div class="form-group col-md-4">
                                        <input type="text" class="form-control edh" placeholder="State / Region*" id="sd-region" name="sd-region" required="">
                                        </div>
													
										<div class="form-group col-md-4">
                                         <input name="code" placeholder="Post code / Zip*" class="form-control edh" id="sd-zip" type="text">
                                        </div>			
                                       </div>

                                        <div class="form-group">
								          <label for="address">Order notes:</label>    
								          <textarea class="form-control edh" cols="30" rows="6" id="notes" name="notes" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>                       
                                        </div>
										
										<div class="form-row">
								        <div class="form-group col-md-6">
                                        <?php
										 if(count($sps) > 0)
										 {
										?>
											<div class="form-group">
												<label>Select saved payment</label>
												<select class="form-control" id="checkout-payment-type">
												  <option value="none">Select a card to pay with</option>
												  <?php
												   foreach($sps as $s)
												   {
													   $dt = $s['data'];
													   $n = $dt->bank." | **** ".$dt->last4." | Expires: ".$dt->exp_month."/".$dt->exp_year;
												  ?>
												    <option value="{{$s['id']}}">{{$n}}</option>
												  <?php
												   }
												  ?>
												  <option value="card">Use a different card</option>
												</select>
											</div>
											
										<?php
										 }
										 else
										 {
										?>
										<div class="form-group">
												<label>Payment type</label>
												<select class="form-control" id="checkout-payment-type">
												  <option value="none">Select payment type</option>
												  <option value="card" selected="selected">Card</option>
												</select>
											</div>
										<?php
										 }
										?>
                                        </div>		
										
										<div class="form-group col-md-6">
                                        <label>Save payment info?</label>
												<select class="form-control" name="sps" id="checkout-sps">
												  <option value="yes" selected="selected">Yes</option>
												  <option value="no">No</option>
												</select>
                                        </div>		
                                       </div>
                                     </div>
                                   </div>
                                </div>
								
                            </div>
							
								 <!-- payment form -->
                            	<input type="hidden" name="email" value="{{$user->email}}"> {{-- required --}}
                            	<input type="hidden" name="quantity" value="1"> {{-- required --}}
                            	<input type="hidden" name="amount" value="{{($subtotal + $st['value']) * 100}}"> {{-- required in kobo --}}
                            	<input type="hidden" name="metadata" id="nd" value="" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                            
							
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
										<td class="product-name"><img src="{{$imgs[0]}}" alt="{{$item['name']}}" class="mb-2" style="width: 80px; height: 80px;" />{{$item['name']}} <strong class="product-quantity">×&nbsp;{{$qty}}</strong></td>
										<td class="product-total"><span>&#8358;{{number_format($itemAmount * $qty,2)}}</span></td>
									</tr>
									<?php
								   }
									?>
									<tr class="sub-total">
										<td class="product-name">Sub Total</td>
										<td class="product-total"><span>&#8358;{{number_format($subtotal,2)}}</span></td>
									</tr>
									<tr class="sub-total">
										<td class="product-name">Shipping</td>
										<td class="product-total"><span>&#8358;{{number_format($st['value'],2)}}</span></td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>Total</th>
										<td><span class="amount">&#8358;{{number_format($subtotal + $st['value'],2)}}</span></td>
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
                            <a href="javascript:void(0)" id="checkout-btn" class="btn border-btn" tabindex="0">Place Order</a>
                        </div>
                    </div>
					
                </div>
            </div>
        </section>
			
@stop
