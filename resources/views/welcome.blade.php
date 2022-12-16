<?php
use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
?>

    @php
        $new_arrival= ProductModel::orderby('created_at', 'DESC')->limit(24)->get();
        $product_others=ProductModel::inRandomOrder()->skip(50)->limit(20)->get();
        $product_all=ProductModel::inRandomOrder()->limit(12)->get();
        $product1=ProductModel::where('product_category', 'MACBOOK PRO')->limit(4)->get();
        $product2=ProductModel::where('product_category', 'printer')->limit(4)->get();
        $product3=ProductModel::where('product_category', 'laptop')->limit(4)->get();
        $product4=ProductModel::where('product_category', 'network')->limit(4)->get();
        $product5=ProductModel::where('product_category', 'phone')->limit(4)->get();
        $product6=ProductModel::where('product_category', 'Web Cam')->limit(4)->get();
        $product7=ProductModel::where('product_category', 'DESKTOP')->limit(4)->get();
        $product8=ProductModel::where('product_category', 'SERVER OPTION')->limit(4)->get();
        $product9=ProductModel::where('product_category', 'accessory')->limit(4)->get();
        $product10=ProductModel::where('product_category', 'lifestyle')->limit(4)->get();
        $product11=ProductModel::where('product_category', 'Games and Consoles')->limit(4)->get();
    @endphp

@include('partials/header')
    <!-- Topbar End -->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->

<link href="css/index.css" rel="stylesheet">
    <!-- Navbar Start -->

<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>

