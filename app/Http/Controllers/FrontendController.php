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
        $deleteme = '';
      $orders =  Order::where('phone',$req->phone)->get();
        if(count($orders)>0){
            $order = DuplicateOrder::create($req->all());
            $model = 2;
        }else{
            $order = Order::create($req->all());
            $model = 1;
        }
       return to_route('thanks',[$order->id,$model]);
    }

    public function thanks($id,$model){
        if($model == 1){
            $n['order'] = Order::find($id);
        }else{
            $n['order'] = DuplicateOrder::find($id);
        }
        return view('thanks',$n);
    }
    public function optimizeClear(){
       Artisan::call('optimize:clear');
       echo 'Successfully optimiize cleared';
    }
}
