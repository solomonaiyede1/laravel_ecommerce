
<?php
use App\Models\CategoryModel;
use App\Models\ProductModel;
?>

<body>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Product Categogy</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Tag</th>
      <th scope="col">Product Part No.</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Image</th>
      <th scope="col">Action</a></th>
    </tr>
  </thead>
    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($products->id); ?></td>
        <td><?php echo e($products->product_category); ?></td>
        <td><?php echo e($products->product_name); ?></td>
        <td><?php echo e($products->product_tag); ?></td>
        <td><?php echo e($products->product_part); ?></td>
        <td><?php echo e($products->product_price); ?></td>
        <td><img src="<?php echo e(url(str_replace(' ', '%20', $products->product_image))); ?>"  height="50" width="50"/></td>
        <td>
        <!--<button class="btn btn-warning">Edit</button>-->
        <button class="btn btn-danger btn-sm"><i style="font-size:24px" class="fa">&#xf014;</i></button></td>
    </tr>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</div>
</body><?php /**PATH C:\wamp64\www\backup_code\resources\views\product-admin-search.blade.php ENDPATH**/ ?>