<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
   public function  index(){
       return view('Admin');
   }
   public function user(){
       return view('User');
   }
   public function SchoolLogin(){
       return view('SchoolLogin');
   }

   public function AddUser(){
       return view('User.AddNewUser');
   }
    public function create(Request $request)
    {
        $name=$request->name;
        $email=$request->email;
        $passwor=$request->password;
        $User_Role=$request->User_Role;

        $password=bcrypt($passwor);

        DB::insert("insert into users (name, email,password,role) values ('$name','$email','$password','$User_Role')");
        Session::flash('alert-success', 'User data was successful added!');



        return redirect()->route('Admin');
    }
    public function ViewUser(){
        $user=DB::select('select * from users ');

        return view('User.viewUser',compact('user'));
    }
}
