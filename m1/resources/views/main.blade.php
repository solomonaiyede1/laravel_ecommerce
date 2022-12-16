<?php
use App\Models\User;
use App\Models\OrderModel;

$order=OrderModel::with('order_user')->get();
foreach($order as $o){
    dd($o);
}
?>