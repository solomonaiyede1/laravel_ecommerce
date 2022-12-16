<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Events\PaidEvent;
use App\Models\BannerModel;

class OrderController extends Controller
{
    public function order_detail($id){
        $order_detail=OrderModel::with('order_user')->where('id', $id)->get();
        return view('dashboard.order_detail', ['order_detail'=> $order_detail]);
    }
    

    public function show_paid(){
		event(new PaidEvent());
		return view('/success');
   }
   
    public function show1(){
         return view('success1');
     }
     
    public function banner_edit(Request $request){
        $banner= BannerModel::where('id', 1)->update([
            'title' => $request->title
            ]);
        return redirect('/banner')->with('update', 'you have successfully updated a banner display');
    }
}
