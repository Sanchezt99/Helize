<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Order;
use App\Wear;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index()
    {
        $data["wears"] = Wear::all();
        return view('wear.index')->with("data",$data);
    }

    public function show($id)
    {
        $data = [];
        $order = Order::findOrFail($id);
        $data["title"] = $order->getName();
        $data["order"] = $order;
        return view('order.show')->with("data",$data);
    }

    public function addToCart($id, Request $request)
    {
        $wears = $request->session()->get("wears");
        $wears[$id] = 1;
        $request->session()->put('wears', $wears);
        return back();
    }

    public function removeCart(Request $request)
    {
        $request->session()->forget('wears');
        return redirect()->route('wear.index');
    }

    public function removeOneCart($id, Request $request)
    {
        $sessionWears = $request->session()->get('wears');
        unset($sessionWears[$id]);
        $request->session()->put('wears', $sessionWears);
        return back();
    }

    public function cart(Request $request)
    {
        $sessionWears = $request->session()->get("wears");
        if($sessionWears){
            $keys = array_keys($sessionWears);
            $wearsModels = Wear::find($keys);

            $total = 0;
            foreach ($wearsModels as $key => $wear) {
                $total = $total + $wear->getPrice();
            }

            $data['wears'] = $wearsModels;
            $data['total'] = $total;

            return view('cart.index')->with("data",$data);
        }

        return redirect()->route('home');
    }

    public function buy(Request $request)
    {
        $order = new Order();
        $order->setTotal(0);
        $order->setUserId(Auth::user()->getId());
        $order->setStatus('Enviado');
        $order->save();

        $totalPrice = 0;

        $wears = $request->session()->get("wears");
        if($wears){
            $keys = array_keys($wears);
            for($i=0;$i<count($keys);$i++){
                $item = new Item();
                $item->setWearId($keys[$i]);
                $item->setOrderId($order->getId());
                $item->setQuantity($wears[$keys[$i]]);
                $item->save();
                $wearActual = Wear::find($keys[$i]);
                $totalPrice = $totalPrice + $wearActual->getPrice();
            }

            $order->setTotal($totalPrice);
            $order->save();

            $request->session()->forget('wears');
        }

        return redirect()->route('home');
    }
}
