<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Wear;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminWearController extends Controller{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(Auth::user()->getRole()=="user"){
                return redirect()->route('home.index');
            }
    
            return $next($request);
        });
    }

    public function index(){
        $wears = Wear::all();

        return view('admin.wear.index')->with("wears", $wears);
    }

    public function create(){
        $data = []; //to be sent to the view
        $data["title"] = "Create wear";
        return view('admin.wear.create')->with("data",$data);
    }

    public function store(Request $request){
        Wear::validate($request);
        Wear::create($request->only(["gender","color","category","type","brand","price"]));
        return back()->with('success','Item created successfully!');
    }

    public function edit($id){
        $wear = Wear::find($id);
        return view('admin.wear.edit')->with("wear", $wear);
    }

    public function update(Request $request, $id){
        Wear::validate($request);

        $wear = Wear::find($id);
        $wear->gender =  $request->get('gender');
        $wear->color = $request->get('color');
        $wear->category = $request->get('category');
        $wear->type = $request->get('type');
        $wear->brand = $request->get('brand');;
        $wear->save();


        return back();
    }

    public function destroy($id){
        $wear = Wear::find($id);
        $wear->delete();
        return back();
    }
}

