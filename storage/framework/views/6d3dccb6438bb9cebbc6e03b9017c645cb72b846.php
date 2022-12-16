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
$user=User::all();

$desktop=ProductModel::where('product_category', 'DESKTOP')->count();
$printer_and_scanner=ProductModel::where('product_category', 'printer')->count();
$phone=ProductModel::where('product_category', 'phone')->count();
$software=ProductModel::where('product_category', 'software')->count();
$accessory=ProductModel::where('product_category', 'accessory')->count();
$laptop=ProductModel::where('product_category', 'laptop')->count();
$server_option=ProductModel::where('product_category', 'SERVER OPTION')->count();
$network_and_storage=ProductModel::where('product_category', 'network and storage')->count();
$toner_and_ink_catridges=ProductModel::where('product_category', 'TONER AND INK CATRIDGES')->count();
$server=ProductModel::where('product_category', 'server')->count();
$games_and_console=ProductModel::where('product_category', 'Games and Consoles')->count();
$lifestyle=ProductModel::where('product_category', 'lifestyle')->count();
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<div class="container">
<?php if(Auth::user()->role=="admin" || Auth::user()->role=="superadmin"): ?>
  <div class="row">
    <div class="col-md-3 mx-auto">
        <div class="card  bg-success" style="width:100%">
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
    
    <div class="col-md-3">
        <div class="card  bg-success" style="width:100%">
          <div class="card-body">
            <h6 style="color: white">Total Products</h6>
            <h4 style="color: white"><?php echo e($product->count()); ?></h4>
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

  <hr>
  <center><h3 style="font-weight: 900; font-family: calibri"><u>Data(Visual) Analysis of Product Categories.</u></h3></center>
  
  <div class="row">
      <div class="col-md-6">
          <center style="font-weight: 900">Bar Chart for Category</center>
          <canvas id="myBar" style="width:100%;max-width:500px;"></canvas>
      </div>
      
      <div class="col-md-6">
            <center style="font-weight: 900">Line Chart for Category</center>
           <canvas id="myLine" style="width:70%;max-width:500px"></canvas>
      </div>
  </div>
 <hr>
 
   <div class="row">
      <div class="col-md-6">
          <center style="font-weight: 900">Category Listing</center>
          <table class="table table-bordered table-hover table-responsive" style="height: 300px; overflow-Y: scroll">
              <thead class="bg-success">
                <tr style="height: 30px">
                  <th scope="col">Category ID</th>
                  <th scope="col">Category Name</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="height: 30px">
                  <td><?php echo e($categories->id); ?></td>  
                  <td><?php echo e($categories->category_name); ?></td>
                  <td><button class="btn btn-success btn-sm">Avaialble</button></td>  
                 
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
      </div>
      
      <div class="col-md-6">
            <center style="font-weight: 900">Users</center>
          <table class="table table-bordered table-hover table-responsive" style="height: 300px; overflow-Y: scroll">
              <thead>
                <tr class="bg-info" style="color: white; height: 30px">
                  <th>User ID</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email Address</th>
                  <th>Role</th>
                </tr>
            </thead>
          <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tbody>
            <tr class="bg-light" style="height: 30px">
              <td><?php echo e($users->id); ?></td>  
              <td maxLength="20"><?php echo e($users->name); ?></td>
              <td maxLength="20"><?php echo e($users->phone); ?></td>
              <td maxLength="20"><?php echo e($users->email); ?></td>
              <td><button class="btn btn-success btn-sm"><?php echo e($users->role); ?></button></td>
            </tr>
           </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            
      </div>
  </div>
  
 <?php endif; ?> 
  
  
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


<script>
var xValues = ["Desktop", "Printer and Scanner", "phone", "software",
"accessory", "Laptop", "Server option", "Network and Storage", "Toner and Ink Catridges", "Server", "Games and console", "lifestyle"];
var yValues = [<?php echo e($desktop); ?>, <?php echo e($printer_and_scanner); ?>, <?php echo e($phone); ?>, 
<?php echo e($software); ?>, <?php echo e($accessory); ?>,<?php echo e($laptop); ?>, <?php echo e($server_option); ?>, <?php echo e($network_and_storage); ?>,
<?php echo e($toner_and_ink_catridges); ?>, <?php echo e($server); ?>, <?php echo e($games_and_console); ?>, <?php echo e($lifestyle); ?>];
var barColors = ["red", "green","blue","orange","brown", "magenta", "cyan", "pink", "purple", "yellow", "black", "blue"];

new Chart("myBar", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Relative volume of categories"
    }
  }
});
</script>

<script>
var xValues = ["Desktop", "Printer and Scanner", "phone", "software",
"accessory", "Laptop", "Server option", "Network and Storage", "Toner and Ink Catridges", "Server", "Games and console", "lifestyle"];
var yValues = [<?php echo e($desktop); ?>, <?php echo e($printer_and_scanner); ?>, <?php echo e($phone); ?>, 
<?php echo e($software); ?>, <?php echo e($accessory); ?>,<?php echo e($laptop); ?>, <?php echo e($server_option); ?>, <?php echo e($network_and_storage); ?>,
<?php echo e($toner_and_ink_catridges); ?>, <?php echo e($server); ?>, <?php echo e($games_and_console); ?>, <?php echo e($lifestyle); ?>];

new Chart("myLine", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,1.0)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 0, max:1000}}],
    }
  }
});
</script>

</body>
</html>
<?php /**PATH C:\wamp64\www\ecommerce\resources\views/dashboard/dashboard.blade.php ENDPATH**/ ?>