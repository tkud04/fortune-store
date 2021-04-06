<?php
$title = "Checkout";
$ph = true;
$pcClass = "";
?>
@extends('layout')

@section('content')
<!-- Checkout Page -->

<script>
let pd = [], sd = [], ppd = null, pm = "none";

$(document).ready(() => {

@if(count($pd) > 0)
  @foreach($pd as $p)
   pd.push({
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
			
<section class="checkout_page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title">
                            <h3>Your Details</h3> <h3>Your Details</h3>
                        </div>
                        <form class="checkout_form" action="{{url('checkout')}}" method="post" id="checkout-form">
						   {!! csrf_field() !!}
						    <input type="hidden" id="pm" name="pm" value="">
							
							<div id="accordion">
							   <div class="card border-light">
                                  <div class="card-header" id="heading1-1">
                                     <a data-toggle="collapse" data-target="#collapse1-1" href="javascript:void(0)" aria-expanded="true" aria-controls="collapse1-1">Billing Details</a>
                                  </div>
								  <div id="collapse1-1" class="collapse show" aria-labelledby="heading1-1" data-parent="#accordion">
								     <div class="card-body">
							           <div class="form-row">
								         <div class="form-group col-md-12">
										   <div class="custom-select-wrapper">
									       <select class="custom-select" id="checkout-pd" name="pd">
									       <option value="none">Add new billing detail</option>
										<?php
										 if(count($pd) > 0)
										 {
											 foreach($pd as $p)
											 {
										?>
									    <option value="{{$p['id']}}">{{$p['address_1'].", ".$p['city'].", ".strtoupper($p['country'])}}</option>
									    <?php
											 }
										 }
										?>
									       </select>
										   </div>
								         </div>
								
								         <div class="form-group col-md-6">								
									      <label>First Name *</label>
										   <input type="text" class="form-control" id="pd-fname" name="pd-fname" required="">
								         </div>
										 <div class="form-group col-md-6">								
									      <label>Last Name *</label>
										  <input type="text" class="form-control" id="pd-lname" name="pd-lname" required="">
								         </div>
							           </div>
							
                                       <div class="form-group">      
                                        <label>Company Name(Optional)</label>
								        <input type="text" class="form-control" id="pd-company" name="pd-company" required="">                     
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
									        <select id="pd-country" name="pd-country" class="custom-select">
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
			
@stop
