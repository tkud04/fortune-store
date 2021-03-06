<?php
$title = "Contact Us";
$ph = true;
$pcClass = "";
?>
@extends('layout')

@section('content')
<!-- Contact Page -->
		<div class="contact_page_area fix">
			<div class="container">					
				<div class="row">
					<div class="contact_frm_area text-left col-lg-6 col-md-12 col-xs-12">
						<h3>Get in Touch</h3>
						<p>Looking for help? Fill the form and we'll get back to you.</p>
						<form action="{{url('contact')}}" method="post">
							{!! csrf_field() !!}
							<div class="form-row">
								<div class="form-group col-sm-6"><input type="text" class="form-control" name="name" placeholder="Name*" /></div>
								<div class="form-group col-sm-6"><input type="text" class="form-control" name="email" placeholder="Email*" /></div>
							</div>

							<div class="form-group">
								<input type="text" class="form-control" name="subject" placeholder="Subject" />
							</div>
				
							<div class="form-group">
								<textarea name="msg" class="form-control" placeholder="Message"></textarea>
							</div>
							
							<div class="input-area submit-area"><button class="btn border-btn" type="submit" >Send Message</button></div>
							
						</form>		
					</div>	
				
					<div class="contact_info col-lg-6 col-md-12 col-xs-12">
						<h3>Contact Info</h3>
						<p class="subtitle">
							Luxfabriqs Fashion
						</p>
						<div class="single_info">
							<div class="con_icon"><i class="fa fa-map-marker"></i></div>
							<p>Ikeja <br />Lagos, NG 10001 </p>
						</div>
						<div class="single_info">
							<div class="con_icon"><i class="fa fa-phone"></i></div>
							<p>Call : 07045777852</p>
							<p>Whatsapp : 08023423578</p>
							
						</div>
						<div class="single_info">
							<div class="con_icon"><i class="fa fa-instagram"></i></div>
							<p><a href="https://www.instagram.com/hne_care">Instagram: <span class="__cf_email__">hne_care</span> </a></p>
						</div>
						<div class="single_info">
							<div class="con_icon"><i class="fa fa-envelope"></i></div>
							<a href="javascript:void(0)"><span class="__cf_email__">{{$pe['email']}}</span> </a>
						</div>
						
						
					</div>
				</div>
			</div>
		
							
			<div class="fix">
				<div id="contact_map_area"></div>
			</div>	
				
		</div>
@stop
