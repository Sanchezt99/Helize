<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wear;


class WearController extends Controller{
    public function index(){
        $wear = Wear::all();

        return view('wear.index', compact('wear'));
    }

    public function create(){
        $data = []; //to be sent to the view
        $data["title"] = "Create wear";
        return view('wear.create')->with("data",$data);
    }

    public function store(Request $request){
        $request->validate([
            'gender'=>'required',
            'color'=>'required',
            'category'=>'required',
            'type'=>'required'
        ]);

        Wear::create($request->only(["gender","color","category","type"]));
        return back()->with('success','Item created successfully!');
    }

    public function edit($id){
        $wear = Wear::find($id);
        return view('wear.edit', compact('wear'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'gender'=>'required',
            'color'=>'required',
            'category'=>'required',
            'type'=>'required'
        ]);

        $wear = Wear::find($id);
        $wear->gender =  $request->get('gender');
        $wear->color = $request->get('color');
        $wear->category = $request->get('category');
        $wear->type = $request->get('type');
        $wear->save();

        return redirect('/wear/update')->with('success', 'Contact updated!');
    }

    public function destroy($id){
        $wear = Wear::find($id);
        $wear->delete();

        return redirect('/wear')->with('success', 'Contact deleted!');
    }
}

