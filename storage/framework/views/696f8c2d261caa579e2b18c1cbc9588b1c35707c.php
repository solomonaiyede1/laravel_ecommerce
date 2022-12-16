 <?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Button to Open the Modal -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<div class="container">
    <div class="alert alert-info">Edit category details below</div>
    <div style="width: 50%">
        
        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <form method="post" action="<?php echo e(url('/edit-category', $categories->id)); ?>" >
          <?php echo e(method_field('PUT')); ?>

         <?php echo csrf_field(); ?>
        <input type="text" class="form-control" name="category_name" value=<?php echo e($categories->category_name); ?> /><br>
        <button type="submit" class="btn btn-primary btn-lg">Update</button>
      </form>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
</body><?php /**PATH /home/ccharle2/public_html/resources/views/category_edit.blade.php ENDPATH**/ ?>