<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="background-color: white">
    
      <!-- Modal content-->
      <div class="modal-content" style="background-color: white">
          <center><h4><span style="color: black">Breetek Integrated Solutions</span></h4></center>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <b><center><i><h4 style="color: red; font-family: calibri">*Please, Note:</h4></i></center></b>
          <b><center style="color: red; font-family: calibri"><i>**Price may vary due to exchange rate instability.**</i></center></b>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" style="color: white" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

  
    <!-- Carousel Start -->
    <div class="container-fluid mb-3" style="background-color:white">
        <div class="row px-xl-5">
            
            <div class="col-sm-12 col-md-3 col-lg-3 bg-light" style="margin-top: 10px; border: 1px solid black">
                <div style="height: 350px; padding-top: 10px; width: 230px;">
                    <!--<img class="img-fluid" src="images/itel-s17.jpg" height="100" width="100" alt="">-->
                    <ul style="list-style-type: circle; line-height: 30px">
                        <li><a href="{{url('/toner-and-ink-catridges')}}" style="font-size: 16px; color: black; font-family: sans serif">Toner and ink catridges</a></li>
                        <li><a href="{{url('/printer')}}" style="font-size: 16px; color: black; font-family: sans serif">Printer and Scanner</a></li>
                        <li><a href="{{url('/server-option')}}" style="font-size: 16px;color: black; font-family: sans serif">Server Option</a></li>
                        <li><a href="{{url('/webcam')}}" style="font-size: 16px; color: black; font-family: sans serif">Webcam</a></li>
                        <li><a href="{{url('/phone')}}" style="font-size: 16px; color: black; font-family: sans serif">Phones</a></li>
                        <li><a href="{{url('/desktop')}}" style="font-size: 16px;color: black; font-family: sans serif">Desktop</a></li>
                        <li><a href="{{url('/computer')}}" style="font-size: 16px;color: black; font-family: sans serif">Laptop</a></li>
                        <li><a href="{{url('/server')}}" style="font-size: 16px; color: black; font-family: sans serif">Servers</a></li>
                        <li><a href="{{url('/software')}}" style="font-size: 16px; color: black; font-family: sans serif">Software</a></li>
                        <li><a href="{{url('/accessory')}}" style="font-size: 16px;color: black; font-family: sans serif">Accessories</a></li>
                        <li><a href="{{url('/games-and-console')}}" style="font-size: 16px;color: black; font-family: sans serif">Games and Console</a></li>
                        <li><a href="{{url('/network-and-storage')}}" style="font-size: 16px;color: black; font-family: sans serif">Network and Storage</a></li>
                    </ul>
                </div>
                <hr>
                <div class="card" style="padding-bottom: 5px">
                    <div class="card-body" style="border: none; background-color:white">
                        <h6 style="font-size: 14px">We operate <b>SMARTLY</b></h6>
                        <h6  style="font-size: 14px">We operate <b>24/7</b></h6>
                        <h6 style="font-size: 14px">Your choice is our priority<b>24/7</b></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" style="background-color:white">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" style="border: none">
                        <div class="carousel-item position-relative active  card-body" style="height: 430px;">
                             <p style="color: white">All kinds of Laptops are available
                             <a class="btn btn-danger" style="background-color: red" href="{{url('/computer')}}">Shop Now</a>
                             </p>
                            <img class="position-absolute w-100 h-100" src="img/mac11.png" style="object-fit: contain;">

                        </div>
                        <div class="carousel-item position-relative  card-body" style="height: 430px;">
                             <p style="color: white">All kinds of phones are available
                             <a class="btn btn-danger" style="background-color: red" href="{{url('/phone')}}">Shop Now</a>
                             </p>
                            <img class="position-absolute w-100 h-100" src="img/phone12.png" style="object-fit: contain;">
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <p style="color: white">All kinds of Phones are available
                                <a class="btn btn-danger" style="background-color: red" href="{{url('/phone')}}">Shop Now</a>
                            </p>
                            <img class="position-absolute w-100 h-100" src="img/phone11.png" style="object-fit: contain;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3" style="margin-top: 10px; border: 1px solid black">
                <div style="height: 200px; padding-top: 3px; background-color: white" class="card-body">
                    <!--<img class="img-fluid" src="images/itel-s17.jpg" height="100" width="100" alt="">-->
                    <center><img style="width: auto; height: 200px" class="img-fluid" id="im" /></center>

                </div>
                    <center><a href="" class="btn" style="background-color:red; color: white">Shop Now</a></center>
                <hr>
                <div style="height: 200px; padding-top: 3px;background-color: white" class="card-body" style="margin-top: 10px">
                    <center><img style="width: auto; height: 200px;" class="img-fluid" id="im1" /></center>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


        <script>
            var text=["img/one.png", "img/two.png", "img/three.png", "img/four.png", "img/five.png"];
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
            
            var text1=["img/six.jpg", "img/one.png", "img/two.png",
            "img/three.png", "img/four.png"];
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

    <div class="container-fluid" style="background-color:white">
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
                    <img src="img/one.png" style="width: 150px; height: 150px" class="img-rounded" alt="First slide">
                    <img src="img/two.png" style="width: 150px; height: 150px" class="img-rounded"  alt="First slide">
                    <img src="img/three.png" style="width: 150px; height: 150px" class="img-rounded"  alt="First slide">
                    <img src="img/four.png" class="img-rounded"  style="width: 150px; height: 150px"  alt="First slide">
                  </div>
                </div>
                <div class="d-none d-md-block d-lg-none">
                  <div class="slide-box">
                    <img src="img/five.png" style="width: 150px; height: 150px" class="img-rounded"  alt="First slide">
                    <img src="img/six.jpg" style="width: 150px; height: 150px" class="img-rounded"  alt="First slide">
                    <img src="img/one.png" style="width: 150px; height: 150px" class="img-rounded"  alt="First slide">
                  </div>
                </div>
                <div class="d-none d-sm-block d-md-none">
                  <div class="slide-box">
                    <img src="img/one.png" style="width: 150px; height: 150px" class="img-rounded"  alt="First slide">
                    <img src="img/two.png" style="width: 150px; height: 150px" class="img-rounded"  alt="First slide">
                  </div>
                </div>
                <div class="d-block d-sm-none">
                  <img class="d-block w-100" src="img/three.png" style="width: 150px; height: 150px" class="img-rounded"  alt="First slide">
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-none d-lg-block">
                  <div class="slide-box">
                    <img src="img/three.png" style="width: 150px; height: 150px" class="img-rounded"  alt="Second slide">
                    <img src="img/four.png" style="width: 150px; height: 150px" class="img-rounded"  alt="Second slide">
                    <img src="img/five.png" style="width: 150px; height: 150px" class="img-rounded"   alt="Second slide">
                    <img src="img/six.jpg" style="width: 150px; height: 150px"  class="img-rounded"  alt="Second slide">
                  </div>
                </div>
                <div class="d-none d-md-block d-lg-none">
                  <div class="slide-box">
                    <img src="img/one.png" style="width: 150px; height: 150px" class="img-rounded"  alt="Second slide">
                    <img src="img/two.png" style="width: 150px; height: 150px" class="img-rounded"  alt="Second slide">
                    <img src="img/three.png" style="width: 150px; height: 150px" class="img-rounded"  alt="Second slide">
                  </div>
                </div>
                <div class="d-none d-sm-block d-md-none">
                  <div class="slide-box">
                    <img src="img/four.png" class="img-rounded"  alt="Second slide">
                    <img src="img/five.png" style="width:150px; height: 150px" class="img-rounded"  alt="Second slide">
                  </div>
                </div>
                <div class="d-block d-sm-none">
                  <img class="d-block w-100" src="img/six.jpg" style="width: 150px; height: 150px" class="img-rounded"  alt="Second slide">
                </div>
              </div>
            </div>

          </div>
        </div>
      </div><br>

