<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index(){
        $users = user::all();
      return view ('user',compact('users'));
    }
}
