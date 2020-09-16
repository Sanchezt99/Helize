<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;


class AdminUserController extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(Auth::user()->getRole()=="user"){
                return redirect()->route('home.index');
            }
    
            return $next($request);
        });
    }

    public function index()
    {
        $data["users"] = User::all();
        return view('admin.user.index')->with("data",$data);
    }
}