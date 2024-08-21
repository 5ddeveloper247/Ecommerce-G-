@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<section class="login d-flex align-items-center justify-content-center">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="login-content p-5 rounded-3 text-center">
                <div class="text-start">
                    <h1 class="text-center">
                        LOGIN
                    </h1>
                    <div class="mt-4">
                        <label for="">EMAIL</label>
                        <br>
                        <input class="w-100 p-2 mt-1" type="text" placeholder="enter your email">
                    </div>
                    <div class="mt-3">
                        <label for="">PASSWORD</label>
                        <br>
                        <input class="w-100 p-2 mt-1" type="number" placeholder="enter your password">
                    </div>
                    <a href="{{url('admin_dashboard')}}">
                        <button class="py-2 px-4 mt-4 mb-3 w-100">
                            SIGN IN
                        </button>
                    </a>
                </div>
                <a href="{{url('forget_password')}}">Forget Password</a>
                <br>
                <span>
                    If Dont have a account then <a href="{{url('signup_form')}}">SignUp</a>
                </span>
            </div>
        </div>
        <div class="overlay"></div>
</section>



@endsection