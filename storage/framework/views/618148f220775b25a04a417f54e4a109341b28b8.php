
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
<meta name="csrf-token" value="<?php echo e(csrf_token()); ?>">

</head>
<body>

<?php
     $category=CategoryModel::all();
    ?>

 <!-- Button to Open the Modal -->
  <?php if(session('success')): ?>
  <alert class="alert alert-success" style="width: 100%">Item saved successfully.</alert>
<?php endif; ?>

<!--modal box for editing -->
    <div class="modal fade" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
            <div class="alert alert-success">Edit and Update product details below.</div>
        <div class="modal-body">
            <form method="POST" action="<?php echo e(url('product-admin')); ?>" enctype="multipart/form-data">
             <?php echo csrf_field(); ?>
             <?php echo method_field('PUT'); ?>
             <!--<label for="product_name">Product ID</label>-->
            <input type="hidden" class="form-control" id="id1" name="id" required /><br>

            <label for="category">Product Category</label>
            <select class="form-control" id="product_category1" name="product_category" required>
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option><?php echo e($categories->category_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <form method="POST" action="<?php echo e(url('product-admin')); ?>" enctype="multipart/form-data">
             <?php echo csrf_field(); ?>
            <label for="category">Product Category</label>
            <select class="form-control" id="product_category" name="product_category" required>
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option><?php echo e($categories->category_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
<div class="alert alert-info"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" class="float-right">Add Product details here</button>
<b>Note:</b>Products are arranged according to the latest date of upload
</div>
<table class="table table-hover table-stripped table-bordered table-responsive" style="overflow: scroll">
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
  <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($products->id); ?></td>
      <td><?php echo e($products->product_category); ?></td>  
      <td><?php echo e($products->product_name); ?></td>
      <td><?php echo e($products->product_tag); ?></td>
      <td><?php echo e($products->product_part); ?></td>
      <td><?php echo e($products->product_price); ?></td>
      <td><img src="<?php echo e(url(str_replace(' ', '%20', $products->product_image))); ?>"  height="50" width="50"/></td>
      <td>
      <form method="post" action="<?php echo e(url('/product-admin-delete', $products->id)); ?>" >
      <!-- <td><a href="<?php echo e(url('/product-admin-edit', $products->id)); ?>">Edit1</a> -->
      <button type="button" data-toggle="modal" value="<?php echo e($products->id); ?>" id="edit"  class="edit btn btn-info btn-sm">
          <i style="font-size:18px; color: white" class="fa">&#xf044;</i>
      </button>
          <?php echo e(method_field('DELETE')); ?>

         <?php echo csrf_field(); ?>
      <button type="submit" class="btn btn-danger btn-sm"><i style="font-size:24px" class="fa">&#xf014;</i></button>
      </form></td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<div class="mx-auto"><?php echo e($product->links('pagination::bootstrap-4')); ?></div>
</div>
<!--end sidebar -->
<input type="button" id="test" value="okay" />
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
         _token: '<?php echo e(csrf_token()); ?>',
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
</script><?php /**PATH C:\wamp64\www\backup_code\resources\views\product-admin.blade.php ENDPATH**/ ?>