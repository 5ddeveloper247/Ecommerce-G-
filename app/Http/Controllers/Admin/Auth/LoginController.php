<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    //

    public function loginIndex(Request $request)
    {
        $pageTitle = 'Login';
        return view('admin/auth/login', compact('pageTitle'));
    }


    public function loginCreate(Request $request)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            // Return validation errors
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        // Check if the user exists and the password is correct
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            // Return error if authentication fails
            return response()->json([
                'error' => 'Oops! Invalid credentials'
            ], 401);
        }

        // Log the user in
        Auth::login($user);

        // Return success response
        return response()->json([
            'message' => 'Login successful',
            'user' => $user
        ], 200);
    }
}
