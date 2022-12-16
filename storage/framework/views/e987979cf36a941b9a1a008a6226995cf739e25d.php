<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Breetek Integrated Solutions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Breetek Integrated Solutions" name="keywords">
    <meta content="phones, servers, network, computers, laptops, macbook, accessories" name="description">

    <!-- Favicon -->
    <link href="images/logo.jpeg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="template/lib/animate/animate.min.css" rel="stylesheet">
    <link href="template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="template/css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
      
      <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6305f70637898912e964d891/1gb7kpu5l';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid" style="background-image: linear-gradient(to right, #1d3044,#262f39,#d04032,#383e58,#4a808f,#0065b1,#006088);"><h1 id="ok" style="font-size: 40px; font-family: sans;text-align: center; color: white"
    class="animate__animated animate__backInDown animate__slower 10s animate__infinite infinite"></h1></div>
    
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="" style="color: #FA701B; font-weight: 900">Welcome to Breetek Integrated Solutions: A one-stop shop for all your IT gadgets.</a>
                    <!--<a class="text-body mr-3" href="" style="color: #FA701B">About</a>-->
                    <!--<a class="text-body mr-3" href="" style="color: #FA701B">Contact</a>-->
                    <!--<a class="text-body mr-3" href="" style="color: #FA701B">Help</a>-->
                    <!--<a class="text-body mr-3" href="" style="color: #FA701B">FAQs</a>-->
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <?php if(Auth::check()): ?>
                                <button class="dropdown-item" type="button"><a href="<?php echo e('/dashboard'); ?>" style="color: #FA701B">dashboard</a></button>
                                <form action="<?php echo e(url('/logout')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                <a href="#" style="color: #FA701B"><button class="dropdown-item" type="submit" class="btn" style="background-color:white">Logout</button></a>
                            <?php else: ?>
                            <button class="dropdown-item" type="button"><a href="<?php echo e('/login'); ?>" style="color: #FA701B">Sign in</a></button>
                            <button class="dropdown-item" type="button"><a href="<?php echo e('/register'); ?>" style="color: #FA701B">Sign up</a></button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Currency</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">NGN</button>
                            <!--<button class="dropdown-item" type="button">GBP</button>-->
                            <!--<button class="dropdown-item" type="button">CAD</button>-->
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <!--<a href="" class="btn px-0 ml-2">-->
                    <!--    <i class="fas fa-heart text-dark"></i>-->
                    <!--    <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>-->
                    <!--</a>-->
                    <a href="<?php echo e(url('/addToCart')); ?>" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="<?php echo e('/'); ?>" class="text-decoration-none" style="background-color: black">
                    <img src="/images/logo.jpeg" height="70" width="90" />
                    <!--<span style="color: white; background-color: black; font-size: 40px; font-family: arial; font-weight: 900">System</span>-->
                    <!--<span style="color: white; background-color:#FA701B; font-size: 40px; font-family: arial; font-weight: 900">gadget</span>-->
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="/home-search" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products" name="search">
                        <div class="input-group-append">
                            <button class="btn" style="background-color:#FA701B"><i class="fa fa-search" style="color:white"></i></button>
 
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">(+234) 817 329 1073</h5>
            </div>
        </div>
    </div>
    
        <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block" style="background-color: #FA701B">
                <a class="btn d-flex align-items-center justify-content-between w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;" style="background-color: #FA701B">
                    <h6 style="color: white"><i class="fa fa-bars mr-2" style="color: white"></i>Categories</h6>
                    <i class="fa fa-angle-down" style="color: white"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <a href="<?php echo e(url('/computer')); ?>" class="nav-item nav-link">Computing</a>
                        <a href="<?php echo e(url('/server')); ?>" class="nav-item nav-link">Server</a>
                        <a href="<?php echo e(url('/computer')); ?>" class="nav-item nav-link">Laptop</a>
                        <a href="<?php echo e(url('/network')); ?>" class="nav-item nav-link">Network</a>
                        <a href="<?php echo e(url('/printer')); ?>" class="nav-item nav-link">Printer</a>
                        <a href="<?php echo e(url('/software')); ?>" class="nav-item nav-link">Software</a>
                        <a href="<?php echo e(url('/accessories')); ?>" class="nav-item nav-link">Accessories</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">System</span>
                        <span class="h1 text-uppercase text-light px-2 ml-n1" style="background-color:#FA701B">gadget</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="<?php echo e(url('/')); ?>" class="nav-item nav-link">Home</a>
                            <a href="<?php echo e(url('/phone')); ?>" class="nav-item nav-link">Phones</a>
                            <a href="<?php echo e(url('/macbook')); ?>" class="nav-item nav-link">MacBook</a>
                            <a href="<?php echo e(url('/server')); ?>" class="nav-item nav-link">Servers</a>
                            <a href="<?php echo e(url('/computer')); ?>" class="nav-item nav-link">Laptop</a>
                            <a href="<?php echo e(url('/network')); ?>" class="nav-item nav-link">Network</a>
                            <a href="<?php echo e(url('/printer')); ?>" class="nav-item nav-link">Printer</a>
                            <a href="<?php echo e(url('/software')); ?>" class="nav-item nav-link">Software</a>
                            <a href="<?php echo e(url('/accessory')); ?>" class="nav-item nav-link">Accessories</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="<?php echo e(url('/addToCart')); ?>" class="btn px-0 ml-3">
                                <span style="color: white">Cart</span><sup><i class="fas fa-shopping-cart" style="color: white"></i></sup>
                                <!--<span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>-->
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    
    
    <script>
        var header=["Breetek Integrated Solutions, one stop shop for all IT hardware products", "Get Quality Product", "Free Shipping",
        "14-Day Return", "24/7 Support", "Call now: (+234) 817 329 1073"];
        var i=0;
        
        function animate(){
        	if(i<header.length){
        		document.getElementById("ok").innerHTML=header[i];
        		i++;
        		}
        	else{
        	i=0;
        	}
        }
        
        setInterval(animate, 2000);
    </script>
    <!-- Navbar End --><?php /**PATH C:\wamp64\www\backup_code\resources\views\header.blade.php ENDPATH**/ ?>