<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('index');
    }

    public function order(StoreOrderRequest $req){
       $order = Order::create($req->all());
       return to_route('thanks',[$order->id]);
    }

    public function thanks($id){
        $n['order'] = Order::find($id);
        return view('thanks',$n);
    }
}
