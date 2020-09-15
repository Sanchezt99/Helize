<?php

namespace App\Http\Controllers;

use App\Wear;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $wears = Wear::orderBy('created_at', 'ASC')->take(6)->get();

        return view('home.index')->with('wears', $wears);
    }
}

