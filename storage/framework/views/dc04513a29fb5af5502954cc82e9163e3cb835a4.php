<?php
use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
?>

    <?php
        $product_others=ProductModel::inRandomOrder()->skip(50)->limit(20)->get();
        
        $product_all=ProductModel::inRandomOrder()->limit(16)->get();
        $product1=ProductModel::where('product_category', 'MACBOOK PRO')->limit(3)->get();
        $product2=ProductModel::where('product_category', 'printer')->limit(4)->get();
        $product3=ProductModel::where('product_category', 'laptop')->limit(4)->get();
        $product4=ProductModel::where('product_category', 'server')->limit(4)->get();
        $product5=ProductModel::where('product_category', 'phone')->limit(4)->get();
    ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Topbar End -->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->

<link href="css/index.css" rel="stylesheet">
    <!-- Navbar Start -->

    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active  card-body bg-light" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="images/G.avif" style="object-fit: contain;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">MacBook</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">MacBooks with poerful features here</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" style="background-color: red" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative  card-body bg-light" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="images/(4RY22A) HP NEVER STOP LASER.webp" style="object-fit: contain;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Printers</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">All kinds of printers are available</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" style="background-color: red" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="/img/ads3.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Phones and Tablets</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Get your needed phones, tablets and Phones accessories</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#" style="background-color: red">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="height: 200px; padding-top: 3px;" class="card-body bg-light">
                    <!--<img class="img-fluid" src="images/itel-s17.jpg" height="100" width="100" alt="">-->
                    <center><img style="width: 200px; height: 180px" class="img-fluid" id="im" /></center>
                    <!--<div class="offer-text">-->
                    <!--    <h6 class="text-white text-uppercase">Save 20%</h6>-->
                    <!--    <h3 class="text-white mb-3">Special Offer</h3>-->
                    <!--    <a href="" class="btn" style="background-color:#FA701B; color: white">Shop Now</a>-->
                    <!--</div>-->
                </div>
                    <center><a href="" class="btn" style="background-color:red; color: white">Shop Now</a></center>
                <hr>
                <div style="height: 200px; padding-top: 3px;" class="card-body bg-light">
                    <!--<img class="img-fluid" src="images/macbook-pro-i5-10th-gen1.webp" height="100" width="100" alt="">-->
                    <center><img style="width: 200px; height: 180px;" class="img-fluid" id="im1" /></center>
                    <!--<div class="offer-text">-->
                    <!--    <h6 class="text-white text-uppercase">Save 20%</h6>-->
                    <!--    <h3 class="text-white mb-3">Special Offer</h3>-->
                    <!--    <a href="" class="btn" style="background-color:red; color: white">Shop Now</a>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


        <script>
            var text=["images/products-iphone_7_plus_32gb_black.jpg", "images/719BHaUQ46L._AC_SL1500_.jpg", "images/71sONE4A2RL._AC_SX425_.jpg",
            "images/AMAZON-KINDLE-6-KIDS-10TH-GEN-8GB-BLUE.jpg", "images/apple-ipad-pro-129-2018-1.jpg"];
            var i=0;
            
            function animate(){
            	if(i<text.length){
            		document.getElementById("im").src=text[i];
            		i++;
            		}
            	else{
            	i=0;
            	}
            }
            
            setInterval(animate, 1000);
            
            var text1=["images/infinix-hot-10i-2.jpg", "images/infinix-hot-6x-1.jpg", "images/infinix-hot11-play-1.jpg",
            "images/infinix-note-10-1.jpg", "images/infinix-note12i-1.jpg"];
            var i=0;
            
            function animate1(){
            	if(i<text1.length){
            		document.getElementById("im1").src=text1[i];
            		i++;
            		}
            	else{
            	i=0;
            	}
            }
            
            setInterval(animate1, 2000);
    </script>
    
