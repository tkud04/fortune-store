

<?php $__env->startSection('title',"Order Placed"); ?>

<?php $__env->startSection('content'); ?>
<script>
let cidcontents = [];
</script>
<?php
$uu = url('confirm-payment')."?oid=".$o['reference'];
$amount = 0;
if(isset($o)) $amount = $o['amount'];

$items = $o['items'];

foreach($items as $i)
{
	$product = $i['product'];
	$sku = $product['sku'];
	$name = $product['name'];
	$qty = $i['qty'];
	$img = $product['imggs'][0];
?>
<script>
cidcontents.push({
      id: "<?php echo e($sku); ?>",
      quantity: "<?php echo e($qty); ?>"
    });
</script>
<?php
}
$vu = url('anon-order')."?ref=".$o['reference'];
?>
<h3 style="background: #ff9bbc; color: #fff; padding: 10px 15px;">Order Placed Successfully</h3>

<b>Your order has been placed.</b><br>

<p>Redirecting.. <a href="<?php echo e($vu); ?>">Click here</a> if you are not redirected within 10 seconds.</p>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script>
fbq('track', 'Purchase', {
	currency: "NGN",
	contents: cidcontents,
    content_type: 'product',
	value: "<?php echo e($amount); ?>"
	});

setTimeout(() => {
	window.location = "<?php echo e($vu); ?>";
},15000);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ace\resources\views/bps.blade.php ENDPATH**/ ?>