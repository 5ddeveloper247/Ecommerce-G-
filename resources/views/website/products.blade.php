@extends('layouts.website.website_master')

@push('styles')
    <style>
        .product-page {
            .product-top {
                background-color: #F5F5F5;
                padding: 1rem 5rem;
            }

            .your-cart {
                padding: 3rem 10rem;
            }

            .navbar {
                padding: 1rem 5rem;
            }
        }
    </style>
@endpush

@section('content')

<div class="product-page">
    <div class="product-top d-flex align-items-center justify-content-between">
        <h6 class="mb-0">
            Shop All
        </h6>
        <div class="bread">
            <small>
                Home / Shop All
            </small>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>


@endsection