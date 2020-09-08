<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wear;

class WearController extends Controller
{

    public function showWithID($id)
    {
        $data = []; //to be sent to the view
        $product = Product::findOrFail($id);
        $data["product"] = $product;
        return view('showWithID.showWithID')->with("data", $data);
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('showProduct.show')->with('success', 'Product deleted successfully');
    }

    public function show()
    {
        $data = []; //to be sent to the view
        $product = Product::all();
        $data["products"] = $product;
        return view('showProduct.show')->with("data", $data);
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create product";
        return view('product.create')->with("data", $data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "gender" => "required",
            "color" => "required",
            "brand" => "required",
            "category" => "required",
            "type" => "required"
        ]);

        Product::create($request->only(["gender", "color", "brand", "category", "type"]));
        return back()->with('success', 'Item created successfully!');
        //here goes the code to call the model and save it to the database
    }
}

