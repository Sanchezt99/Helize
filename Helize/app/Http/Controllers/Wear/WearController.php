<?php


namespace App\Http\Controllers\Wear;

use App\Wear;
use App\Http\Controllers\Controller;

class WearController extends Controller{

    public function index(){
        $wears = Wear::all();

        return view('wear.index')->with("wears", $wears);
    }

    public function show($id)
    {
        $wear = Wear::findOrFail($id);

        dd($id);
        //return view('wear.show')->with("wear", $wear);
    }
}