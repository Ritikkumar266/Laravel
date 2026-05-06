<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class GrocceryShop extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$items = Item::all();
       // $items=Item::select('name','quantity','price')->get();
       $items=Item::where('price','>',20)->orderBy('name','asc')->get(); //order by name in ascending order
       // $items=Item::where('quantity','>',10)->get();
        //model will interact with controller for DB related operations and controller will interact with view to display data
        // return $items;
        return view('items', compact('items'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
