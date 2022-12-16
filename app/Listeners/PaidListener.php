<?php

namespace App\Listeners;

use App\Events\PaidEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use DB;
use Auth;

class PaidListener
{
   
    public function __construct()
    {
        
    }


    public function handle(PaidEvent $event)
    {
      DB::table('order')->where('user_id', Auth::user()->id)->update([
            'payment_status' => 'paid'
      ]);
    }
}
