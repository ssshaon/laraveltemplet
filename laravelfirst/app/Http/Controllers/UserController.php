<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function dashboard(){
      return view('Admin.dashboar');
    }

    public function create(){
        return view('Admin.User.create');
    }
    public function store(Request $request){
       $data=$request->except('password');
       $data['password']=bcrypt($request->password);
       User::create($data);
       Session::flash('message','User Added Succesfully');

       return redirect()->back();
    }
}
