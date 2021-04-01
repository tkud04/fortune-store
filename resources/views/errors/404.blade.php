<?php
$title = "Not Found";
$ph = false;
$pcClass = "";
$plugins = [];
$signals = ['okays' => []];
$user = null;
if(Auth::check()) $user = Auth::user();
?>
@extends('layout')

@section('title',"Not Found")

@section('content')
<!-- 404 Page -->
		<div id="page_404_area">
			<div class="container">
				<div class="row text-left">
					<div class="col-sm-6">
						<div class="page_404_content">
							<h1>Not Found - We Searched Very Hard</h1>
							<h3>The page you requested cannot be found.</h3>
						</div>
						<div class="404_btn">
							<a href="{{url('/')}}" class="btn border-btn"><i class="fa fa-arrow-circle-o-left"></i> Back To Home</a>
						</div>
					</div>
					
					<div class="col-sm-6 text-center">
						<img src="img/404.png" class="img-responsive" width="350" alt="">
					</div>
				</div>
			</div>
		</div>
@stop
