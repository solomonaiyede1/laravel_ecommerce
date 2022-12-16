<!DOCTYPE html>
<html lang="en">
<head>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
use App\Models\OrderModel;
use App\Models\User;
use App\Models\ProductModel;
use App\Models\CategoryModel;
$order=OrderModel::all();
$user=User::all();
$product=ProductModel::all();
$category=CategoryModel::all();
?>
<div class="container">
<?php if(Auth::user()->role=="admin"): ?>
  <div class="row">
    <div class="col-md-3 mx-auto">
        <div class="card  bg-info" style="width:100%">
          <div class="card-body">
            <h6 style="color: white">Total Customers</h6>
            <h4 style="color: white"><?php echo e($user->count()); ?></h4>
          </div>
        </div>  
    </div>


    <div class="col-md-3 mx-auto">
        <div class="card bg-success" style="width:100%">
          <div class="card-body">
            <h6 style="color: white">Total Orders</h6>
            <h4 style="color: white"><?php echo e($order->count()); ?></h4>
          </div>
        </div>  
    </div>

    <div class="col-md-3 mx-auto">
        <div class="card  bg-info" style="width:100%">
          <div class="card-body">
            <h6 style="color: white">Total Sales</h6>
            <h4 style="color: white"><?php echo e($order->count()); ?></h4>
          </div>
        </div>  
    </div>

    <div class="col-md-3 mx-auto">
        <div class="card bg-success" style="width:100%">
          <div class="card-body">
            <h6 style="color: white">Average Order Sales</h6>
            <h4 style="color: white"><?php echo e($order->count()); ?></h4>
          </div>
        </div>  
    </div>
</div>

<br>
<div class="row">
    <div class="col-md-3">
        <div class="card  bg-info" style="width:100%">
          <div class="card-body">
            <h6 style="color: white">Total Unpaid invoice</h6>
            <h4 style="color: white">$0.00</h4>
          </div>
        </div>  
    </div>

    <div class="col-md-3">
        <div class="card  bg-success" style="width:100%">
          <div class="card-body">
            <h6 style="color: white">Total Products</h6>
            <h4 style="color: white"><?php echo e($product->count()); ?></h4>
          </div>
        </div>  
    </div>

    <div class="col-md-3">
        <div class="card bg-info" style="width:100%">
          <div class="card-body">
            <h6 style="color: white">Total category</h6>
            <h4 style="color: white"><?php echo e($category->count()); ?></h4>
          </div>
        </div>  
    </div>
    
    <div class="col-md-3">
        <div class="card bg-success" style="width:100%">
          <div class="card-body">
            <h6 style="color: white">Total category</h6>
            <h4 style="color: white"><?php echo e($category->count()); ?></h4>
          </div>
        </div>  
    </div>
  </div>
<?php endif; ?>
  
  <div class="alert alert-primary">Note: We have commenced operation fully.</div>
  <div class="alert alert-danger">Our system is quite simple and effective with responsive components</div>
  <div class="alert alert-danger">We have a alot to offer ranging from physical products to digital products. These include services of various kinds</div>
  <p>You are welcome to <strong>Breetek Integrated Solutions</strong> - an ecommerce shopping platform that offers much with all goods and services available here</p>
  <p>You can clcik the left button to view the drop down</p>
  <p><strong>Note:</strong> We are available 24/7 to serve you quantitatively and qualitatively here in Breetek Integrated Solutions</p>
  
  <div class="jumbotron">
      <h3>Digital services</h3>
      <p>Custom software design and supply</p>
    </div>
  </div>
</div><br>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark container-fluid" style="color: white; padding-left: 20%">
  Copyright(2021) Breetek Integrated Solutions
</nav>
</body>
</html>
<?php /**PATH C:\wamp64\www\backup_code\resources\views\dashboard.blade.php ENDPATH**/ ?>