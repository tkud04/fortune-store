<?php
$title = "Categories";
$ph = false;
$pcClass = "";
?>
@extends('layout')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <?php
	 if(count($c) > 0)
	 {
  ?>
  <div class="carousel-inner">
  <?php
	 for($i = 0; $i < count($c); $i++)
     {
      $cc = $c[$i];
      $ss = $i == 0 ? " active" : "";
	  $cu = url('category')."?xf=".$cc['category']; 
	  $imgs = $cc['image'];
	  $parent = $cc['parent'];
	  $pc = $cc['product_count'];
	  $pcText = $pc == 1 ? "Product" : "Products";
   ?>
    <div class="carousel-item {{$ss}}">
      <div class="text-center d-block w-100" style="background: url('img/blank.png'); padding: 50px; ">
        <h4 class="category-name"><a href="{{$cu}}">{{ucwords($cc['name'])}}</a></h4>
         <span class="category-count">
            <span>{{$pc}}</span> {{$pcText}}
         </span>
      </div>
    </div>
   <?php
    }
   ?>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <?php
  }
  ?>
</div>
@stop
