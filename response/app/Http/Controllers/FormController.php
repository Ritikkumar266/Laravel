<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //Request class is udes to get the requedst from the server for eg if we want to get data we will use this class

class FormController extends Controller
{
    //
    public function submit(){
        return "<script>alert('Form Submitted successfully')</script>";
    }
    public function submitget(Request $request){
        // return "Form Submitted Successfully";
        // return $request->all();

        $name=$request->username;
        $reg=$request->regno;
        $mail=$request->mail;
        // return "Name entered by user is $name"."<br>"."Reg no is $reg";

        // return "<script>alert('Form submitted by $name')</script>";
       return response()->json(
        [
            $request->username
        ]
       );
    }
}
