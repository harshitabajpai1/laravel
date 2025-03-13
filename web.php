<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route:: get("user",function(){
//     return view('user');
// });


// //array
// Route::get("index",function(){
//     $name="harshita bajpai";
//     return view("user",["name"=>$name]);
// });
// Route::get("index",function(){
//     $name="harshita bajpai";
//     $age=21;
//     return view("user",["name"=>$name , "age"=>$age]);
// });
// //compact

// Route::get("index1",function(){
//     $name="harshita bajpai";
//     $age=21;
//     return view("user",compact('name','age'));
// });
// Route::get("index1",function(){
//     $a=23;
//     $b=21;
//     $sum=$a+$b;
//     return view("user",["sum"=>$sum]);
// });
//with
//withName




// Route:: get("/user",function(){
//     return "hello laravel";
// });
// Route:: get("user1",function(){
//     return "<h1>hello php</h1>";
// });

//required parameter;
// Route:: get("user2/{name}",function($name){
//     return "$name";
// });
// //optional parameter
// Route:: get("index/{name?}",function($name=null){
//     return "$name";
// });
// //default parameter
// Route:: get("index2/{name?}",function($name="harsii"){
//     return "$name";
// });

// Route:: view("/lpu","lpu");
// Route:: get("admin",function(){
//     return view("lpu");
// });
// Route:: view("/index1","index");
// Route:: view("/lpu","lpu");


// //data passing

// Route:: get("show",function(){
//     $course="laravel";
//     $fee=600;
//     return view("user",["course"=>$course,"fee"=>$fee]);
// });
// Route::get("index1",function(){
//         $name="harshita bajpai";
//         $age=21;
//         return view("user",compact('name','age'));
//     });

// Route:: get("with",function(){
//     $course="full stack";
//     $fee=10054;
//     return view("user")->with(["course"=>$course,"fee"=>$fee]);
    
// });    

// Route:: get("withnamedata",function(){
//     $course="full stack";
//     $fee=10054;
//     return view("user")->withCourse($course)->withFee($fee);

// });
// Route:: get("v1",function(){
//     return view("view1");
// });
// // Route:: get("v2",function(){
// //     return view("view2");
// // });
// Route:: get("v3",function(){
//     return view("view3");
// });

// Route:: redirect("v2","v3");



// Route:: get("data/{name}",function($name){
//     return $name;
// });

// Route:: get("data/{data}",function( $data){
//     return $data%2==0?"$data is even":"$data is odd";
// });

// Route:: get("data/{data}",function( $data){
//     if($data<=100 && $data>=90){
//         return "grade A";
//     }else if($data<90 && $data>=80){
//         return "grade B";
//     }else if($data<80 && $data>=70){
//         return "grade C";
//     }else if($data<=70 && $data>=60){
//         return "grade D";
//     }else if($data>100 || $data<0){
//         return "invalid marks";
//     }
//     else{
//         return "fail";
//     }
// });




//name routes
// Route ::get("admin/student/studentdata",function(){
//     return view("view1");
// })->name("data");

// Route ::get("admin/student/studentcourse",function(){
//     return view("course");
// })->name("course");


//redirect
// Route ::get("admin/student/redirect",function(){
//     return redirect()-> route("course");
// });





//response
// Route:: get("home",function(){
//     // return "hello laravel";
//     return response("Data set")-> header("Content-Type","text/plain");

// });

// Route:: get("home1",function(){
//     // return "hello laravel";
//     return response("Data set")-> header("Content-Type","text/html");

// });

// Route:: get("json",function(){
//     return response()->json(["name"=>"harshita","city"=>"jalandhar","course"=>"laravel"]);
// });














//Attaching cookies
// Route:: get("set",function(){
//     return response("Set Cookies")->cookie("visitorname","Harshita",60);
// });

// Route:: get("get",function(){
//     return request()->cookie("visitorname");
// });
// Route:: get("delete",function(){
//     return response("Delete cookies")->cookie("visitorname","",-1);

// });




//LARAVEL REDIRECTION

// Route:: get("home",function(){
//     return "hello world";
// });

// // Route:: get("about",function(){
// //     return "about page";
// // });

// Route:: redirect("about","home");   //redirecting about to home



//redirecting to named routes
// Route:: get("lms/common/lms/markAttendance",function(){
//     return "hello world";
// })->name("lms");

// Route:: get("about",function(){
//     return redirect()->route("lms");
// });


use App\Http\Controllers\UserController;
// Route :: get("controller1",[UserController::class,"message"]);
// Route :: get("controllerhtml",[UserController::class,"messagehtml"]);
// Route :: get("controllercss",[UserController::class,"messagecss"]);
// Route :: get("controllerjs",[UserController::class,"messagejs"]);

// Route:: get("required/{name}",[UserController::class,"req"]);
// Route:: get("default/{name?}",[UserController::class,"default"]);
// Route:: get("optional/{name?}",[UserController::class,"optional"]);



//data passing from view file 
Route:: get("index",[UserController::class,"index"]);

//data passing to view file
Route:: get("compact",[UserController::class,"data_compact"]);
Route:: get("array",[UserController::class,"data_array"]);
Route:: get("with",[UserController::class,"data_with"]);




//include
// Route::get('include', function () {
//     return view('home');
// });


Route::get('view2/{name}', function ($name) {
        return view('view2',compact("name"));
    });



//switch case
Route:: get('switch/{name}',function($name){
    switch($name){
        case 'admin':
            return "complete access";
        case 'teacher':
            return "limited access";
        case 'viewer':
            return "view only";
        default:
        return "enter valid url";

    }
});



//resource controller
use App\Http\Controllers\ResourceController;
// Route:: get("profile",[ResourceController::class,"index"]);
// Route::resource("profile",ResourceController::class);

Route:: get('data/{num}',function($num){
    return $num;
})->whereNumber('num');

Route:: get('data21/{num}',function($num){
    return $num;
})->whereAlpha('num');

Route:: get('data22/{num}',function($num){
    return $num;
})->where('num',"[A-Za-z0-9]+");