<!--slider ends here -->



<div class="container-fluid pt-5">
        <h3 style="font-family: calibri; color: black; padding-left: 20px">Top Products</h3>
    <div class="row px-xl-5 pb-3"  style="padding-top: 10px; overflow-X: scroll;">
        @foreach($product_all as $product)
        <div class="col-lg-3 col-md-3 col-sm-12 pb-1">
            <a class="text-decoration-none" href="{{url('single_product/'.$product->id) }}" style="color: black; font-weight: 1500">
                <div class="cat-item d-flex align-items-center mb-4">
                    <div class="card" style="width: 100%;padding-left: 12px; padding-bottom: 5px; padding-top: 5px; border: none">
                        <img class="img-fluid rounded img-thumbnail" src="{{url(str_replace(' ', '%20', $product->product_image))}}" style="height: 200px; width: 200px; filter: contrast(105%)" alt="">
                        <span style="color: black; font-size:12px; font-weight: 900;z-index: 100; color: black">N{{number_format($product->product_price)}}</span>
                        <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">{{Str::limit($product->product_name, $limit = 70, $end = '')}}</p>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3" style="background-color:rgba(0,0,255, 0.3)">Featured Products</span></h2>
        
        <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Phones</span></h4>
         <div class="row px-xl-5 pb-3">
            @foreach($product5 as $product)
            <div class="col-lg-3 col-md-3 col-sm-12 pb-1">
                <a class="text-decoration-none" href="{{url('single_product/'.$product->id) }}">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="card" style="width: 300px; height: 350px;padding-left: 10px; padding-bottom: 5px; padding-top: 5px">
                            <img class="img-fluid" src="{{url(str_replace(' ', '%20', $product->product_image))}}"  style="height: 200px; width: 200px; filter: contrast(105%)" alt="">
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">{{Str::limit($product->product_name, $limit = 70, $end = '')}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">Part No.: {{$product->product_part}}. Tag: {{$product->product_tag}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100;">
                                N{{number_format($product->product_price)}}
                            </p>
                            <a href="{{url('single_product/'.$product->id) }}" class="btn btn-info" style="background-color: #FA701B; color: white">Add to cart</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        
        
        <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Desktop</span></h4>
         <div class="row px-xl-5 pb-3">
            @foreach($product7 as $product)
            <div class="col-lg-3 col-md-3 col-sm-12 pb-1">
                <a class="text-decoration-none" href="{{url('single_product/'.$product->id) }}">
                    <div class="cat-item d-flex align-items-center mb-4">
                       <div class="card" style="width: 300px; height: 400px;padding-left: 10px; padding-bottom: 5px; padding-top: 5px">
                            <img class="img-fluid" src="{{url(str_replace(' ', '%20', $product->product_image))}}"  style="height: 200px; width: 200px; filter: contrast(105%)" alt="">
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">{{Str::limit($product->product_name, $limit = 70, $end = '')}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">Part No.: {{$product->product_part}}. Tag: {{$product->product_tag}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100; color:black">N{{number_format($product->product_price)}}
                            </p>
                            <a href="{{url('single_product/'.$product->id) }}" class="btn btn-info" style="background-color: #FA701B; color: white">Add to cart</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        
        <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Server Option</span></h4>
         <div class="row px-xl-5 pb-3">
            @foreach($product8 as $product)
            <div class="col-lg-3 col-md-3 col-sm-12 pb-1">
                <a class="text-decoration-none" href="{{url('single_product/'.$product->id) }}">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="card" style="width: 300px; height: 350px;padding-left: 10px; padding-bottom: 5px; padding-top: 5px">
                            <img class="img-fluid" src="{{url(str_replace(' ', '%20', $product->product_image))}}" style="height: 200px; width: 200px; filter: contrast(105%)" alt="">
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">{{Str::limit($product->product_name, $limit = 70, $end = '')}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">Part No.: {{$product->product_part}}. Tag: {{$product->product_tag}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100; color: black">N{{number_format($product->product_price)}}
                            </p>
                            <a href="{{url('single_product/'.$product->id) }}" class="btn btn-info" style="background-color: #FA701B; color: white">Add to cart</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        
        <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Accessory</span></h4>
         <div class="row px-xl-5 pb-3">
            @foreach($product9 as $product)
            <div class="col-lg-3 col-md-3 col-sm-12 pb-1">
                <a class="text-decoration-none" href="{{url('single_product/'.$product->id) }}">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="card" style="width: 300px; height: 350px;padding-left: 10px; padding-bottom: 5px; padding-top: 5px">
                            <img class="img-fluid" src="{{url(str_replace(' ', '%20', $product->product_image))}}"  style="height: 200px; width: 200px; filter: contrast(105%)" alt="">
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">{{Str::limit($product->product_name, $limit = 70, $end = '')}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">Part No.: {{$product->product_part}}. Tag: {{$product->product_tag}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100; color: black">N{{number_format($product->product_price)}}
                            </p>
                            <a href="{{url('single_product/'.$product->id) }}" class="btn btn-info" style="background-color: #FA701B; color: white">Add to cart</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        
        
        <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Lifestyle</span></h4>
         <div class="row px-xl-5 pb-3">
            @foreach($product10 as $product)
            <div class="col-lg-3 col-md-3 col-sm-12 pb-1">
                <a class="text-decoration-none" href="{{url('single_product/'.$product->id) }}">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="card" style="width: 300px; height: 350px;padding-left: 10px; padding-bottom: 5px; padding-top: 5px">
                            <img class="img-fluid" src="{{url(str_replace(' ', '%20', $product->product_image))}}"  style="height: 200px; width: 200px; filter: contrast(105%)" alt="">
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">{{Str::limit($product->product_name, $limit = 70, $end = '')}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">Part No.: {{$product->product_part}}. Tag: {{$product->product_tag}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100; color: black">N{{number_format($product->product_price)}}
                            </p>
                            <a href="{{url('single_product/'.$product->id) }}" class="btn btn-info" style="background-color: #FA701B; color: white">Add to cart</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        
        <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Games and Console</span></h4>
         <div class="row px-xl-5 pb-3">
            @foreach($product11 as $product)
            <div class="col-lg-3 col-md-3 col-sm-12 pb-1">
                <a class="text-decoration-none" href="{{url('single_product/'.$product->id) }}">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="card" style="width: 300px; height: 350px;padding-left: 10px; padding-bottom: 5px; padding-top: 5px">
                            <img class="img-fluid" src="{{url(str_replace(' ', '%20', $product->product_image))}}"  style="height: 200px; width: 200px; filter: contrast(105%)" alt="">
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">{{Str::limit($product->product_name, $limit = 70, $end = '')}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">Part No.: {{$product->product_part}}. Tag: {{$product->product_tag}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100; color: black">N{{number_format($product->product_price)}}
                            </p>
                            <a href="{{url('single_product/'.$product->id) }}" class="btn btn-info" style="background-color: #FA701B; color: white">Add to cart</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        
        
        <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Printer and Scanner</span></h4>
               <div class="row px-xl-5 pb-3">
            @foreach($product2 as $product)
            <div class="col-lg-3 col-md-3 col-sm-12 pb-1">
                <a class="text-decoration-none" href="{{url('single_product/'.$product->id) }}">
                    <div class="cat-item d-flex align-items-center mb-4">
                       <div class="card" style="width: 300px; height: 350px;padding-left: 10px; padding-bottom: 5px; padding-top: 5px">
                            <img class="img-fluid" src="{{url(str_replace(' ', '%20', $product->product_image))}}" style="height: 200px; width: 200px; filter: contrast(105%)" alt="">
                            <p style="color: black; font-size:12px; font-weight: 500; z-index: 100">{{Str::limit($product->product_name, $limit = 70, $end = '')}}</p>
                            <p style="color: black; font-size:12px; font-weight: 500;z-index: 100">Part No.: {{$product->product_part}}. Tag{{$product->product_tag}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100; color: black">N{{number_format($product->product_price)}}
                            </p>
                            <a href="{{url('single_product/'.$product->id) }}" class="btn btn-info" style="background-color: #FA701B; color: white">Add to cart</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        
        <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Laptop</span></h4>
        <div class="row px-xl-5 pb-3">
            @foreach($product3 as $product)
            <div class="col-lg-3 col-md-3 col-sm-12 pb-1">
                <a class="text-decoration-none" href="{{url('single_product/'.$product->id) }}">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="card" style="width: 300px; height: 350px;padding-left: 10px; padding-bottom: 5px; padding-top: 5px">
                            <img class="img-fluid" src="{{url(str_replace(' ', '%20', $product->product_image))}}" style="height: 200px; width: 200px; filter: contrast(105%)" alt="">
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">{{Str::limit($product->product_name, $limit = 70, $end = '')}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">Part No.: {{$product->product_part}}. Tag: {{$product->product_tag}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100; color: black">N{{number_format($product->product_price)}}
                            </p>
                            <a href="{{url('single_product/'.$product->id) }}" class="btn btn-info" style="background-color: #FA701B; color: white">Add to cart</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    

        <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Servers</span></h4>
            <div class="row px-xl-5 pb-3">
            @foreach($product4 as $product)
            <div class="col-lg-3 col-md-3 col-sm-12 pb-1">
                <a class="text-decoration-none" href="{{url('single_product/'.$product->id) }}">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="card" style="width: 300px; height: 350px;padding-left: 10px; padding-bottom: 5px; padding-top: 5px">
                            <img class="img-fluid" src="{{url(str_replace(' ', '%20', $product->product_image))}}" style="height: 200px; width: 200px; filter: contrast(105%)" alt="">
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">{{Str::limit($product->product_name, $limit = 70, $end = '')}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">Part No.: {{$product->product_part}}. Tag: {{$product->product_tag}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100; color: black">N{{number_format($product->product_price)}}
                            </p>
                              <a href="{{url('single_product/'.$product->id) }}" class="btn btn-info" style="background-color: #FA701B; color: white">Add to cart</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Products End -->
<!--<hr style="border: 2px dashed #FA701B">-->
    
    
        <div class="container-fluid pt-5">
        <h2>Recommended for you</h1>
        <div class="row px-xl-5 pb-3">
            @foreach($product_others as $product)
            <div class="col-lg-3 col-md-3 col-sm-12 pb-1">
                <a class="text-decoration-none" href="" style="color: black; font-weight: 900">
                    <div class="cat-item d-flex align-items-center mb-4">
                       <div class="card" style="width: 300px; height: 350px;padding-left: 10px; padding-bottom: 5px; padding-top: 5px">
                            <img class="img-fluid" src="{{url(str_replace(' ', '%20', $product->product_image))}}" style="height: 200px; width: 200px; filter: contrast(105%)" alt="">
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">{{Str::limit($product->product_name, $limit = 70, $end = '')}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">Part No.: {{$product->product_part}}. Tag: {{$product->product_tag}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100; color: black">N{{number_format($product->product_price)}}
                            </p>
                              <a href="{{url('single_product/'.$product->id) }}" class="btn btn-info" style="background-color: #FA701B; color: white">Add to cart</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Categories End -->



    <!-- Footer Start -->
@include('partials/footer')