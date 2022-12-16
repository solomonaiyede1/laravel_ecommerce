
<?php
use App\Models\CategoryModel;
use App\Models\ProductModel;
?>

<body>
@include('sidebar')
<div class="container" style="margin-left: 15%">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Image</th>
      <th><a href="#" class="btn btn-warning">Action</a></th>
    </tr>
  </thead>
    @foreach($product as $products)
    <tr>
        <td>{{$products->id}}</td>
        <td>{{$products->product_name}}</td>
        <td>{{$products->product_price}}</td>
        <td><img src="{{url('/public'.$products->product_image)}}"  height="50" width="50"/></td>
        <td><button class="btn btn-warning">Edit</button><button class="btn btn-danger">Delete</button></td>
    </tr>
    
    @endforeach
</table>

</div>
</body>