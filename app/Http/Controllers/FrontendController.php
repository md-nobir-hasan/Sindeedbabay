<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\DuplicateOrder;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class FrontendController extends Controller
{
    public function home(){
        return view('index');
    }

    public function order(StoreOrderRequest $req){
      $orders =  Order::where('phone',$req->phone)->get();
        if(count($orders)>0){
            $order = DuplicateOrder::create($req->all());
        }else{
            $order = Order::create($req->all());
        }
       return to_route('thanks',[$order->id]);
    }

    public function thanks($id){
        $n['order'] = Order::find($id);
        return view('thanks',$n);
    }
    public function optimizeClear($id){
       Artisan::call('optimize:clear');
       echo 'Successfully optimiize cleared';
    }
}
