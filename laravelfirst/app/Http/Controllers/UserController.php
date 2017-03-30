<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
