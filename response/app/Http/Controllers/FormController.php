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
        $mail=$request->email;
        // return "Name entered by user is $name"."<br>"."Reg no is $reg";

        // return "<script>alert('Form submitted by $name')</script>";
    //    return response()->json(
    //     [
    //         $request->username
    //     ]
    //    );
        $request->validate([
            "username" => "min:4|max:20|regex:/^[A-Za-z0-9_]+$/",
            "name" => "min:2|max:20|regex:/^[A-Za-z\s]+$/",
            "email" => "email|required|unique:users,email",
            "password" => "min:8|required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*?])[A-Za-z0-9@!#$%^&*?]+$/"
        ]);
        return $request->all();
    }
}

