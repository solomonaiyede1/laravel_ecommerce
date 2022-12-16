<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\OrderModel;
use App\Models\Users;
use Illuminate\Support\Facades\Notification;
use App\Notifications\OrderNotification;
use Auth;
use Mail;

class ShowController extends Controller
{
    
    public function payment(){
    //     $alert= [
    //         'greeting' => 'Hi Admin',
    //         'body' => 'An order has been placed.',
    //         'thanks' => 'Thank you this is from Breetek Integrated Solutions',
    //         'actionText' => 'View email',
    //         'actionURL' => url('/orders'),
    //         'id' => 57
    //     ];
    
    //     $reciepient=[
    //         'solomonaiyede@gmail.com' => 'solo',
    //         'sales@Breetek Integrated Solutions.com' => 'Breetek Integrated Solutions'
    //     ];
    //  Notification::route('mail', $reciepient)->notify(new OrderNotification($alert));

        return view('payment1');
    }
    
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
                                    

            $request->session()->forget('cart');
                        
    //         $alert= [
    //             'greeting' => 'Hi Admin',
    //             'body' => 'An order has been placed.',
    //             'thanks' => 'Thank you this is from Breetek Integrated Solutions',
    //             'actionText' => 'View email',
    //             'actionURL' => url('/orders'),
    //             'id' => 57
    //         ];
        
    //         $reciepient=[
    //             'solomonaiyede@gmail.com' => 'solo',
    //             'sales@Breetek Integrated Solutions.com' => 'Breetek Integrated Solutions'
    //         ];
    //      Notification::route('mail', $reciepient)->notify(new OrderNotification($alert));
            
            return view('payment1');

    }
    

}