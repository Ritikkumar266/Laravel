<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function getdata(){
        $students= \App\Models\Student::all();
        // return $students;
        return view('studentdata',compact('students'));
    }
}
