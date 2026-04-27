<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    //
    public function getdata(){
        //controller is interacting with model and fetchibng data from database and storing in $students variable and then passing it to view file studentdata.blade.php using compact function
       // $students= Student::all();
        $students = Student::where('Marks', '>', 90)->where('Course','CSE357')->get();
        //where chaining for multiple conditions
        // $students = Student::select('Name', 'Marks')->get();
        // return $students;
        //$minimummarks = Student::min('Marks');
        // return "Minimum marks is $minimummarks";
        
        //$maximummarks = Student::max('Marks');
         // return "Maximum marks is $maximummarks";

       //$count= Student::count();
         // return "Total number of students is $count";

        //eloquent model is used to fetch the data from database and store in $students variable 
        //we keep table name in plural form and first letter is capital and rest is small and it should be same as model name
        //if we want to keep table name different from model name then we have to specify the table name in model file using protected $table="tablename";
        // all() means select * from students; it will fetch all the records from students table and store in $students variable 
        return view('studentdata',compact('students'));
    }
}
