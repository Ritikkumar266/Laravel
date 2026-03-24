<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function JsonResponse(){
        $products=["Lays","Kurkure"];
        return response()->json($products);
    }
}
