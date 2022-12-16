
<?php
use App\Models\CategoryModel;
use App\Models\ProductModel;
?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

 <!-- Button to Open the Modal -->
  @if(session('success'))
  <p class="bg-success text-white">Item saved successfully.</p>
@endif

@if(session('updated'))
  <p class="bg-success text-white">Item Updated successfully.</p>
@endif

    @php
     $category=CategoryModel::all();
    @endphp
<!-- Modal Box  -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
            <div class="alert alert-info">Please, enter your product details below</div>
        <div class="modal-body">
            <form method="POST" action="{{url('product-admin')}}" enctype="multipart/form-data">
             @csrf
              <label for="market_type">Market Type</label>
            <select class="form-control" id="market_type" name="market_type">
                <option value="market">markets</option>
                <option value="malls">malls</option>
                <option value="superstores">superstores</option>
            </select><br>
            
            <label for="category">Product Category</label>
            <select class="form-control" id="product_category" name="product_category">
                @foreach($category as $categories)
                <option>{{$categories->category_name}}</option>
                @endforeach
            </select><br>

            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" name="product_name" /><br>

            <label for="product_price">Product price</label>
            <input type="number" class="form-control" name="product_price" /><br>

            <label for="product_description">Product Description</label>
            <input type="text" class="form-control" name="product_description" /><br>

            <label for="product_image">Product  Image</label>
            <input type="file" class="form-control" name="product_image" />
            <button type="submit" class="btn btn-primary" name="save">Save</button>
        </form>
        
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

@include('sidebar')
<div class="container" style="margin-left: 15%">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Market Type</th>
      <th scope="col">Product Category</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Image</th>
      <th><button class="btn btn-primary" data-toggle="modal" data-target="#myModal" class="float-right">Add Product details here</button></th>
    </tr>
  </thead>
  <tbody>
  @foreach($product as $products)
    <tr>
      <td>{{$products->market_type}}</td> 
      <td>{{$products->product_category}}</td>  
      <td>{{$products->product_name}}</td>
      <td>{{$products->product_price}}</td>
      <td><img src="{{url('/public'.$products->product_image)}}"  height="50" width="50"/></td>
      <form method="post" action="{{url('/product-admin-delete', $products->id)}}" >
      <td><a href="{{url('/product-admin-edit', $products->id)}}" class="btn btn-warning">Edit</a>
          {{ method_field('DELETE') }}
         @csrf
      &nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-danger">Delete</button></td> 
      </form>
    </tr>
@endforeach
  </tbody>
</table>
<div class="pag" style="margin-left: 80%">{{ $product->links('pagination::bootstrap-4') }}</div>
</div>
<!--end sidebar -->
</div>
</body>