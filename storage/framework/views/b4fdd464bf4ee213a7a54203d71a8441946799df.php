<?php
use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
?>

<style>
    .container{
        background-color: #172035;
    }
</style>
    <?php
        $new_arrival= ProductModel::orderby('created_at', 'DESC')->paginate(50);
    ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Topbar End -->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->

<link href="css/index.css" rel="stylesheet">
    <!-- Navbar Start -->

<style>
    .pagination .page-link {
    background: white;
    color: black;
}
</style>
<div class="container-fluid pt-5">
        <h3 style="font-family: calibri; color: black; padding-left: 20px">New Arrival</h3>
    <div class="row px-xl-5 pb-3">
        <?php $__currentLoopData = $new_arrival; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-2 col-md-2 col-sm-2 pb-1">
            <a class="text-decoration-none" href="<?php echo e(url('single_product/'.$product->id)); ?>" style="color: black; font-weight: 1500">
                <div class="cat-item d-flex align-items-center mb-4">
                    <div class="card" style="width: 100%;padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border: none">
                        <img class="img-fluid rounded img-thumbnail" src="<?php echo e(url(str_replace(' ', '%20', $product->product_image))); ?>" 
                        style="height: auto; width: 80%; filter: contrast(120%)" alt="">
                        <span style="color: black; font-size:10px; font-weight: 900;z-index: 100; color: blue">N<?php echo e(number_format($product->product_price)); ?></span>
                        <p style="color: black; font-size:10px; font-weight: 900;z-index: 100"><?php echo e($product->product_name); ?></p>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
     <div style="margin-left: 10%;" class="page-link"><?php echo e($new_arrival->links('pagination::bootstrap-4')); ?></div>
</div>
<hr>
<!-- New arrival Ends here -->

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ccharle2/public_html/resources/views/new_arrival.blade.php ENDPATH**/ ?>