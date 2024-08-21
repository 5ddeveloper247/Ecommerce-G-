@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

    <section class="login d-flex align-items-center justify-content-center">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="login-content p-5 rounded-3 text-center">
                <div class="text-start">
                    <h2 class="text-center">
                        CREATE A NEW ACCOUNT
                    </h2>
                    <div class="mt-4 row g-0 gap-3">
                        <div class="col">
                            <label for="">FIRST NAME</label>
                            <br>
                            <input class="w-100 px-2 py-1 mt-1" type="text" placeholder="John">
                        </div>
                        <div class="col">
                            <label for="">LAST NAME</label>
                            <br>
                            <input class="w-100 px-2 py-1 mt-1" type="text" placeholder="Doe">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="">EMAIL</label>
                        <br>
                        <input class="w-100 p-2 mt-1" type="email" placeholder="johndoe@gmail.com">
                    </div>
                    <div class="mt-3">
                        <label for="">PASSWORD</label>
                        <br>
                        <input class="w-100 p-2 mt-1" type="number" placeholder="enter your password">
                    </div>
                    <button class="py-2 px-4 mt-4 mb-3 w-100">
                        SUBMIT
                    </button>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

@endsection