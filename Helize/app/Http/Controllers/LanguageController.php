<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App;

class LanguageController extends Controller {
    public function index(){
        echo __("messages.welcome");
    }
    public function changeLang($locale){
        Session::put('applocale', $locale);
        return redirect()->route("admin.home.index");
        //return view("home.index");
    }
}
