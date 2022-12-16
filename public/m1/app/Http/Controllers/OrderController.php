<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Events\PaidEvent;

class OrderController extends Controller
{
    public function order_detail($id){
        $order_detail=OrderModel::where('id', $id)->get();
        return view('order_detail', ['order_detail'=> $order_detail]);
    }
    

    public function show_paid(){
		event(new PaidEvent());
		return view('/success');
   }
   
    public function show1(){
         return view('success1');
     }
}
