<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function hello(){
        return "fghjk";
    }
    public function function2(){
        return "Function2";
    }
    public function function3(){
        $name="Ritik";
        return view('pages.page',compact('name'));
    }
    public function Json(){
        $data=["name"=>"ABC", "age"=>25, "city"=>"Phagwara"];
         return response()->json($data); //chaining with json
    }
}
