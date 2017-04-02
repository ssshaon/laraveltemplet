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

    public function index(){
        $data=User::paginate(10);
        return view('Admin.User.index', ['allUser'=>$data]);

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
    public function edit($id){
         $data=User::find($id);
        return view('Admin.User.edit',compact('data'));
    }
    public function update(Request $request,$id){
        $data=$request->except('password');
         $existingData=User::find($id);
         $existingData->update($data);

        Session::flash('message','User Updated Succesfully');

        return redirect('/admin/users') ;
    }
}
