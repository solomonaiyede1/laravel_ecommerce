   <?php
use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
?>
@include('header')

    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">
            @foreach($product as $products)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="{{url('single_product/'.$products->id) }}">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="card" style="width: 300px; height: 350px;padding-left: 10px; padding-bottom: 5px; padding-top: 5px">
                            <img class="img-fluid" src="{{url(str_replace(' ', '%20', $products->product_image))}}"  style="height: 150px; width: 150px" alt="">
                            <p style="color: black; font-size:14px; font-weight: 900;z-index: 100">{{$products->product_name}}</p>
                            <p style="color: black; font-size:12px; font-weight: 900;z-index: 100">Part No.: {{$products->product_part}}. Tag: {{$products->product_tag}}</p>
                            <p style="color: black; font-size:14px; font-weight: 900;z-index: 100">N{{number_format($products->product_price)}}</p>
                            <a href="{{url('single_product/'.$products->id) }}" class="btn" style="background-color: #FA701B; color: white">Add to cart</a>
                            <a href="{{url('single_product/'.$products->id) }}" class="btn btn-link" style="color: black; font-weight: 900; font-size: 12px">Learn More</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Categories End -->


@include('partials/footer')

   