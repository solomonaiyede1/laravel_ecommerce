<!DOCTYPE html>
<html lang="en">
<?php
use App\Models\BannerModel;
?>

<head>
    <meta charset="utf-8">
    <title>Breetek Integrated Solutions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Breetek Integrated Solutions" name="keywords">
    <meta content="phones, servers, network, computers, laptops, macbook, accessories" name="description">
    

    <!-- Favicon -->
    <link href="#" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

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
        <style>
           .ml14 {
              font-weight: 200;
              font-size: 3.2em;
            }
            
            .ml14 .text-wrapper {
              position: relative;
              display: inline-block;
              padding-top: 0.1em;
              padding-right: 0.05em;
              padding-bottom: 0.15em;
            }
            
            .ml14 .line {
              opacity: 0;
              position: absolute;
              left: 0;
              height: 2px;
              width: 100%;
              background-color: #fff;
              transform-origin: 100% 100%;
              bottom: 0;
            }
            
            .ml14 .letter {
              display: inline-block;
              line-height: 1em;
            }
        </style>
</head>

@php
    $banner1=BannerModel::all();
@endphp
<body style="background-color: white">
    <!-- Topbar Start -->
    <div class="container-fluid" style="background-color: #FA701B; width: 100%; height: 60px; padding-top: 10px">
        <center><h1 class="ml14">
            @foreach($banner1 as $banner)
          <span class="letters" style="font-size: 20px; color: white; font-family: calibri; letter-spacing: 2px">{{$banner->title}}</span>
            @endforeach
              <span class="line" style="1px solid white"></span>
        </h1>
        </center>
        
    </div>

    
    <div class="container-fluid" style="background-color: white">
        <div class="row bg-secondary py-1 px-xl-5" style="background-color: white">
            <div class="col-lg-9 d-none d-lg-block" style="background-color: white">
                <div class="d-inline-flex align-items-center h-100" style="background-color: white">
                    <a href="{{'/'}}" class="text-decoration-none" style="background-color: white">
                        <img src="#" height="50" width="70" alt="Logo here"/>
                    </a>
                   
                    <a class="text-body mr-3" href="#" style="color: #FA701B; padding-left: 10px; font-weight: 600">About</a>
                    <a class="text-body mr-3" href="/new_arrival" style="color: #FA701B; font-weight: 600">New Arrival</a>
                    <a class="text-body mr-3" href="" style="color: #FA701B; font-weight: 900"> Call: +2349063918851</a>
                    <!--<a class="text-body mr-3" href="" style="color: #FA701B">FAQs</a>-->
                </div>
            </div>
            <div class="col-lg-3 text-center text-lg-right" style="background-color: white">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            @if(Auth::check())
                                <button class="dropdown-item" type="button"><a href="{{'/dashboard'}}" style="color: #FA701B">dashboard</a></button>
                                <form action="{{url('/logout')}}" method="post">
                                    @csrf
                                <a href="#" style="color: #FA701B"><button class="dropdown-item" type="submit" class="btn" style="background-color:white">Logout</button></a>
                            @else
                            <button class="dropdown-item" type="button"><a href="{{'/login'}}" style="color: #FA701B">Sign in</a></button>
                            <button class="dropdown-item" type="button"><a href="{{'/register'}}" style="color: #FA701B">Sign up</a></button>
                            @endif
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
                    <a href="{{url('/addToCart')}}" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
            <script src="https://use.fontawesome.com/f6f32b94e2.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
                
                <style>
                   @media only screen and (max-width: 600px) {
                      .mobile{
                        display: block;
                      }
                      .laptop{
                        display: none;
                      }
                    }
                </style>
    </div>
            
        <center style="background-color: white">
            <div class="row">
                <div class="col-sm-4 col-lg-2 col-md-2 ms-auto">
                    <a href="{{'/'}}" class="text-decoration-none" style="background-color: black">
                        <!--<img src="/images/logo.jpeg" height="50" width="70" />-->
                    </a>
                </div>
                <div class="col-sm-4 col-lg-8 col-md-8" style="background-color: white">
                    <form action="/home-search" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for products" name="search">
                            <div class="input-group-append">
                                <button class="btn" style="background-color:#FA701B; color: white">Search</i></button>
     
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </center>
        
        <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-1" style="background-color:#FA701B">
            <div class="col-lg-3 d-none d-lg-block" style="background-color: #FA701B">
                <a class="btn d-flex align-items-center justify-content-between w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;" style="background-color: #FA701B">
                    <h6 style="color: white"><i class="fa fa-bars mr-2" style="color: white; font-size: 14px; font-weight:900"></i>Categories</h6>
                    <i class="fa fa-angle-down" style="color: white"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <a href="{{url('/computer')}}" class="nav-item nav-link">Computing</a>
                        <!--<a href="{{url('/server')}}" class="nav-item nav-link">Server</a>-->
                        <a href="{{url('/computer')}}" class="nav-item nav-link">Laptop</a>
                        <a href="{{url('/network-and-storage')}}" class="nav-item nav-link">Network and Storage</a>
                        <a href="{{url('/printer')}}" class="nav-item nav-link">Printer</a>
                        <a href="{{url('/software')}}" class="nav-item nav-link">Software</a>
                        <a href="{{url('/accessories')}}" class="nav-item nav-link">Accessories</a>
                        <a href="{{url('/lifestyle')}}" class="nav-item nav-link">Lifestyle</a>
                        <a href="https://api.whatsapp.com/send?phone=+2349063918851" class="nav-item nav-link" style="color: white; font-size: 12px">chat here<i class="fa fa-whatsapp" style="color: white; font-size: 24px; font-weight: 900"></i></a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0" style="height: 40x; padding-top: 10px">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">System</span>
                        <span class="h1 text-uppercase text-light px-2 ml-n1" style="background-color:#FA701B">gadget</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse" style="background-color:#FA701B">
                        <div class="navbar-nav mr-auto py-0" style="background-color:#FA701B">
                            <a href="{{url('/')}}" class="nav-item nav-link" style="font-weight:900">Home</a>
                            <a href="{{url('/phone')}}" class="nav-item nav-link" style="font-weight:900">Phones</a>
                            <a href="{{url('/desktop')}}" class="nav-item nav-link" style="font-weight:900">Desktop</a>
                            <!--<a href="{{url('/toner-and-ink-catridges')}}" class="nav-item nav-link" style="font-size: 14px; font-weight:900">Toner and ink catridges</a>-->
                            <!--<a href="{{url('/webcam')}}" class="nav-item nav-link" style="font-size: 14px; font-weight:900">Webcam</a>-->
                            <a href="{{url('/computer')}}" class="nav-item nav-link" style="font-weight:900">Laptop</a>
                            <a href="{{url('/server')}}" class="nav-item nav-link" style="font-weight:900">Servers</a>
                            <!--<a href="{{url('/server-option')}}" class="nav-item nav-link" style="font-size: 14px; font-weight:900">Server Option</a>-->
                            <!--<a href="{{url('/printer')}}" class="nav-item nav-link" style="font-size: 14px; font-weight:900">Printer and Scanner</a>-->
                            <a href="{{url('/software')}}" class="nav-item nav-link" style="font-weight:900">Software</a>
                            <a href="{{url('/accessory')}}" class="nav-item nav-link" style="font-weight:900">Accessories</a>
                            <a href="{{url('/lifestyle')}}" class="nav-item nav-link" style="font-weight:900">Lifestyle</a>
                            <a href="{{url('/games-and-console')}}" class="nav-item nav-link" style="font-weight:900">Games and Console</a>
                            <a href="https://web.whatsapp.com/send?phone=+2349063918851" class="nav-item nav-link" style="color: white; font-size: 12px">chat here<i class="fa fa-whatsapp" style="color: white; font-size: 24px; font-weight: 900"></i></a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="{{url('/addToCart')}}" class="btn px-0 ml-3">
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
    
<script>

    // Wrap every letter in a span
var textWrapper = document.querySelector('.ml14 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml14 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeInOutExpo",
    duration: 900
  }).add({
    targets: '.ml14 .letter',
    opacity: [0,1],
    translateX: [40,0],
    translateZ: 0,
    scaleX: [0.3, 1],
    easing: "easeOutExpo",
    duration: 800,
    offset: '-=600',
    delay: (el, i) => 150 + 25 * i
  }).add({
    targets: '.ml14',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
  
  

 </script>
    <!-- Navbar End -->