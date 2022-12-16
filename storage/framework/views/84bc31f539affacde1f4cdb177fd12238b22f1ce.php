<?php
use App\Models\CategoryModel;
use App\Models\ProductModel;
?>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<div class="container">
    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form method="post" action="<?php echo e(url('/product-admin-edit', $products->id)); ?>">
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo csrf_field(); ?>
        <!--<input type="text" name="category_id" value="1" class="form-control">-->
        <input type="text" name="product_category" value="wears" class="form-control">
        <label>Product Name</label>
        <input type="text" name="product_name" class="form-control">
        <label>Product Price</label>
        <input type="number" name="product_price" class="form-control">
        <label>Product description</label>
        <input type="text" name="product_description" class="form-control">
        
        <label>Image</label>
        <input type="file" name="product_image" class="form-control">
        <input type="submit" class="btn btn-primary" />
    </form>
   
</div><?php /**PATH C:\wamp64\www\backup_code\resources\views\product-admin-edit.blade.php ENDPATH**/ ?>