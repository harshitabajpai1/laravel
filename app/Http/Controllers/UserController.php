<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function message(){
        return "hello Students";
    }
    public function messagehtml(){
        return "<h1>hello Students</h1>";
    }
    public function messagecss(){
        return "<div style='color: yellow; background: gray'>hello Students</div>";
    }
    public function messagejs(){
        return "<script> alert('hello Students')</script>";
    }

    //parameter passing
    public function req($name){
        return $name;
    }
    public function default($name="sakshi"){
        return $name;
    }
    public function optional($name =null){
        return $name;
    }

    //data passing from view file
    public function index(){
        return view("view2");
    }

    //data passing to the view file
    public function data_compact(){
        $name="harshita bajpai";
        $city="Raebareli";
        return view("view2",compact('name','city'));
    }

    public function data_array(){
        $name="Sunil Kumar Bajpai";
        $city="Varanasi";
        return view("view2",["name"=>$name , "city"=>$city]);
    }

    public function data_with(){
        return view("view3")-> with("name","Anugya verma");
    }

    
    
}
