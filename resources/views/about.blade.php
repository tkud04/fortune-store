<?php
$title = "About Us";
$ph = true;
$pcClass = "";
?>
@extends('layout')

@section('content')
<!-- About Page -->
	
	<div class="about_page_area fix">
		<div class="container">
			<div class="row about_inner">
				<div class="about_img_area col-lg-6 col-md-12 col-xs-12">
					<div>
					  <img src="img/screenshot.jpg" alt="About Us">
					</div>
				</div>
				
				<div class="about_content_area col-lg-6  col-md-12 col-xs-12">
								  @if(count($info) > 0)
								   {!! $info['content'] !!}
								  @endif
								</div>

                                </div>
			
			<div class="team_area">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="section_title">							
							<h2>Our <span>Team</span></h2>
							<div class="divider"></div>
						</div>
					</div>
				</div>	

				<div class="row">
					<?php
					  $team = [];
					
					 foreach($team as $t)
					 {
                    ?>
					

					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="our-team">
							<div class="pic">
								<img src="img/team/2.jpg" alt="">
							</div>
							<div class="team-content">
								<h3 class="title">kristina</h3>
								<span class="post">Web Designer</span>
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div><!-- End Col -->				
                   <?php
                   }
                   ?>
					
					
				</div>				
				
			</div>
		</div>
	</div>
@stop
