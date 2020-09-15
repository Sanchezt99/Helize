<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\Auth;


class AdminOrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if(Auth::user()->getRole()=="user"){
                return redirect()->route('home.index');
            }
    
            return $next($request);
        });
    }

    public function index()
    {
        $data["orders"] = Order::all();
        return view('order.index')->with("data",$data);
    }

    public function show($id)
    {
        $data = [];
        $order = Order::findOrFail($id);
        $data["title"] = $order->getName();
        $data["order"] = $order;
        return view('order.show')->with("data",$data);
    }
}