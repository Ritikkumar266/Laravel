<?php

namespace App\Http\Controllers; //path of MyController

use Illuminate\Http\Request; //Request class will send the request to the server

class MyController extends Controller
{
    //create a function that will return some string on the route
    public function index(){
        return "Hello from MyController" ;
    }
}