<!--slider starts here -->

    <div class="container-fluid">
        <div class="row d-flex flex-grow-1 justify-content-center align-items-center">
          <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active"></li>
              <li data-target="#carousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="d-none d-lg-block">
                  <div class="slide-box">
                    <img src="images/infinix-hot-10t-1.jpg" style="width: 200px; height: 200px" class="img-rounded" alt="First slide">
                    <img src="images/l.jpg" style="width: 200px; height: 200px" class="img-rounded"  alt="First slide">
                    <img src="images/oppo-a55-4g-1.jpg" style="width: 200px; height: 200px" class="img-rounded"  alt="First slide">
                    <img src="images/HP SMART TANK 500 ALL IN ONE PRINTER.jpg" class="img-rounded"  style="width: 200px; height: 200px"  alt="First slide">
                  </div>
                </div>
                <div class="d-none d-md-block d-lg-none">
                  <div class="slide-box">
                    <img src="images/(2E7G0EA) HP 15-DW1216NIA INTEL PENTIUM SILVER N5030 1.1GHZ PROCESSOR 4GB RAM 1TB HARD DRIVE 15.6” SCREEN SIZE WIN 10 @235,000.png" style="width: 200px; height: 200px" class="img-rounded"  alt="First slide">
                    <img src="images/HP SMART TANK 500 ALL IN ONE PRINTER.jpg" style="width: 200px; height: 200px" class="img-rounded"  alt="First slide">
                    <img src="images/(4QD21A) HP NEVERSTOP LASER 1200A MULTIFUNCTION.webp" style="width: 200px; height: 200px" class="img-rounded"  alt="First slide">
                  </div>
                </div>
                <div class="d-none d-sm-block d-md-none">
                  <div class="slide-box">
                    <img src="images/infinix-hot-6x-1.jpg" style="width: 200px; height: 200px" class="img-rounded"  alt="First slide">
                    <img src="images/infinix-hot-10t-1.jpg" style="width: 200px; height: 200px" class="img-rounded"  alt="First slide">
                  </div>
                </div>
                <div class="d-block d-sm-none">
                  <img class="d-block w-100" src="images/l.jpg" style="width: 200px; height: 200px" class="img-rounded"  alt="First slide">
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-none d-lg-block">
                  <div class="slide-box">
                    <img src="images/oppo-a55-4g-1.jpg" style="width: 200px; height: 200px" class="img-rounded"  alt="Second slide">
                    <img src="images/HP SMART TANK 500 ALL IN ONE PRINTER.jpg" style="width: 200px; height: 200px" class="img-rounded"  alt="Second slide">
                    <img src="images/infinix-hot-10t-1.jpg" style="width: 200px; height: 200px" class="img-rounded"   alt="Second slide">
                    <img src="images/infinix-hot-10t-1.jpg" style="width: 200px; height: 200px"  class="img-rounded"  alt="Second slide">
                  </div>
                </div>
                <div class="d-none d-md-block d-lg-none">
                  <div class="slide-box">
                    <img src="images/HPE Proliant DL380 Gen 10 4210R(2.4Ghz 10 core  1P 32GB-R  P408i -NC 8SFF 800W. PS Server.png" style="width: 200px; height: 200px" class="img-rounded"  alt="Second slide">
                    <img src="images/iphone-6s_io2v-1k.jpg" style="width: 200px; height: 200px" class="img-rounded"  alt="Second slide">
                    <img src="images/n.jpg" style="width: 200px; height: 200px" class="img-rounded"  alt="Second slide">
                  </div>
                </div>
                <div class="d-none d-sm-block d-md-none">
                  <div class="slide-box">
                    <img src="images/HP SMART TANK 500 ALL IN ONE PRINTER.jpg" class="img-rounded"  alt="Second slide">
                    <img src="images/products-iphone_7_plus_32gb_black.jpg" style="width: 200px; height: 200px" class="img-rounded"  alt="Second slide">
                  </div>
                </div>
                <div class="d-block d-sm-none">
                  <img class="d-block w-100" src="images/l.jpg" style="width: 200px; height: 200px" class="img-rounded"  alt="Second slide">
                </div>
              </div>
            </div>
            <!--<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">-->
            <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
            <!--  <span class="sr-only">Previous</span>-->
            <!--</a>-->
            <!--<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">-->
            <!--  <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
            <!--  <span class="sr-only">Next</span>-->
            <!--</a>-->

          </div>
        </div>
      </div>

