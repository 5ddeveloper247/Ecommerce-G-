@extends('layouts.website.website_master')

@push('styles')
    <style>
        .product-top {
            background-color: #F5F5F5;
            padding: 1rem 5rem;
        }

        .your-cart {
            padding: 3rem 10rem;
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
</div>


@endsection