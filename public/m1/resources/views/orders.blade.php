
<?php
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\OrderModel;
?>

@include('sidebar')
<div class="container">
  <center><h5>Orders History</h5></center>
@php
$order=OrderModel::with('order_user')->orderBy('created_at', 'DESC')->paginate(10);
$order_client=OrderModel::where('id', Auth::user()->id)->paginate(10);
@endphp

<div class="container" style="margin-left: 2%">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Payment status</th>
      <th scope="col">Order Date and Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@if(Auth::user()->role=="admin")
  @foreach($order as $orders)
    <tr>
      <td>{{$orders->id}}</td>
      <td><a href="{{'/order_detail/'. $orders->id}}">{{$orders->order_user->name}}</a></td>
      <td><a href="{{'/order_detail/'. $orders->id}}">{{$orders->name}}</a></td>
      <td>{{$orders->price}}</td>
      <td>{{$orders->quantity}}</td>
      <td>{{$orders->payment_status}}</td>
      <td>{{$orders->created_at}}</td>
        <form method="post" action="{{url('/order', $orders->id)}}">
            @csrf
            <input type="hidden" name="delivered" value="delivered" />
      <td><input type="submit" value="Pending" class="btn btn-danger" /></td>
      </form>
    </tr>
    @endforeach
    
@elseif(Auth::user()->role=='user')
      @foreach($order_client as $orders)
    <tr>
      <td>{{$orders->id}}</a></td>
      <td><a href="{{'/order_detail/'. $orders->id}}">{{$orders->name}}</a></td>
      <td>{{$orders->price}}</td>
      <td>{{$orders->quantity}}</td>
      <td>{{$orders->payment_status}}</td>
      <td>{{$orders->created_at}}</td>
    </tr>
    @endforeach
@endif
  </tbody>
</table>
<div class="pag" style="margin-left: 80%">{{ $order->links('pagination::bootstrap-4') }}</div>
</div>
<!--end sidebar -->
</div>
</body>