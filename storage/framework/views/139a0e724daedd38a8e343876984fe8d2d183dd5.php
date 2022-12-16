
<?php
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\OrderModel;
?>

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
  <center><h5>Orders History</h5></center>
<?php
$order=OrderModel::with('order_user')->orderBy('created_at', 'DESC')->paginate(10);
$order_client=OrderModel::where('id', Auth::user()->id)->paginate(10);
?>

<div class="container" style="margin-left: 2%">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Payment status</th>
      <th scope="col">Order Date and Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php if(Auth::user()->role=="admin"): ?>
  <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($orders->id); ?></td>
      <td><a href="<?php echo e('/order_detail/'. $orders->id); ?>"><?php echo e($orders->order_user->name); ?></a></td>
      <td><a href="<?php echo e('/order_detail/'. $orders->id); ?>"><?php echo e($orders->name); ?></a></td>
      <td><?php echo e($orders->price); ?></td>
      <td><?php echo e($orders->quantity); ?></td>
      <td><?php echo e($orders->payment_status); ?></td>
      <td><?php echo e($orders->created_at); ?></td>
       <td>
            <?php if($orders->delivery_status=='delivered'): ?>
            <button type="button" class="btn btn-success btn-sm">delivered</button>
            <?php elseif($orders->delivery_status=='proccessing'): ?>
            <form method="post" action="<?php echo e(url('/orders', $orders->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <button type="submit" class="btn btn-primary btn-sm">proccessing</button>
            </form>
            <?php endif; ?>
        </td>
        <!--<td>-->
      <!--  <form method="post" action="<?php echo e(url('/order', $orders->id)); ?>">-->
      <!--      <?php echo csrf_field(); ?>-->
      <!--      <input type="hidden" name="delivered" value="delivered" />-->
      <!--<td><input type="submit" value="Proccessing" class="btn btn-danger btn-sm" style="color: white"/></td>-->
      <!--</form>-->
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php elseif(Auth::user()->role=='user'): ?>
      <?php $__currentLoopData = $order_client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($orders->id); ?></a></td>
      <td><a href="<?php echo e('/order_detail/'. $orders->id); ?>"><?php echo e($orders->name); ?></a></td>
      <td><?php echo e($orders->price); ?></td>
      <td><?php echo e($orders->quantity); ?></td>
      <td><?php echo e($orders->payment_status); ?></td>
      <td><?php echo e($orders->created_at); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
  </tbody>
</table>
<div class="pag" style="margin-left: 80%"><?php echo e($order->links('pagination::bootstrap-4')); ?></div>
</div>
<!--end sidebar -->
</div>
</body><?php /**PATH C:\wamp64\www\backup_code\resources\views\orders.blade.php ENDPATH**/ ?>