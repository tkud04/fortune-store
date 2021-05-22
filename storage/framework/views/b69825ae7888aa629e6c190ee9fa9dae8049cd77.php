<?php
$title = "FAQ";
$ph = true;
$pcClass = "";

$faqs = [
  ['q' => "", 'a' => ""]
];
?>


<?php $__env->startSection('content'); ?>
<!-- FAQ Section-->
<div id="accordion" class="mb-10">
 <?php
	for($i = 0; $i < count($faqs); $i++)
	 {
		$f = $faqs[$i];
 ?>
  <div class="card">
    <div class="card-header" id="heading-<?php echo e($i); ?>">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-<?php echo e($i); ?>" aria-expanded="true" aria-controls="collapse-<?php echo e($i); ?>">
          <?php echo e($f['q']); ?>

        </button>
      </h5>
    </div>

    <div id="collapse-<?php echo e($i); ?>" class="collapse show" aria-labelledby="heading-<?php echo e($i); ?>" data-parent="#accordion">
      <div class="card-body">
        <?php echo $f['a']; ?>

      </div>
    </div>
  </div>
   <?php
	}
  ?>
</div>
                <!-- End FAQ Section-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\fortune-store\resources\views/faq.blade.php ENDPATH**/ ?>