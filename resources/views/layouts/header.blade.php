<?php
use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="img/logo1.jpeg" rel="icon">
    <link href="img/logo1.jpeg" rel="apple-touch-icon">
    <title>Breetek Integrated Solutions</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    
    <style>
.flex-container{
    display: flex;
    overflow-x: scroll;
    justify-content: space-between;
}
.item{
    margin-left: 5%;
}
</style>

</head>

<body>

<div id="test" class="container-fluid" style="height: 50px; padding: 3px 3px 3px 3px; background-image: url('img/back1.jpg');"></div>

<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}" style="color: white">Breetek Integrated Solutions</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
@if(Auth::user())
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{url('/addToCart')}}" style="color: white">
            <i class="fa fa-shopping-cart" style="color: white"></i>&nbsp&nbspCart</a>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <a href="{{url('/dashboard')}}" type="button" style="color: white" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user" style="color: white"></i> {{Auth::user()->name}}
                </a>
                <div class="dropdown-menu">
                
                <a class="dropdown-item btn btn-link"  href="{{url('/dashboard')}}" style="font-weight: 600">
                    Dashboard
                </a>

                    <a class="dropdown-item" href="#">
                        <form action="{{url('/logout')}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-link" style="background-color:white; color: black; font-weight: 600">Logout</button>
                        </form>
                    </a>

                    <!-- <a class="dropdown-item" href="#">Link 1</a> -->
                </div>
            </div>

        </li>
      </ul>
    </div>
@else
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{url('/addToCart')}}" style="color: white">
            <i class="fa fa-shopping-cart" style="color: white"></i>&nbsp&nbspCart</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/login')}}" style="color: white">
            <i class="fa fa-user" style="color: white"></i>Login</a>
        </li>
      </ul>
    </div>
@endif 
  </div>
</nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu">
                        <ul class="nav ms-auto">
                            <li class="nav-item"><a class="nav-link text-info" href="{{url('/macbook')}}">MacBook</a></li>
                            <li class="nav-item"><a class="nav-link text-info" href="{{url('/server')}}">Servers</a></li>
                            <li class="nav-item"><a class="nav-link text-info" href="{{url('/computer')}}">Laptops</a></li>
                            <li class="nav-item"><a class="nav-link text-info" href="{{url('/network')}}">Networks</a></li>
                            <li class="nav-item"><a class="nav-link text-info" href="{{url('/printer')}}">Printers</a></li>
                            <li class="nav-item"><a class="nav-link text-info" href="{{url('/software')}}">Softwares</a></li>
                            <li class="nav-item"><a class="nav-link text-info" href="{{url('/accessory')}}">Accessories</a></li>
                            <i class="fa fa-phone">
                            </i><b> &nbsp&nbsp&nbsp(+234) 817 329 1073</b>&nbsp&nbsp&nbspsupport 24/7 time
                       
                            <li><a href="#"></a></li>
                        </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->

<script>
    var a="<center><h3 style='font-family: sans serif; font-weight: 900; color: white'>Shop Events & Save up to 65% off</h3></center>";
    var b="<center><h3 style='font-family: sans serif; font-weight: 900; color: white'>Get in touch Now!</h3></center>";
    var c="<center><h3 style='font-family: sans serif; font-weight: 900; color: white'>customer's satisfaction is our watchword</h3></center>";
    var d="<center><h3 style='font-family: sans serif; font-weight: 900; color: white'>Call to order on (+234)817 329 1073</h3></center>";
    var x=[a,b,c,d];

    var i=0;
    var y=document.getElementById("test");
    function ads(){
    if(i<x.length){
    y.innerHTML=(x[i]);
    i++;
    }else{
    i=0;
    }
    }
    window.onload=setInterval(ads, 1000);
</script>
  