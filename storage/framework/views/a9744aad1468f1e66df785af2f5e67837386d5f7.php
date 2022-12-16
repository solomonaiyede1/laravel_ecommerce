<?php
use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php
        $product1=ProductModel::where('product_category', 'phone')->get();
        $product2=ProductModel::where('product_category', 'automobile')->get();
        $product3=ProductModel::where('product_category', 'wears')->get();
        $product4=ProductModel::where('product_category', 'sport')->get();
    ?>
    <!-- Hero Section End -->

    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                  <?php $__currentLoopData = $product2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <div class="item">
                        <a href="<?php echo e(url('single_product/'.$products->id)); ?>">
                          <img src="<?php echo e(url($products->product_image)); ?>" class="testimonial-img" alt="">
                          <h6 class="title"><b>Product</b>: <?php echo e($products->product_name); ?></a></h6>
                          <p class="description"><b>N<?php echo e($products->product_price); ?>.00</b></p>
                          </a>
          </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
    
    <!--Banner ads -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/ads3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/ads4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
    <center><h4 style="color: red">Computing</h4></center><br>
    <div class="flex-container">
        <?php $__currentLoopData = $product1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item">
            <a href="<?php echo e(url('single_product/'.$products->id)); ?>">
              <img src="<?php echo e(url($products->product_image)); ?>" class="testimonial-img" alt="" style="width: 90px; height: 70px">
              <h6 class="title"><b>Product</b>: <?php echo e($products->product_name); ?></a></h6>
              <p class="description"><b>N<?php echo e($products->product_price); ?>.00</b></p>
              </a>
          </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <hr>
    
    <center><h4 style="color: red">Servers</h4></center><br>
    <div class="flex-container">
        <?php $__currentLoopData = $product2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item">
            <a href="<?php echo e(url('single_product/'.$products->id)); ?>">
              <img src="<?php echo e(url($products->product_image)); ?>" class="testimonial-img" alt="" style="width: 100px; height: 80px">
              <h6 class="title"><b>Product</b>: <?php echo e($products->product_name); ?></a></h6>
              <p class="description"><b>N<?php echo e($products->product_price); ?>.00</b></p>
              </a>
          </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <hr>
    
        <center><h4 style="color: red">Laptops</h4></center><br>
    <div class="flex-container">
        <?php $__currentLoopData = $product3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item">
            <a href="<?php echo e(url('single_product/'.$products->id)); ?>">
              <img src="<?php echo e(url($products->product_image)); ?>" class="testimonial-img" alt="" style="width: 100px; height: 80px">
              <h6 class="title"><b>Product</b>: <?php echo e($products->product_name); ?></a></h6>
              <p class="description"><b>N<?php echo e($products->product_price); ?>.00</b></p>
              </a>
          </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <hr>
    
    <center><h4 style="color: red">Printers</h4></center><br>
    <div class="flex-container">
        <?php $__currentLoopData = $product4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item">
            <a href="<?php echo e(url('single_product/'.$products->id)); ?>">
              <img src="<?php echo e(url($products->product_image)); ?>" class="testimonial-img" alt="" style="width: 100px; height: 80px">
              <h6 class="title"><b>Product</b>: <?php echo e($products->product_name); ?></a></h6>
              <p class="description"><b>N<?php echo e($products->product_price); ?>.00</b></p>
              </a>
          </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <hr>

    <center><h4 style="color: red">Softwares</h4></center><br>
    <div class="flex-container">
        <?php $__currentLoopData = $product4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item">
            <a href="<?php echo e(url('single_product/'.$products->id)); ?>">
              <img src="<?php echo e(url($products->product_image)); ?>" class="testimonial-img" alt="" style="width: 100px; height: 80px">
              <h6 class="title"><b>Product</b>: <?php echo e($products->product_name); ?></a></h6>
              <p class="description"><b>N<?php echo e($products->product_price); ?>.00</b></p>
              </a>
          </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><hr>

    <center><h4 style="color: red">Accessories</h4></center><br>
    <div class="flex-container">
        <?php $__currentLoopData = $product4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item">
            <a href="<?php echo e(url('single_product/'.$products->id)); ?>">
              <img src="<?php echo e(url($products->product_image)); ?>" class="testimonial-img" alt="" style="width: 100px; height: 80px">
              <h6 class="title"><b>Product</b>: <?php echo e($products->product_name); ?></a></h6>
              <p class="description"><b>N<?php echo e($products->product_price); ?>.00</b></p>
              </a>
          </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><hr>
</div>



    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/ads1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/ads2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest/latest1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest/latest2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest/latest3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest/latest1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest/latest2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest/latest3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                         <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/top/top1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/top/top2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/top/top3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/top/top1.jpg" alatest/latest2.jpg"t="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/top/top2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/top/top3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/review/review1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/review/review2.jpg"  alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/review/review3.jpg"  alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/review/review1.jpg"  alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/review/review2.jpg"  alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/review/review3.jpg"  alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Computers</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->


    <!-- Footer Section Begin -->
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php /**PATH C:\wamp64\www\backup_code\resources\views\product\accessory.blade.php ENDPATH**/ ?>