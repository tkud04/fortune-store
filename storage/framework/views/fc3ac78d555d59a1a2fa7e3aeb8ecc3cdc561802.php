<?php
$title = "Categories";
$ph = false;
$pcClass = "";
?>


<?php $__env->startSection('content'); ?>
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
    <div class="carousel-item <?php echo e($ss); ?>">
      <div class="text-center text-white d-block w-100" style="background: url('img/blank.png'); padding: 50px; ">
        <h4 class="category-name"><a href="<?php echo e($cu); ?>"><?php echo e(ucwords($cc['name'])); ?></a></h4>
         <span class="category-count">
            <span><?php echo e($pc); ?></span> <?php echo e($pcText); ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\fortune-store\resources\views/categories.blade.php ENDPATH**/ ?>