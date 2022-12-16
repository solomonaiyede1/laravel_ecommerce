<?php
use App\Models\ProductModel;

?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


</head>

<body>

<!--<nav class="navbar navbar-expand-md bg-info">-->
<!--      <div class="container">-->
<!--        <a class="navbar-brand" href="#"><img src="assets/images/header-logo.png" alt=""></a>-->
<!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">-->
<!--          <span class="navbar-toggler-icon"><h3 style="color: white"><a href="<?php echo e(url('/')); ?>" style="color: white">Breetek Integrated Solutions</a></h3></span>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse" id="navbarResponsive">-->
<!--            <ul style="list-style-type:none; color: white; font-size: 25px">-->
<!--                <li><a href="<?php echo e(url('/')); ?>" style="color: white">Breetek Integrated Solutions</a></li>-->
<!--            </ul>-->
<!--          <ul class="navbar-nav ml-auto">-->
<!--            <li class="nav-item active">-->
<!--              <a class="nav-link" href="<?php echo e(url('/login')); ?>" style="color: white; font-family: sans serif">Sign in-->
<!--              </a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <li><a href="<?php echo e(url('/addToCart')); ?>"><i class="fa fa-shopping-cart" style="font-size:20px; color: white"></i></a></li>-->
<!--            </li>-->
<!--          </ul>-->
<!--        </div>-->
<!--      </div>-->
<!--    </nav><br><br>-->

<style>
.description{
    width: 50%;
    height: 500px;
}
</style>
                
<?php echo $__env->make('partials/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
<br><br>
        <div class="row">
        <?php $__currentLoopData = $single_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $product_cat=ProductModel::where('product_category', $s->product_category)->paginate(80);
            ?>
          <div class="col-md-4 col-lg-4">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <img src="<?php echo e(url(str_replace(' ', '%20', $s->product_image))); ?>"  class="testimonial-img" alt="" style="width: 80%">
              </a>
            </div>
          </div>
          <div class="col-md-4 col-lg-4" style="background-color: white; width:100%">
                    <div class="card-body">
                        <h4 style="font-family:sans serif">Product Description</h4>
                      <p class="card-text">
                          <b style="font-family:sans serif">Category:</b> <?php echo e($s->product_category); ?><br>
                          <b style="font-family:sans serif">Name of Product:</b> <?php echo e($s->product_name); ?><br>
                          <b style="font-family:sans serif">Price of Product:</b><span style="font-weight: 900">N<?php echo e(number_format($s->product_price)); ?></span><br>
                          <div class="card">
                            <div class="card-body">
                              <h3 class="text-title" style="font-family:sans serif">Product Description</h3>
                                <p tyle="font-family:sans serif"><?php echo html_entity_decode($s->product_description); ?></p>
                                <p tyle="font-family:sans serif"><b style="font-weight: 900">Part no:</b> <?php echo e($s->product_part); ?></p>
                                <p tyle="font-family:sans serif"><b style="font-weight: 900">Tag No.:</b><?php echo e($s->product_tag); ?></p>
                            </div>
                            <b tyle="font-family:sans serif">Quantity</b>
                          <form method="post" action="<?php echo e(url('/addToCart', $s->id)); ?>" >
                            <?php echo csrf_field(); ?>
                            <input type="number" class="form-control" placeholder="Select Quantity" name="quantity" required><br><br>
                            <button type="submit"  class="btn" style="background-color: #FA701B; color: white; width: 100%" value="add to cart">Add to cart</button> 
                            </p>
                          </form>
                        </div>
                        
                          </center>
                      </p>
                  </div>
          </div>

          <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="card">
                  <div class="card-body">
                  <b style="font-family:sans serif">Free Delivery</b>
                        <p tyle="font-family:sans serif">For all order over ₦200,000.00</p>
                        <hr>
                        <b style="font-family:sans serif">30 Days return</b>
                        <p tyle="font-family:sans serif">If goods have Problems</p>
                        <hr>
                        <b style="font-family:sans serif">Secured Payment</b>
                        <p tyle="font-family:sans serif">If goods have Problems</p>
                        <hr>
                        <b style="font-family:sans serif">24/7 support</b>
                        <p tyle="font-family:sans serif">Dedicated support</p>
                  </div>
              </div>
          </div>
        <!-- ====================================================================================================-->
         <hr>
        <div style="padding: 2px 2px 2px 2px; background-color: #FA701B; border-radius: 8px; width: 100%">
        <h4 class="section-title position-relative mx-xl-5 mb-4"><span class="bg-default pr-3"; style="color:white">You may also like these products</span></h4>
         </div>
         <div class="row px-xl-5 pb-3">
            <?php $__currentLoopData = $product_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-3 col-sm-12 pb-1">
                <a class="text-decoration-none" href="<?php echo e(url('single_product/'.$product->id)); ?>">
                    <div class="cat-item d-flex align-items-center mb-4">
                       <div class="card" style="width: 300px; height: 400px;padding-left: 10px; padding-bottom: 5px; padding-top: 5px">
                            <img class="img-fluid" src="<?php echo e(url(str_replace(' ', '%20', $product->product_image))); ?>"  style="height: 200px; width: 200px; filter: contrast(105%)" alt="">
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100"><?php echo e(Str::limit($product->product_name, $limit = 70, $end = '')); ?></p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">Part No.: <?php echo e($product->product_part); ?>. Tag: <?php echo e($product->product_tag); ?></p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100; color:black">N<?php echo e(number_format($product->product_price)); ?>

                            </p>
                            <a href="<?php echo e(url('single_product/'.$product->id)); ?>" class="btn btn-info" style="background-color: #FA701B; color: white">Add to cart</a>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
         <center style="color: black;"><?php echo e($product_cat->links('pagination::bootstrap-4')); ?></center>
</div>

<?php echo $__env->make('partials/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\wamp64\www\ecommerce\resources\views/single_product.blade.php ENDPATH**/ ?>