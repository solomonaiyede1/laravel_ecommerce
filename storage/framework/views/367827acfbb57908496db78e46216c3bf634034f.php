<?php
use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php
        $product1=ProductModel::where('product_category', 'network')->paginate(100);
    ?>
    <!-- Hero Section End -->




    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">
            <?php $__currentLoopData = $product1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="<?php echo e(url('single_product/'.$product->id)); ?>">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="card" style="width: 300px; height: 350px;padding-left: 10px; padding-bottom: 5px; padding-top: 5px">
                            <img class="img-fluid" src="<?php echo e(url(str_replace(' ', '%20', $product->product_image))); ?>"  style="height: 150px; width: 150px" alt="">
                            <p style="color: black; font-size:14px; font-weight: 900;z-index: 100"><?php echo e($product->product_name); ?></p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">Part No.: <?php echo e($product->product_part); ?>. Tag: <?php echo e($product->product_tag); ?></p>
                            <p style="color: black; font-size:14px; font-weight: 900;z-index: 100">N<?php echo e(number_format($product->product_price)); ?></p>
                            <a href="<?php echo e(url('single_product/'.$product->id)); ?>" class="btn" style="background-color: #FA701B; color: white">Add to cart</a>
                            <a href="<?php echo e(url('single_product/'.$product->id)); ?>" class="btn btn-link" style="color: black; font-weight: 900; font-size: 12px">Learn More</a>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <center style="color: black; margin-left: 40%"><?php echo e($product1->links('pagination::bootstrap-4')); ?></center>
    <!-- Categories End -->


  

    <!-- Footer Start -->
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Latest Product Section End -->

   <?php /**PATH C:\wamp64\www\backup_code\resources\views\network.blade.php ENDPATH**/ ?>