<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        $data=\App\Models\todolist::get();

        return view('profile', array('user' => profile::user()));
    }
}
