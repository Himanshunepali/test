<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index(){
        $users = user::all();
      return view ('users.index',compact('users'));
    }

    public function create(){
    return view ('users.create');
}

    public function store(Request $request){
        $data = [
         'name'=> $request->get('name'),
         'email'=> $request->get('email'),
         'password'=> $request->get('password')
        ];

        User::insert($data);
        return redirect()->route('users.index');
     
    
}
}