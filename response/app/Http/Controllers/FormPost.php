<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormPost extends Controller
{
    //
    public function submitPost(){
        return "<script>alert('Form Submitted successfully')</script>";
    }
}
