<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HimanshuController extends Controller
{
    public function index(){
        echo "hello Himanshu";
    }

    
public function table(){
    return view("table");
}
}
