<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wear;



class WearController extends Controller
{

    public function showWithID($id)
    {
        $data = []; //to be sent to the view
        $wear = Wear::findOrFail($id);
        $data["wear"] = $wear;
        return view('showWithID.showWithID')->with("data", $data);
    }



    public function show()
    {
        $data = []; //to be sent to the view
        $wear = Wear::all();
        $data["wears"] = $wear;
        return view('showProduct.show')->with("data", $data);
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create wear";
        return view('wear.create')->with("data", $data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "gender" => "required",
            "color" => "required",
            //"brand" => "required",
            "category" => "required",
            "type" => "required"
        ]);
        //Do I Save brand?
        Product::create($request->only(["gender", "color", "brand", "category", "type"]));
        return back()->with('success', 'Item created successfully!');
        //here goes the code to call the model and save it to the database
    }

    public function delete($id)
    {
        $wear = Wear::findOrFail($id);
        $wear->delete();
        return redirect()->route('showProduct.show')->with('success', 'Product deleted successfully');
    }
}

