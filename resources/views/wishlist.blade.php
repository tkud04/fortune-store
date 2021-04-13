<?php
$title = "My Wishlist";
$ph = true;
$pcClass = "";
?>
@extends('layout')

@section('content')
				<div class="container">
				<div class="row">
				<div class="col-md-12 mb-4">
					<?php
							    if(count($wishlist) > 0)
								{
							   ?>
							       <table class="table cart-table cart_prdct_table etuk-table text-center mt-2 mb-5">
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
										   <a href="{{$uu}}" class="mb-2">
										     <figure>
											  <img src="{{$imggs[0]}}" width="60" height="60" alt="{{$displayName}}">
										     </figure>
									       </a>
									       <a href="{{$uu}}">{{$displayName}}</a> <b class="badge badge-success">&#8358;{{number_format($amount,2)}}</b>
										   </div>
                                       </td>
									    <td>
										<a href="{{$uu}}" class="mb-3 mr-3 btn btn-primary btn-reveal-right"><span>VIEW</span></a>
										<a href="{{$cu}}" class="mb-3 mr-3 btn btn-primary btn-reveal-right"><span>ADD TO CART</span></a>
										<a href="{{$du}}" class="mb-3 mr-3 btn btn-primary btn-reveal-right"><span>REMOVE</span></a>
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
								<a href="{{url('shop')}}" class="btn btn-primary">Go Shopping</a>
								<?php
								}
						
								?>
				  </div>
				  </div>
				</div>
@stop
