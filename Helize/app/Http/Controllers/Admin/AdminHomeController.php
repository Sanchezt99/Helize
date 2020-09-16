<?php

namespace App\Http\Controllers\Admin;

use App\Wear;
use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;


class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(Auth::user()->getRole()=="user"){
                return redirect()->route('home.index');
            }
    
            return $next($request);
        });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $wears = Wear::all()->count();
        $orders = Order::all()->count();
        $users = User::all()->count();

        return view('admin.index')->with(['wears' => $wears, 'orders' => $orders, 'users' => $users]);
    }
}

