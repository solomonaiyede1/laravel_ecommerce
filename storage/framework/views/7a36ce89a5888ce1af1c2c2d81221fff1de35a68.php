<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<br><br><br>

<div class="container">
            <?php if(session()->get('cart')!=null): ?>
            <form method="post" action="<?php echo e(url('/payment1')); ?>" >
            <?php echo csrf_field(); ?>
            <?php if(Auth::check()): ?>
            <input type="hidden" name="user_id" value='<?php echo e(Auth::user()->id); ?>'>
            <?php endif; ?>
            <input type="hidden" name="payment_status" value='pending'>
            <a class="btn" style="background-color: red; color: white"  href="<?php echo e(url('/')); ?>"><i style="font-size:24px; color: white" class="fa">&#xf07a;</i>Shop more</a>
            <button type="submit" class="btn btn-info">Proceed to checkout</button>
            </form>
            <?php endif; ?>
</div>

 <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\backup_code\resources\views/order.blade.php ENDPATH**/ ?>