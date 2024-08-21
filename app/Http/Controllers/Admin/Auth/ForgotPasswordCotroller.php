<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordCotroller extends Controller
{
    //
    public function forgotPasswordIndex(Request $request)
    {

        $pageTitle = 'Signup';
        return view('admin.auth.forgot_password', compact('pageTitle'));
    }
}
