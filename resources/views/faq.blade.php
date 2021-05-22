<?php
$title = "FAQ";
$ph = true;
$pcClass = "";

$faqs = [
  ['q' => "", 'a' => ""]
];
?>
@extends('layout')

@section('content')
<!-- FAQ Section-->
<div id="accordion" class="mb-10">
 <?php
	for($i = 0; $i < count($faqs); $i++)
	 {
		$f = $faqs[$i];
 ?>
  <div class="card">
    <div class="card-header" id="heading-{{$i}}">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-{{$i}}" aria-expanded="true" aria-controls="collapse-{{$i}}">
          {{$f['q']}}
        </button>
      </h5>
    </div>

    <div id="collapse-{{$i}}" class="collapse show" aria-labelledby="heading-{{$i}}" data-parent="#accordion">
      <div class="card-body">
        {!! $f['a'] !!}
      </div>
    </div>
  </div>
   <?php
	}
  ?>
</div>
                <!-- End FAQ Section-->
@stop
