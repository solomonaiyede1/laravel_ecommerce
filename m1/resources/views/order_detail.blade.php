<?php
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\OrderModel;
?>

@php
$order=OrderModel::with('order_user')->get();
@endphp


@include('sidebar')
<div class="container">
  <center><h2>Customer's Order and Personal Information</h2></center>
  @foreach($order_detail as $order_details)
  <div class="card-columns">
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Order ID: {{$order_details->id}}</p>
      </div>
    </div>
    
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Customer's Name: {{$order_details->order_user->name}}</p>
      </div>
    </div>
    
     <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Customer's email: {{$order_details->order_user->email}}</p>
      </div>
    </div>
    
     <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Customer's City: {{$order_details->order_user->city}}</p>
      </div>
    </div>
    
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Order Name: {{$order_details->name}}</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Price: {{$order_details->price}}</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Quantity: {{$order_details->qauntity}}</p>
      </div>
    </div>  
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Payment Status: {{$order_details->payment_status}}</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Order Date: {{$order_details->created_at}}</p>
      </div>
    </div>
  </div>
</div>
@endforeach


</div>
<!--end sidebar -->
</div>
</body>