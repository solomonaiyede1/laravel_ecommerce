<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\OrderModel;
use Auth;
use Mail;

class ShowController extends Controller
{
   public function orderReal(Request $request){
        $order=new OrderModel;
        $order->user_id=$request->get('user_id');
            $cart=session()->get('cart');
            foreach($cart as $data){
                $order=new OrderModel;
                $order->name=$data['name'];
                $order->price=$data['price'];
                $order->quantity=$data['quantity'];
                $order->user_id=$request->get('user_id');
                $order->payment_status=$request->get('payment_status');
                $order->save();
            }
            
          Mail::send(['text'=>'email'],['name'=>'solo'], function($message){
        	         $message->to('info@marketmasta.com')
        	             ->subject('New order');
    		         $message->from('info@marketmasta', 'email');
        	      	});
                                    
                                    
                                    

            $request->session()->forget('cart');
            return redirect('/payment1');
            
        }
    
    // public function test(){
    //               Mail::send(['text'=>'email'],['name'=>'solo'], function($message){
    //     	         $message->to('info@marketmasta.com')
    //     	             ->subject('New order');
    // 		         $message->from('info@marketmasta', 'email');
    //     	      	});
                        
        
    // }
}