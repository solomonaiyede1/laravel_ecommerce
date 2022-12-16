<!DOCTYPE html>
<html lang="en">
<head>
<?php
use App\Models\BannerModel;
?>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
    
    <?php
        $banner1=BannerModel::all();
    ?>
    
    <?php if(session('update')): ?>
         <alert class="alert alert-success" style="width: 100%">Banner Ads updated successfully.</alert>
    <?php endif; ?>
    
    <?php $__currentLoopData = $banner1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <br>
    <form method="post" action="/banner">
        <?php echo csrf_field(); ?>
        <textarea type="text" name="title" class="form-control" style="width: 50%" maxlength="70"><?php echo e($banner->title); ?></textarea>
        <br>
        <button type="submit" class="btn btn-primary">Edit Banner</button><br><br>
    </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
      <div class="jumbotron">
          <h3>Digital services</h3>
          <p>Custom software design and supply</p>
        </div>
      </div>
    </div><br>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark container-fluid" style="color: white; padding-left: 20%">
      Copyright(2021) Breetek Integrated Solutions
    </nav>

</div>

</body>
</html>
<?php /**PATH /home/ccharle2/public_html/resources/views/banner.blade.php ENDPATH**/ ?>