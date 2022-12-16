  <!-- Button to Open the Modal -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Please enter your category name:</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" action="<?php echo e(url('/category')); ?>">
            <?php echo csrf_field(); ?>
            <label for="category">Create category</label><br>
            <input type="text" class="form-control" name="category_name" placeholder="Enter category name"><br><br>
            <button class="btn btn-primary" type="submit">Create category</button>

        </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container" style="margin-left: 15%">
    <div class="alert alert-info"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Create Category</button></div>
        <?php if(session('success')): ?>
        <div class="alert alert-success">Category created successfully.</div>
    <?php endif; ?>
    
    <?php if(session('delete')): ?>
        <div class="alert alert-success">Category deleted successfully.</div>
    <?php endif; ?>
    
     <?php if(session('update')): ?>
        <div class="alert alert-success">Category updated successfully.</div>
    <?php endif; ?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Category ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php $__currentLoopData = $category1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($categories->id); ?></td>  
      <td><?php echo e($categories->category_name); ?></td>
      <td>
      <form method="post" action="<?php echo e(url('/delete-category', $categories->id)); ?>" >
          <?php echo e(method_field('DELETE')); ?>

         <?php echo csrf_field(); ?>
       <a  href="<?php echo e(url('/edit-category', $categories->id)); ?>"  class="btn btn-info btn-sm">
          <i style="font-size:18px; color: white" class="fa">&#xf044;</i>
      </a>
      <button type="submit" class="btn btn-danger btn-sm"><i style="font-size:18px" class="fa">&#xf014;</i></button>
      </form>
     </td>  
     
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body><?php /**PATH /home/ccharle2/public_html/resources/views/category.blade.php ENDPATH**/ ?>