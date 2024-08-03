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

    //...............for creating and storing................//

    public function create(){
    return view ('users.create');
}
// for store......................................!!
    public function store(Request $request){

        $image= '';
        if ($request->image && $request->hasFile('image')){
            $file= $request->image;
            $filename= time().'-'.rand(1000,100000).'-'.$file->getClientOriginalName();
            $path= public_path().'/uploads';
            $file-> move($path,$filename);
            $image= $filename;
        }
        $data = [
         'name'=> $request->get('name'),
         'email'=> $request->get('email'),
         'password'=> $request->get('password'),
         'image'=> $image
        ];

        User::create($data);
        return redirect()->route('users.index');
     
    
         //...............for deleting...............//
    
}
public function delete($id){
    if(!$id){
        return redirect()-back();
    }
    

    $user = User::find($id);
    if($user){
        $user->delete();
    }
        return redirect()->back();
}

        //...............for edit................//
    

public function edit($id){
    if(!$id){
        return redirect()-back();
    }
    

    $user = User::find($id);
    if($user){
        return view ('users.edit',compact('user'));
    }
    return redirect()-back();
    }

    public function update(Request $request, $id){
        if(!$id){
            return redirect()-back();
        }

        $users=user::find($id);
        if ($users)
        {

        $image= '';
        if ($request->image && $request->hasFile('image')){
            $delete_path =  public_path().'/uploads'.$users->image;
            $file= $request->image;
            $filename= time().'-'.rand(1000,100000).'-'.$file->getClientOriginalName();
            $path= public_path().'/uploads';
            $file-> move($path,$filename);
            $image= $filename;
        }
    }
        $user = User::find($id);
        if($user){

            $data = [
                'name'=> $request->get('name'),
                'email'=> $request->get('email'),
                'password'=> $request->get('password'),
                'image'=> $image
               ];
       
               User::where('id',$id)->update($data);
               return redirect()->route('users.index');

        }

        

        return redirect()-back();
    
}
  
}