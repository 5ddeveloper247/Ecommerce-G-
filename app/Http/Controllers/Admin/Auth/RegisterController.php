<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function registerIndex(Request $request)
    {
        $pageTitle = 'Signup';
        return view('admin/auth/signup', compact('pageTitle'));
    }


    public function registerCreate(Request $request){
        return "Hello register";
    }
    //
}
