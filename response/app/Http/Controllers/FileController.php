<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class FileController extends Controller
// {
//     //
//     function upload(Request $request){
//         $file=$request->file('myfile'); //name of input field in form
//         $filename=$file->getClientOriginalName(); //get original name of file
//        $file->move(public_path('uploads'),$filename); //move file to uploads folder in public directory
//        return "$filename File uploaded successfully";

//          //$filenameArray=explode("/",$filename); //split filename by dot to get extension

//     }
// }


class FileController extends Controller
{
    //
    public function upload(Request $request){
        //return "File Uploaded Successfully";
        $request->validate([
            'myfile' => 'required|mimes:jpg,png,jpeg|max:2048'
        ]);
        $path=$request->file('myfile')->store('myimages','public');
        //return $path;
        $filenameArray=explode('/',$path);
        $filename=$filenameArray[1];
        // return "File Uploaded Successfully. Filename: $filename";
        //0-> upload / is a delimeter, filename is at position 1
        return view('display',compact('filename'));
    }
}