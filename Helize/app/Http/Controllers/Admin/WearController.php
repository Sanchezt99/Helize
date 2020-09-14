<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Wear;
use App\Http\Controllers\Controller;

class WearController extends Controller{

    public function index(){
        $wears = Wear::all();

        return view('wear.index')->with("wears", $wears);
    }

    public function create(){
        $data = []; //to be sent to the view
        $data["title"] = "Create wear";
        return view('wear.create')->with("data",$data);
    }

    public function store(Request $request){
        Wear::validate($request);
        Wear::create($request->only(["gender","color","category","type","brand"]));
        return back()->with('success','Item created successfully!');
    }

    public function edit($id){
        $wear = Wear::find($id);
        return view('wear.edit')->with("wear", $wear);
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


        return redirect('/wear')->with('success', 'Contact updated!');
    }

    public function destroy($id){
        $wear = Wear::find($id);
        $wear->delete();
        return redirect('/wear')->with('success', 'Contact deleted!');
    }
}

