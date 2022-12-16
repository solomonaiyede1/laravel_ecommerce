
<?php
use App\Models\CategoryModel;
use App\Models\ProductModel;
?>

<body>
@include('sidebar')
<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Product Categogy</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Tag</th>
      <th scope="col">Product Part No.</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Image</th>
      <th scope="col">Action</a></th>
    </tr>
  </thead>
    @foreach($product as $products)
    <tr>
        <td>{{$products->id}}</td>
        <td>{{$products->product_category}}</td>
        <td>{{$products->product_name}}</td>
        <td>{{$products->product_tag}}</td>
        <td>{{$products->product_part}}</td>
        <td>{{$products->product_price}}</td>
        <td><img src="{{url(str_replace(' ', '%20', $products->product_image))}}"  height="50" width="50"/></td>
        <td>
        <!--<button class="btn btn-warning">Edit</button>-->
        <button class="btn btn-danger btn-sm"><i style="font-size:24px" class="fa">&#xf014;</i></button></td>
    </tr>
    
    @endforeach
</table>

</div>
</body>