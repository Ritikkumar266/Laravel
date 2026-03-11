<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return response('Hello world');
});
Route::get('/json-response', function () {
    $data=["name"=>"ABC", "age"=>25, "city"=>"Phagwara"];
    return response()->json($data); //chaining with json
});
Route::get('/about-us', function(){
    return response()->view('aboutus');  //chaining with view
});
Route::get('/download-file',function(){
    return response()->download(public_path("/myfiles/Aayushcvnew.pdf")); //chaining with file download
});
Route::get('/open-ums',function(){
    return response()->redirectTo("https://www.lpu.in/student-services/ums.php"); //chaining with urls
});
Route::get('/admin',function(){
    return redirect("/student"); //chaining with urls
});
Route::get('/student',function(){
    return response("<h1 style='color:green'>Welcome to Student Page </h1>");
});