<!--slider ends here -->



    <!-- Featured Start -->
    <!--<div class="container-fluid pt-5">-->
    <!--    <div class="row px-xl-5 pb-3">-->
    <!--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">-->
    <!--            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">-->
    <!--                <h1 class="fa fa-check m-0 mr-3" style="color: #FA701B"></h1>-->
    <!--                <h5 class="font-weight-semi-bold m-0">Get Quality Product</h5>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">-->
    <!--            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">-->
    <!--                <h1 class="fa fa-shipping-fast  m-0 mr-2" style="color: #FA701B"></h1>-->
    <!--                <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">-->
    <!--            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">-->
    <!--                <h1 class="fas fa-exchange-alt m-0 mr-3" style="color: #FA701B"></h1>-->
    <!--                <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">-->
    <!--            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">-->
    <!--                <h1 class="fa fa-phone-volume m-0 mr-3" style="color: #FA701B"></h1>-->
    <!--                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Top products for you</span></h2>
        <div class="row px-xl-5 pb-3">
            <?php $__currentLoopData = $product_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="" style="color: black; font-weight: 900">
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
    <!-- Categories End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured Products</span></h2>
        
        <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Phones</span></h4>
         <div class="row px-xl-5 pb-3">
            <?php $__currentLoopData = $product5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            <a href=<?php echo e(url('/phone')); ?> style="font-size: 12px; color: red; font-weight: 900"><b>View more here</b></a>
        </div>
        
        <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">MacBook</span></h4>
         <div class="row px-xl-5 pb-3">
            <?php $__currentLoopData = $product1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-3 col-sm-12" style="margin-left: 5px">
                    <a class="text-decoration-none" href="<?php echo e(url('single_product/'.$product->id)); ?>" style="color: black;">
                        <div class="card" style="width: 300px; height: 350px;padding-left: 10px; padding-bottom: 5px">
                            <img class="img-fluid" src="<?php echo e(url(str_replace(' ', '%20', $product->product_image))); ?>" width="200" height="200"  alt="">
                            <p style="font-size: 12px; font-weight: 900"><?php echo e($product->product_name); ?></p>
                            <p style="font-size: 12px;">Part No.:<?php echo e($product->product_part); ?>. Tag: <?php echo e($product->product_tag); ?></p>
                            <p style="font-size: 12px; font-weight: 900">N<?php echo e(number_format($product->product_price)); ?></p>
                            <a href="<?php echo e(url('single_product/'.$product->id)); ?>" class="btn" style="background-color: #FA701B; color: white">Add to cart</a>
                            <a href="<?php echo e(url('single_product/'.$product->id)); ?>" class="btn btn-link" style="color: black; font-weight: 900; font-size: 12px">Learn More</a>
                        </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div><a href=<?php echo e(url('/macbook')); ?> style="font-size: 12px; color: red; font-weight: 900"><b>View more here</b></a></div><br>
        
        
        <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Printer</span></h4>
               <div class="row px-xl-5 pb-3">
            <?php $__currentLoopData = $product2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="<?php echo e(url('single_product/'.$product->id)); ?>">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="card" style="width: 300px; height: 400px; padding-left: 10px; padding-bottom: 5px">
                            <img class="img-fluid" src="<?php echo e(url(str_replace(' ', '%20', $product->product_image))); ?>"  style="height: 250px; width: 250px" alt="">
                            <p style="color: black; font-size:12px; font-weight: 500; z-index: 100"><?php echo e($product->product_name); ?></p>
                            <p style="color: black; font-size:12px; font-weight: 500;z-index: 100">Part No.: <?php echo e($product->product_part); ?>. Tag<?php echo e($product->product_tag); ?></p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">N<?php echo e(number_format($product->product_price)); ?></p>
                            <a href="<?php echo e(url('single_product/'.$product->id)); ?>" class="btn" style="background-color: #FA701B; color: white">Add to cart</a>
                            <a href="<?php echo e(url('single_product/'.$product->id)); ?>" class="btn btn-link" style="color: black; font-weight: 900; font-size: 12px">Learn More</a>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <a href=<?php echo e(url('/printer')); ?> style="font-size: 12px; color: red; font-weight: 900"><b>View more here</b></a>
        </div>
        
        <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Laptop</span></h4>
        <div class="row px-xl-5 pb-3">
            <?php $__currentLoopData = $product3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="<?php echo e(url('single_product/'.$product->id)); ?>">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="card" style="width: 300px; height: 350px;padding-left: 10px; padding-bottom: 5px">
                            <img class="img-fluid" src="<?php echo e(url(str_replace(' ', '%20', $product->product_image))); ?>"  style="height: 250px; width: 250px" alt="">
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100"><?php echo e($product->product_name); ?></p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">Part No.: <?php echo e($product->product_part); ?>. Tag: <?php echo e($product->product_tag); ?></p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">N<?php echo e(number_format($product->product_price)); ?></p>
                            <a href="<?php echo e(url('single_product/'.$product->id)); ?>" class="btn" style="background-color: #FA701B; color: white">Add to cart</a>
                            <a href="<?php echo e(url('single_product/'.$product->id)); ?>" class="btn btn-link" style="color: black; font-weight: 900; font-size: 12px">Learn More</a>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <a href=<?php echo e(url('/computer')); ?> class="btn btn-link btn-sm" style="font-size: 12px; color: red; font-weight: 900"><b>View more here</b></a><hr>
        
        <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Server</span></h4>
            <div class="row px-xl-5 pb-3">
            <?php $__currentLoopData = $product4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="<?php echo e(url('single_product/'.$product->id)); ?>">
                    <div class="cat-item d-flex align-items-center mb-4">
                         <div class="card" style="width: 300px; height: 350px;padding-left: 10px; padding-bottom: 5px">
                            <img class="img-fluid" src="<?php echo e(url(str_replace(' ', '%20', $product->product_image))); ?>"  style="height: 200px; width: 200px" alt="">
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
            <a href=<?php echo e(url('/server')); ?> class="btn btn-link btn-sm" style="font-size: 12px; color: red; font-weight: 900"><b>View more here</b></a>
        </div>
    </div>
    <!-- Products End -->
