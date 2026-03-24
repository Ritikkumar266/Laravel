<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController; //file is imported so that we can use its functions eg index()
use App\Http\Controllers\SecondController; 
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\FormController; 

Route::get('/', function () {
    return response()->view('welcome')->header('Developer-Name','Ritik')->header('Developed-in-year','2026')
    ->header('Site-Description','This website is developed for interaction with LPU Students');;
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
// create a Route with /student/{id} returning ID-Card of student with reg no=id    
Route::get('/student/{id}', function ($id) {
    $name="Ritik";
    $course="B.Tech";
    $contact="234567890";
    $address="Ranchi";
    $status="Active";
    $percentage=80;
    $student_list=["Aayush","Om","Ankit","Aviral"];
    return view('idcard',['id'=>$id, 'name'=>$name,'course'=>$course, 'contact'=>$contact, 'address'=>$address, 'status'=>$status,'percentage'=>$percentage,'student_lists'=>$student_list]);
});
// Route::get('/student/{id}', function ($id) {
//     $name="Ritik";
//     $course="B.Tech";
//     $contact="234567890";
//     $address="Ranchi";
//     $status="Active";
//     return view('idcard',compact('id','name','course','contact','address','status','percentage'));
// });

// Route::get('/student/{id}', function ($id) {
//     $student = [
//         'id' => $id,
//         'name' => 'Ritik Kumar',
//         'course' => 'B.Tech CSE',
//         'contact' => '9876543210',
//         'address' => 'Punjab, India',
//         'status' => 'Active',
//         'percentage'=>80
//     ];

//     return view('idcard', $student);
// });

// Route::get('/student/{id}', function ($id) {

//     return view('idcard')
//             ->with('id', $id)
//             ->with('name', 'Ritik Kumar')
//             ->with('course', 'B.Tech CSE')
//             ->with('contact', '9876543210')
//             ->with('address', 'Punjab, India')
//             ->with('status', 'Active');
// });

// Route::get('/student/{id}', function ($id) {

//     return view('idcard')
//         ->withId($id)
//         ->withName('Ritik Kumar')
//         ->withCourse('B.Tech CSE')
//         ->withContact('9876543210')
//         ->withAddress('Punjab, India')
//         ->withStatus('Active');
// });


//attaching a header to the response
//to provide additional information about the response, we can attach headers to the response,
// Headers are key-value pairs that provide metadat about the response , such as content type, developer-name,etc.

Route::get('/myheader', function(){
    return response("This route will show Custom Headers Right Click->inspect->network")
    ->header('Developer-Name','Ritik')->header('Developed-in-year','2026')
    ->header('Site-Description','This website is developed for interaction with LPU Students');
});
Route::get('/home-page', function(){
    return response()->view('home');
});

Route::get('/user/{id}/{name}', function($id,$name){
    return view('pages.test', ['id'=>$id, 'name'=>$name]);
});
// Route::get('/user/{id}/{name?}', function($id,$name='Ritik'){
//     return view('pages.test', ['id'=>$id, 'name'=>$name]);
// }); Default name


//create a route /btech/result-2025 that will show the student result Dashboard in tabular form with columns name , registration no, cgpa , status (pass/fail) also highlight the row with green if passed else red
Route::get('/btech/result-2026', function () {

    $students = [
        ['name' => 'Ritik', 'reg' => '101', 'cgpa' => 8.5],
        ['name' => 'Aman', 'reg' => '102', 'cgpa' => 5.2],
        ['name' => 'Neha', 'reg' => '103', 'cgpa' => 9.1],
        ['name' => 'Simran', 'reg' => '104', 'cgpa' => 4.8],
    ];

    return view('pages.result', compact('students'));
});

Route::get('/controller', [MyController::class, 'index']);

Route::get('/secondcontroller', [SecondController::class, 'hello']);
Route::get('/secondcontroller/func2', [SecondController::class, 'function2']);
Route::get('/secondcontroller/func3', [SecondController::class, 'function3']);
Route::get('/secondcontroller/json', [SecondController::class, 'Json']);

Route::get('/productcontroller', [ProductController::class, 'JsonResponse']);

Route::get('/formcontroller', [FormController::class, 'form']);

