<?php 
use Carbon\Carbon;
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketmasta</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

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

    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <h3>Welcome to Markets</h3>
        </div>
        <div class="humberger__menu__cart">
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>All Countries</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">National</a></li>
                    <li><a href="#">International</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="{{url('/login')}}"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="{{url('/')}}">Markets</a></li>
                <li><a href="{{url('/malls')}}">Malls</a></li>
                <li><a href="{{url('/superstores')}}">Superstores</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li><a href="{{url('/addToCart')}}">Shoping Cart</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <!--<div class="header__top__right__social">-->
        <!--    <a href="#"><i class="fa fa-facebook"></i></a>-->
        <!--    <a href="#"><i class="fa fa-twitter"></i></a>-->
        <!--    <a href="#"><i class="fa fa-linkedin"></i></a>-->
        <!--    <a href="#"><i class="fa fa-pinterest-p"></i></a>-->
        <!--</div>-->
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> info@marketmasta.com</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <h2>Marketmasta</h2>
                            <ul>
                                <li><i class="fa fa-envelope"></i> info@marketmasta.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <!--<div class="header__top__right__social">-->
                            <!--    <a href="#"><i class="fa fa-facebook"></i></a>-->
                            <!--    <a href="#"><i class="fa fa-twitter"></i></a>-->
                            <!--    <a href="#"><i class="fa fa-linkedin"></i></a>-->
                            <!--    <a href="#"><i class="fa fa-pinterest-p"></i></a>-->
                            <!--</div>-->
                            <div class="header__top__right__language">
                                <!--<img src="img/language.png" alt="">-->
                                <a class="nav-link" href="{{url('/addToCart')}}" style="color: black"><i class="fa fa-shopping-cart" style="color: black"></i>&nbsp&nbspCart</a>
                            </div>
                            <div class="header__top__right__auth">
                                <a class="nav-link" href="{{url('/login')}}"><i class="fa fa-user"></i>Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <h4><b>Welcome to Markets</b></h4>
                        <!--<a href="./index.html"><img src="img/logo.png" alt=""></a>-->
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{url('/')}}">Markets</a></li>
                            <li><a href="{{url('/malls')}}">malls</a></li>
                            <li><a href="{{url('/superstores')}}">Superstores</a></li>
                            <li><a href="#">Options</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{url('/')}}">Markets</a></li>
                                    <li><a href="{{url('/malls')}}">Malls</a></li>
                                    <li><a href="{{url('/superstores')}}">Superstores</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
<body>

<div class="alert alert-success"><h5>Payment-Portal</h5></div><hr>
<div class="card bg-light">
    
<div class="card" style="width:400px; margin-left: 30%">
    <div class="card-body">
      <h4 class="card-title"><b>Marketmasta Invoice</b></h4>
      <h4 class="card-title"> Purchase details</h4>
    <table class="table-hover">
        <tr>
        <th>Date:</th>
        <th>{{ Carbon::today()->toDateString()}}</th>
        </tr>
        <tr>
            <td><b>Total</b>:</td>
            <td><?php echo 'N'. session()->get('total');
        $total= session()->get('total');?></td>
        </tr>
        <?php
        $tax=$total*0.05;
        $shippment=$total*0.1;
        ?>
        <tr>
            <td><b>Tax</b>:</td>
            <td>N{{$tax}}:</td>
        </tr>
        <tr>
           <td><b>Shippment</b>:</td>
           <td>N{{$shippment}}:</td>
        </tr>
        <tr>
           <td><b>Grand Total</b>:</td>
           <?php $grand_total= $shippment+$tax+$total; ?>
           <td><b>N{{$grand_total}}</b>:</td>
        </tr>
        <tr>
            <td><button class="btn" style="background-color: red; color: white" onclick="payWithPaystack()">Pay with debit card</button></td>
            <td><a href="{{url('/')}}" class="btn btn-primary">Pay on delivery</a><br></td>
        </tr>
    </table>
    </div>
</div>
  <script src="https://js.paystack.co/v1/inline.js"></script>
    
<br>


<script>
var x={{$grand_total}}
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_test_c9124b21485268af8dd8ad2f9aa0e90b4ea47a25',
      email: 'customer@email.com',
      amount: x*100,
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);

       setTimeout(function() {
           window.location.href = "/success"
       }, 2000); // 2 second

      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>





    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <h3>Marketmasta</h3>
                        </div>
                        <ul>
                            <li>Phone: +2349063918851</li>
                            <li>Email: info@marketmasta.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Marketmasta</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>