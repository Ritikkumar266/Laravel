<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
//Http belong to above package and we are using it to make HTTP requests to external APIs
class APIController extends Controller
{
    // 
   public function fetchApiData(){
        $response=Http::get("https://dummyjson.com/products");
        //HTTP is a class , get is a method of that class and we are passing the url as parameter to that method and it will return the response from that url and we are storing that response in a variable called response
        $products=$response->json()['products'];
      //  return $products
        return view('products',compact('products'));
        //if we return view and pass the products then with key we can get the desired data in the view file and we can display it there
    }
    //fetch data from API
}
