<?php 
use Carbon\Carbon;
?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>

<div class="alert alert-success"><h5>Payment-Portal</h5></div><hr>
<div class="card bg-light">
    
<div class="card" style="width:400px; margin-left: 30%">
    <div class="card-body">
      <h4 class="card-title"><b>Breetek Integrated Solutions Invoice</b></h4>
      <h4 class="card-title"> Purchase details</h4>
    <table class="table-hover">
        <tr>
        <th>Date:</th>
        <th><?php echo e(Carbon::today()->toDateString()); ?></th>
        </tr>
        <tr>
            <td><b>Total</b>:</td>
            <td><?php echo 'N'. session()->get('total');
        $total= session()->get('total');?></td>
        </tr>
        <?php
        $tax=$total*0.05;
        $shippment=$total*0.1;
        ?>
        <tr>
            <td><b>Tax</b>:</td>
            <td>N<?php echo e($tax); ?>:</td>
        </tr>
        <tr>
           <td><b>Shippment</b>:</td>
           <td>N<?php echo e($shippment); ?>:</td>
        </tr>
        <tr>
           <td><b>Grand Total</b>:</td>
           <?php $grand_total= $shippment+$tax+$total; ?>
           <td><b>N<?php echo e(number_format($grand_total)); ?></b></td>
        </tr>
        <tr>
            <td><button class="btn" style="background-color: red; color: white" onclick="payWithPaystack()">Pay with debit card</button></td>
            <td><a href="<?php echo e(url('/delivery')); ?>" class="btn" style="background-color: #FA701B; color: white">Pay on delivery</a><br></td>
        </tr>
    </table>
    </div>
</div>
  <script src="https://js.paystack.co/v1/inline.js"></script>
    
<br>


<script>
var x=<?php echo e($grand_total); ?>

  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_live_4140055bb0d88129f42deca955798371241ec739',
      email: '<?php echo e(Auth::user()->email); ?>',
      amount: x*100,
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2349063918851"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);

       setTimeout(function() {
           window.location.href = "/success"
       }, 2000); // 2 second

      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ccharle2/public_html/resources/views/payment1.blade.php ENDPATH**/ ?>