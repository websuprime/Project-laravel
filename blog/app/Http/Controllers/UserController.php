<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        // return "Shubham Raj";
        return view('user');
    }

    function aboutUser(){
        return "He is a god's person.";
    }

    function userName($name){
        // return "Hello, ".$name;
        return view('getUser', ['name'=>$name]);
    }
}
