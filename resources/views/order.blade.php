@include('partials/header')
<br><br><br>

<div class="container">
            @if(session()->get('cart')!=null)
            <form method="post" action="{{url('/payment1')}}" >
            @csrf
            @if(Auth::check())
            <input type="hidden" name="user_id" value='{{Auth::user()->id}}'>
            @endif
            <input type="hidden" name="payment_status" value='pending'>
            <a class="btn" style="background-color: red; color: white"  href="{{url('/')}}"><i style="font-size:24px; color: white" class="fa">&#xf07a;</i>Shop more</a>
            <button type="submit" class="btn btn-info">Proceed to checkout</button>
            </form>
            @endif
</div>

 @include('partials/footer')