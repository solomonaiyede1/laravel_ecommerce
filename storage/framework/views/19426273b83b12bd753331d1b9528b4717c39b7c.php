<?php
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\OrderModel;
?>

<?php
$order=OrderModel::with('order_user')->get();
?>


<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
  <center><h2>Customer's Order and Personal Information</h2></center>
  <?php $__currentLoopData = $order_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order_details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="card-columns">
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Order ID: <?php echo e($order_details->id); ?></p>
      </div>
    </div>
    
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Customer's Name: <?php echo e($order_details->order_user->name); ?></p>
      </div>
    </div>
    
     <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Customer's email: <?php echo e($order_details->order_user->email); ?></p>
      </div>
    </div>
    
     <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Customer's City: <?php echo e($order_details->order_user->city); ?></p>
      </div>
    </div>
    
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Order Name: <?php echo e($order_details->name); ?></p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Price: <?php echo e($order_details->price); ?></p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Quantity: <?php echo e($order_details->quantity); ?></p>
      </div>
    </div>  
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Payment Status: <?php echo e($order_details->payment_status); ?></p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Order Date: <?php echo e($order_details->created_at); ?></p>
      </div>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<center><button class="btn btn-info" style="color: white" onclick="print_detail()">
Print Customer's information</button>
</center>

<script>
  function print_detail(){
    window.print();
  }
</script>


</div>
<!--end sidebar -->
</div>
</body><?php /**PATH /home/ccharle2/public_html/resources/views/order_detail.blade.php ENDPATH**/ ?>