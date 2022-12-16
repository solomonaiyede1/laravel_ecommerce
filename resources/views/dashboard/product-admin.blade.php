
<?php
use App\Models\CategoryModel;
use App\Models\ProductModel;
?>
<head>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="csrf-token" value="{{ csrf_token() }}">
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>

</head>
<body>

@php
     $category=CategoryModel::all();
    @endphp

 <!-- Button to Open the Modal -->
  @if(session('success'))
  <alert class="alert alert-success" style="width: 100%">Item saved successfully.</alert>
@endif

<!--modal box for editing -->
    <div class="modal fade" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
            <div class="alert alert-success">Edit and Update product details below.</div>
        <div class="modal-body">
            <form method="POST" action="{{url('product-admin')}}" enctype="multipart/form-data">
             @csrf
             @method('PUT')
             <!--<label for="product_name">Product ID</label>-->
            <input type="hidden" class="form-control" id="id1" name="id" required /><br>

            <label for="category">Product Category</label>
            <select class="form-control" id="product_category1" name="product_category" required>
                @foreach($category as $categories)
                <option>{{$categories->category_name}}</option>
                @endforeach
            </select><br>

            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" id="product_name1" name="product_name" required /><br>

            <label for="product_name">Product Tag</label>
            <input type="text" class="form-control" id="product_tag1" name="product_tag" required /><br>

            <label for="product_name">Product Part No.</label>
            <input type="text" class="form-control" id="product_part1" name="product_part" required /><br>

            <label for="product_price">Product price</label>
            <input type="number" class="form-control" id="product_price1" name="product_price" required /><br>

            <label for="product_description">Product Description1</label>
            <textarea class="form-control" id="product_description1" name="product_description" required style="height: 100px"></textarea>
            <!--<textarea class="form-control" id="product_description1" name="product_description" row="5" col="50" required></textarea><br>-->
             

            <label for="product_image">Product  Image</label>
            <input type="file" class="form-control" id="product_image1" name="product_image" required />
            <button type="submit" class="btn btn-primary" id="update" onclick="refresh()" name="update">Update</button>
        </form>
        
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <!--end of edit modal box -->


<!-- Modal Box  -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
            <div class="alert alert-info">Please, enter your product details below</div>
        <div class="modal-body">
            <form method="POST" action="{{url('product-admin')}}" enctype="multipart/form-data">
             @csrf
            <label for="category">Product Category</label>
            <select class="form-control" id="product_category" name="product_category" required>
                @foreach($category as $categories)
                <option>{{$categories->category_name}}</option>
                @endforeach
            </select><br>

            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" required /><br>

            <label for="product_name">Product Tag</label>
            <input type="text" class="form-control" name="product_tag" required /><br>

            <label for="product_name">Product Part No.</label>
            <input type="text" class="form-control" name="product_part" required /><br>

            <label for="product_price">Product price</label>
            <input type="number" class="form-control" name="product_price" required /><br>

            <label for="product_description">Product Description</label>
            <textarea class="form-control" id="product_description" name="product_description" row="5" col="50" required></textarea><br>

            <label for="product_image">Product  Image</label>
            <input type="file" class="form-control" name="product_image" required />
            <button type="submit" class="btn btn-primary" name="save">Save</button>
        </form>
        
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <!--end of modal box -->

@include('sidebar')
<div class="container">
<div class="alert alert-info"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" class="float-right">Add Product details here</button>
<button class="btn btn-sm" style="background-color: transparent; border: 1px solid green;" id="btnExport" onclick="exportReportToExcel(this)">Export as Excel File</button>
<b>Note:</b>Products are arranged according to the latest date of upload
</div>
@php
    $x=1;
