<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index(){
        $users=user::all();
        dd($users);
      return view ('users',compact('users'));
    }
}
