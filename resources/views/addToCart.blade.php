<?php
  use App\Models\ProductModel;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Breetek Integrated Solutions: Shopping cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
     .img1{
         width: 100%;
         height: 100px;
         padding: 10px 10px 10px 10px;
     } 
    </style>
  </style>
</head>
@include('partials/header')
<body>
<div class="container" style="width: 70%; margin-left: 10%">
    <?php
    // session()->forget('cart');
    // session()->forget('total');
    ?>
    <br>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12" style="background-color: #FA701B; height: 40px;">
        <center><h5 style="color: white; font-family: sans serif">Breetek Integrated Solutions Shopping cart</h5></center>
    </div>
</div><br><br>
<table class="table-hover" style="width: 100%;" border="0px">
<thead class="thead-dark" style="background-color: #FA701B; color: white; height: 50px;">
<tr>
<th><center><b>Product Image</b></center></th>
<th><center><b>Product Name</b></center></th>
<th><center><b></b>Product Price(N)</b></center></th>
<th><center><b></b> Quantity</b></center></th>
<th><center><b></b>Total price(N)</b></center></th>
<th><center><b>Action</b></center></th>
</tr>
</thead>
@php
$product=ProductModel::all();
@endphp

<?php
$total=0;
?>
@if(session()->get('cart')!=null)
@foreach(session()->get('cart') as $cart)
<tr border="1">
<td><center><img src={{str_replace(' ', '%20', '/public/'.$cart['product_image'])}} height="50" width="50" /></center></td>
<td><center>{{$cart['name']}}</center></td>
<td><center>{{$cart['price']}}</center></td>
<td><center>{{$cart['quantity']}}</center></td>
<?php $total1= $cart['price']*$cart['quantity'];?>
<td style="text-align: right"><?php echo 'N'.$total1; ?></td>
<?php
    $total=$total+ $total1;
    SESSION(['total'=> $total]);
    session()->get('total');
?>
<td><center>
    <a href="{{url('/addToCart', $cart['id'])}}" class="btn btn-danger" style="color: white">Remove</a>
    </center></td>
</tr>
@endforeach
@else
<a class="btn bt-transparent" href="{{url('/')}}" style="border: 1px green solid"><i style="font-size:24px; color: black" class="fa">&#xf07a;</i>Back to Home Page</a><br><br>
@endif
<tr>
<td></td>
<td></td>
<td></td>
@if(session()->get('cart')==null)
<br>
<td style="text-align: right"><a href="" class="btn" style="background-color: #FA701B; color: white">cart empty</a></td>
@else
<td style="text-align: right"><h6>Total: N{{session()->get('total')}}</h6></td>
@endif
</tr>
</table>
<!--@if(session()->get('cart')!=null)-->
<!--<form method="post" action="{{url('/payment1')}}" >-->
<!--@csrf-->
<!--@if(Auth::check())-->
<!--<input type="hidden" name="user_id" value='{{Auth::user()->id}}'>-->
<!--@endif-->
<!--<input type="hidden" name="payment_status" value='pending'>-->
<a class="btn bt-transparent" href="{{url('/')}}" style="border: 1px green solid"><i style="font-size:24px; color: white" class="fa">&#xf07a;</i>Shop more</a>
<a class="btn btn" style="background-color: #FA701B; color: white" href="{{url('/order')}}"><i style="font-size:24px; color: white" class="fa">&#xf07a;</i>Proceed to checkout</a>
<!--<button type="submit" class="btn btn-primary">Place an order</button>-->
</form>
@endif
</div>
@include('partials/footer')