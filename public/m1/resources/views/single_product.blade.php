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
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/images/header-logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><h3 style="color: white"><a href="{{url('/')}}" style="color: white">Marketmasta</a></h3></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul style="list-style-type:none; color: white; font-size: 25px">
                <li><a href="{{url('/')}}" style="color: white">Marketmasta</a></li>
            </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/login')}}" style="color: white">Sign in
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/register')}}" style="color: white">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: white">Help</a>
            </li>
            <li class="nav-item">
              <li><a href="{{url('/addToCart')}}"><i class="fa fa-shopping-cart" style="font-size:20px; color: white"></i></a></li>
            </li>
          </ul>
        </div>
      </div>
    </nav><br><br>

<style>
.description{
    width: 50%;
    height: 500px;
}
</style>
                
    
     <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
        @foreach($single_product as $s)
          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <img src="{{url('/public'.$s->product_image)}}"  class="testimonial-img" alt="" style="width: 380px; height: 350px">
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0" style="background-color: white height: 350px; width:380px">
                    <div class="card-body">
                        <h4>Product Description</h4>
                      <p class="card-text">
                          <b>Name of Product:</b> {{$s->product_name}}<br>
                          <b>Price of Product:</b> {{$s->product_price}}<br>
                          <div class="card bg-default">
                        <b>Product Description</b>
                              {{$s->product_description}}
                        </div>
                        <b>Quantity</b>
                          <form method="post" action="{{url('/addToCart', $s->id)}}" >
                            @csrf
                            <input type="number" name="quantity" required><br><br>
                            <button type="submit"  class="btn btn-primary" value="add to cart">Add to cart</button> 
                            </p>
                          </form>
                          </center>
                      </p>
                  </div>
          </div>
         @endforeach
         
        </div>

      </div>
    </section><!-- End Featured Services Section -->
    <br>
    <hr>
<div class="container">
     <h4 style="color: red">Top products</h4>
     <hr>
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel owl-theme" style="display: flex; justify-content: space-around; flex-wrap: wrap;">
            @foreach($product as $products)
            <a href="{{url('single_product/'.$products->id) }}">
                <div class="featured-item">
                  <img src="{{url('/public'.$products->product_image)}}" height="200"  width="200" alt="images here">
                  <center>
                  <h4>{{$products->product_name}}</h4>
                  <button class="btn btn-primary"><b>N</b>{{$products->product_price}}.00</button>
                  </center>
                </div>
              </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@include('partials/footer')
</body>
</html>