<hr style="border: 2px dashed #FA701B">
    
    
        <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Recommended for you</span></h2>
        <div class="row px-xl-5 pb-3">
            <?php $__currentLoopData = $product_others; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="" style="color: black; font-weight: 900">
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
    <!-- Categories End -->



    <!-- Vendor Start -->
    <!--<div class="container-fluid py-5">-->
    <!--    <div class="row px-xl-5">-->
    <!--        <div class="col">-->
    <!--            <div class="owl-carousel vendor-carousel">-->
    <!--                <div class="bg-light p-4">-->
    <!--                    <img src="template/img/vendor-1.jpg" alt="">-->
    <!--                </div>-->
    <!--                <div class="bg-light p-4">-->
    <!--                    <img src="template/img/vendor-2.jpg" alt="">-->
    <!--                </div>-->
    <!--                <div class="bg-light p-4">-->
    <!--                    <img src="template/img/vendor-3.jpg" alt="">-->
    <!--                </div>-->
    <!--                <div class="bg-light p-4">-->
    <!--                    <img src="template/img/vendor-4.jpg" alt="">-->
    <!--                </div>-->
    <!--                <div class="bg-light p-4">-->
    <!--                    <img src="template/img/vendor-5.jpg" alt="">-->
    <!--                </div>-->
    <!--                <div class="bg-light p-4">-->
    <!--                    <img src="template/img/vendor-6.jpg" alt="">-->
    <!--                </div>-->
    <!--                <div class="bg-light p-4">-->
    <!--                    <img src="template/img/vendor-7.jpg" alt="">-->
    <!--                </div>-->
    <!--                <div class="bg-light p-4">-->
    <!--                    <img src="template/img/vendor-8.jpg" alt="">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Vendor End -->


    <!-- Footer Start -->
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\backup_code\resources\views\welcome.blade.php ENDPATH**/ ?>