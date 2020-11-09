<?php


namespace App\Http\Controllers\Wear;

use App\Wear;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class WearController extends Controller{

    public function index(Request $request){
        $data = [];
       
        if($request->ItemsPerPage != null){
            $data['ItemsPerPage']=$request->ItemsPerPage;
        }else{
            $data['ItemsPerPage']=10;
        }
        
        if($request->category != ''){
            $wears = Wear::where('type',$request->category)->paginate($data['ItemsPerPage']);
        }else{
          $wears = Wear::orderBy('created_at','desc')->paginate($data['ItemsPerPage']); 
        }
        
        $data['wears'] = $wears;
        $data['type'] = $request->category;

        $data['selected'] = $request->query("category");
        

        return view('wear.index')->with("data", $data);
    }

    public function show($id)
    {
        $wear = Wear::findOrFail($id);

        dd($id);
        //return view('wear.show')->with("wear", $wear);
    }
}