@endphp
<table class="table table-hover table-stripped table-bordered table-responsive" style="overflow: scroll" id="table">
  <thead>
    <tr style="text-align: center">
      <th>S/N</th>
      <th>Product Category</th>
      <th>Product Name</th>
      <th>Product Tag</th>
      <th>Product Part no.</th>
      <th>Product Price</th>
      <th>Product Image</th>
      <th>Edit/Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($product as $products)
    <tr>
      <td>{{$x++}}</td>
      <td>{{$products->product_category}}</td>  
      <td>{{$products->product_name}}</td>
      <td>{{$products->product_tag}}</td>
      <td>{{$products->product_part}}</td>
      <td>{{$products->product_price}}</td>
      <td><img src="{{url(str_replace(' ', '%20', $products->product_image))}}"  height="50" width="50"/></td>
      <td>
      <form method="post" action="{{url('/product-admin-delete', $products->id)}}" >
      <!-- <td><a href="{{url('/product-admin-edit', $products->id)}}">Edit1</a> -->
      <button type="button" data-toggle="modal" value="{{$products->id}}" id="edit"  class="edit btn btn-info btn-sm">
          <i style="font-size:18px; color: white" class="fa">&#xf044;</i>
      </button>
          {{ method_field('DELETE') }}
         @csrf
      <button type="submit" class="btn btn-danger btn-sm"><i style="font-size:24px" class="fa">&#xf014;</i></button>
      </form></td>
    </tr>
@endforeach
  </tbody>
</table>
<div class="mx-auto">{{ $product->links('pagination::bootstrap-4') }}</div>
</div>
<!--end sidebar -->
<!--<input type="button" id="test" value="okay" />-->
</div>
</body>

<script>

$(document).ready(function(){
  $(document).on('click', '#edit', function(e){
    e.preventDefault();
    var prod_id= $(this).val();
    // console.log(prod_id);
    $('#myModal1').modal('show');
    $.ajax({
      type: 'GET',
      url: '/edit-product/'+prod_id,
      success: function(response){
        $('#id1').val(response.products.id);
        $('#product_category1').val(response.products.product_category);
        $('#product_name1').val(response.products.product_name);
        $('#product_tag1').val(response.products.product_tag);
        $('#product_part1').val(response.products.product_part);
        $('#product_price1').val(response.products.product_price);
        $('#product_description1').val(response.products.product_description);
      }
    })
  })

  $(document).on('click', '#update', function(e){
    e.preventDefault();
      var id=$('#id1').val();
      var product_category=$('#product_category1').val();
      var product_name=$('#product_name1').val();
      var product_tag=$('#product_tag1').val();
      var product_part=$('#product_part1').val();
      var product_price=$('#product_price1').val();
      var product_description=$('#product_description1').val();
      var product_image=$('#product_image1').val();
      var _token   = $('meta[name="csrf-token"]').attr('content');
      var data={
        'product_category': product_category,
        'product_name': product_name,
         _token: '{{csrf_token()}}',
        'product_tag': product_tag,
        'product_part': product_part,
        'product_price': product_price,
        'product_description': product_description,
      }

      $.ajaxSetup({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

      $.ajax({
        type: 'PUT',
        url: '/update-product/'+id,
        data: data,
        dataType: 'json',
        success: function(response){
          console.log(response);
          window.location.reload();
        }
      })
  })
})

function refresh() {    
    setTimeout(function () {
        location.reload()
    }, 1000);
}

    CKEDITOR.replace('product_description');   
    function getData() {  
        //Get data written in first Editor   
        var editor_data = CKEDITOR.instances['product_description'].getData();  
        //Set data in Second Editor which is written in first Editor  
        CKEDITOR.instances['product_description'].setData(editor_data);  
    }  
    
    //     CKEDITOR.replace('product_description1');   
    // function getData() {  
    //     //Get data written in first Editor   
    //     var editor_data = CKEDITOR.instances['product_description1'].getData();  
    //     //Set data in Second Editor which is written in first Editor  
    //     CKEDITOR.instances['product_description1'].setData(editor_data);  
    // } 
</script>

<script>
function exportReportToExcel() {
  let table = document.getElementsByTagName("table"); // you can use document.getElementById('tableId') as well by providing id to the table tag
  TableToExcel.convert(table[0], { // html code may contain multiple tables so here we are refering to 1st table tag
    name: `export.xlsx`, // fileName you could use any name
    sheet: {
      name: 'Sheet 1' // sheetName
    }
  });
}

function exportF(elem) {
  var table = document.getElementById("table");
  var html = table.outerHTML;
  var url = 'data:application/vnd.ms-excel,' + escape(html); // Set your html table into url 
  elem.setAttribute("href", url);
  elem.setAttribute("download", "export.xls"); // Choose the file name
  return false;
}

</script>