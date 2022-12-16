
<?php
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\OrderModel;
?>
<style>
    body{
        font-family: sans-serif;
    }
    table{
        font-family: calibri;
        font-size: 20px;
        border: 1px solid rgba(0,0,255, 0.2);
    }
    td{
       border: 1px solid rgba(0,0,255, 0.2);  
    }
</style>

@include('sidebar')
<div class="container">
   <center><h6 style="font-weight: 900; text-info">Orders and Transaction details and History</h6></center>
  <center><h6 style="font-weight: 900; text-info; font-size: 14px; color: red">***Click the 
  <span style="background-color: red; color: black">processing</span> button only when transaction and delivery is completed successfully to change the
  status of the button to <span style="background-color: green; color: black">delivered</span>***</h6></center>
@php
$order=OrderModel::with('order_user')->orderBy('created_at', 'DESC')->paginate(10);
$order_client=OrderModel::where('id', Auth::user()->id)->paginate(10);
@endphp

<div class="container" style="margin-left: 2%">
<table class="table table-hover table-responsive table-primary">
  <thead>
    <tr class="table table-primary">
       <th>Customer Name</th>
      <th>Product Name</th>
      <th>Product Price</th>
      <th>Product Quantity</th>
      @if(Auth::user()->role=='admin')
      <th>Payment status</th>
      <th>Order Date and Time</th>
      <th>Action</th>
      <th>View</th>
      @endif
    </tr>
  </thead>
  <tbody>
  @foreach($order as $orders)
  @if(Auth::user()->role=="admin")
    <tr class="table table-light">
      <td>{{$orders->order_user->name}}</td>
      <td>{{$orders->name}}</td>
      <td>{{$orders->price}}</td>
      <td>{{$orders->quantity}}</td>
       @if($orders->payment_status=='pending')
      <td><a href="#" class="btn btn-warning btn-sm">Pay on delivery</a></td>
      @elseif($orders->payment_status=='paid')
      <td><a href="#" class="btn btn-success btn-sm">Paid</a></td>
      @endif
      <td>{{$orders->created_at}}</td>
        <form method="post" action="{{url('/orders', $orders->id)}}">
            @csrf
            @method('PUT')
            @if($orders->delivery_status=="proccessing")
            <input type="hidden" name="delivered" value="delivered" />
      <td><input type="submit" value="Processing" class="btn btn-danger btn-sm" /></td>
            @elseif($orders->delivery_status=="delivered")
            <input type="hidden" name="delivered" value="pending" />
          <td><input type="submit" value="delivered" class="btn btn-success btn-sm" /></td> 
          @else
          <td><input type="submit" value="Processing" class="btn btn-danger btn-sm" /></td>
          @endif
      </form>
      <td><a href="{{'/order_detail/'. $orders->id}}" class="btn btn-primary btn-sm">View Details</a></td>
    </tr>
    @endif
    @endforeach

  </tbody>
</table>
<div class="pag" style="margin-left: 5%;" class="bg-primary">{{ $order->links('pagination::bootstrap-4') }}</div>
</div>
<!--end sidebar -->
</div>
</body>