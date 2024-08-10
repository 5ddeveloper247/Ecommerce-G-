@extends('layouts.website.website_master')

@push('css')

@endpush

@section('content')

<div class="container account py-5">
    <h3 class="main-headings position-relative text-start">
        Aaccount Settings
        <div class="border-under-main-heading"></div>
    </h3>
    <div class="mt-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link px-0 active" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders-tab-pane" type="button" role="tab" aria-controls="orders-tab-pane" aria-selected="true">
                    Order
                </button>
            </li>
            <li class="nav-item mx-md-3" role="presentation">
                <button class="nav-link px-0" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages-tab-pane" type="button" role="tab" aria-controls="messages-tab-pane" aria-selected="false">
                    Messages (0)
                </button>
            </li>
            <li class="nav-item mx-md-2" role="presentation">
                <button class="nav-link px-0" id="address-tab" data-bs-toggle="tab" data-bs-target="#address-tab-pane" type="button" role="tab" aria-controls="address-tab-pane" aria-selected="false">
                    Addresses
                </button>
            </li>
            <li class="nav-item mx-md-2" role="presentation">
                <button class="nav-link px-0" id="wish-list-tab" data-bs-toggle="tab" data-bs-target="#wish-list-tab-pane" type="button" role="tab" aria-controls="wish-list-tab-pane" aria-selected="false">
                    Wish Lists (0)
                </button>
            </li>
            <li class="nav-item mx-md-2" role="presentation">
                <button class="nav-link px-0" id="recently-viewed-tab" data-bs-toggle="tab" data-bs-target="#recently-viewed-tab-pane" type="button" role="tab" aria-controls="recently-viewed-tab-pane" aria-selected="false">
                    Recently Viewed
                </button>
            </li>
            <li class="nav-item mx-md-2" role="presentation">
                <button class="nav-link px-0" id="account-settings-tab" data-bs-toggle="tab" data-bs-target="#account-settings-tab-pane" type="button" role="tab" aria-controls="account-settings-tab-pane" aria-selected="false">
                    Account Settings
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade py-4 show active" id="orders-tab-pane" role="tabpanel" aria-labelledby="orders-tab" tabindex="0">
                <p class="mb-0 d-flex align-items-center bg-secondary p-3 text-white rounded-2">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.05em" height="1.05em" viewBox="0 0 20 20">
                        <path fill="#fff" d="M2.93 17.07A10 10 0 1 1 17.07 2.93A10 10 0 0 1 2.93 17.07M9 5v6h2V5zm0 8v2h2v-2z" />
                    </svg>
                    Once you place an order you'll have full access to send messages from this page.
                </p>
            </div>
            <div class="tab-pane fade py-4" id="messages-tab-pane" role="tabpanel" aria-labelledby="messages-tab" tabindex="0">
                <p class="mb-0 d-flex align-items-center bg-secondary p-3 text-white rounded-2">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.05em" height="1.05em" viewBox="0 0 20 20">
                        <path fill="#fff" d="M2.93 17.07A10 10 0 1 1 17.07 2.93A10 10 0 0 1 2.93 17.07M9 5v6h2V5zm0 8v2h2v-2z" />
                    </svg>
                    You haven't placed any orders with us. When you do, their status will appear on this page.
                </p>
            </div>
            <div class="tab-pane fade py-4" id="address-tab-pane" role="tabpanel" aria-labelledby="address-tab" tabindex="0">
                <div class="row justify-content-start">
                    <!-- Address List Section -->
                    <div class="col-md-3 border rounded-2 m-3">
                        <div class="p-3">
                            <h6 class="mb-1">a12@gmail.com</h6>
                            <h6 class="mb-3">a12@gmail.com</h6>
                            <p class="text-muted mb-1">a12@gmail.com</p>
                            <p class="text-muted mb-1">a12@gmail.com</p>
                            <p class="text-muted mb-1">a12@gmail.com</p>
                            <p class="text-muted mb-1">a12@gmail.com</p>
                            <p class="text-muted mb-1">a12@gmail.com</p>
                            <p class="text-muted mb-3">Pakistan</p>
                            <p class="text-muted mb-4">Phone: a12@gmail.com</p>
                            <div class="d-flex justify-content-start">
                            <button type="button" class="btn btn-outline-secondary rounded-pill px-3 py-1 mx-1">Edit</button>
                            <button type="button" class="btn btn-outline-secondary rounded-pill px-3 py-1 mx-1">Delete</button>
                            </div>
                        </div>
                    </div>

                    <!-- New Address Button Section -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center border rounded-2 m-3">
                        <div class="p-5 text-center">
                                <div class="h1">+</div>
                                <div>New Address</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade py-4" id="wish-list-tab-pane" role="tabpanel" aria-labelledby="wish-list-tab" tabindex="0">
                <div class="table-responsive">
                    <table class="w-100">
                        <thead class="py-3 border-bottom">
                            <tr>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <p class="mb-0 d-flex align-items-center bg-secondary p-3 text-white rounded-2 mt-5">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.05em" height="1.05em" viewBox="0 0 20 20">
                        <path fill="#fff" d="M2.93 17.07A10 10 0 1 1 17.07 2.93A10 10 0 0 1 2.93 17.07M9 5v6h2V5zm0 8v2h2v-2z" />
                    </svg>
                    You haven't placed any orders with us. When you do, their status will appear on this page.
                </p>
            </div>
            <div class="tab-pane fade py-4" id="recently-viewed-tab-pane" role="tabpanel" aria-labelledby="recently-viewed-tab" tabindex="0">
                <div class="row">
                    <div class="col-md-3 my-2">
                        <div class="card featured-card border-0">
                            <p class="sale-badge text-black">Sale</p>
                            <div class="actions">
                                <button class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256">
                                        <path fill="#000" d="M178 42c-21 0-39.26 9.47-50 25.34C117.26 51.47 99 42 78 42a60.07 60.07 0 0 0-60 60c0 29.2 18.2 59.59 54.1 90.31a334.7 334.7 0 0 0 53.06 37a6 6 0 0 0 5.68 0a334.7 334.7 0 0 0 53.06-37C219.8 161.59 238 131.2 238 102a60.07 60.07 0 0 0-60-60m-50 175.11c-16.41-9.47-98-59.39-98-115.11a48.05 48.05 0 0 1 48-48c20.28 0 37.31 10.83 44.45 28.27a6 6 0 0 0 11.1 0C140.69 64.83 157.72 54 178 54a48.05 48.05 0 0 1 48 48c0 55.72-81.59 105.64-98 115.11"></path>
                                    </svg>
                                </button>
                                <button class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20">
                                        <g fill="#000">
                                            <path d="M5.254 14.596a.5.5 0 0 1 .707-.707A5.5 5.5 0 0 0 15.35 10a.5.5 0 0 1 .999.001a6.5 6.5 0 0 1-11.096 4.596"></path>
                                            <path d="M13.131 12.416a.5.5 0 0 1-.555-.832l3-2a.5.5 0 1 1 .555.832z"></path>
                                            <path d="M18.266 12.723a.5.5 0 1 1-.832.554l-2-3a.5.5 0 0 1 .832-.554zm-3.912-7.518a.5.5 0 0 1-.708.707a5.5 5.5 0 0 0-9.389 3.89a.5.5 0 0 1-1-.001a6.5 6.5 0 0 1 11.097-4.596"></path>
                                            <path d="M6.476 7.385a.5.5 0 0 1 .555.832l-3 2a.5.5 0 1 1-.555-.832z"></path>
                                            <path d="M1.341 7.078a.5.5 0 1 1 .832-.554l2 3a.5.5 0 0 1-.832.554z"></path>
                                        </g>
                                    </svg>
                                </button>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                        <path fill="#000" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="d-flex justify-content-center my-4">
                                <div class="featured-card-imagess">
                                    <a href="product_detail">
                                        <img src="http://127.0.0.1:8000/assets/images/category-img.png" alt="Card image">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <div class="rating border-bottom pb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                </div>
                                <p class="card-title mt-2 border-top pt-3">Suscipit laboriosam nisi</p>
                                <div class="price-and-btn">
                                    <h5 class="card-price">$12.99</h5>
                                    <button class="btn btn-add-to-cart">
                                        <span class="me-2">+</span>
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-2">
                        <div class="card featured-card border-0">
                            <p class="sale-badge text-black">Sale</p>
                            <div class="actions">
                                <button class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256">
                                        <path fill="#000" d="M178 42c-21 0-39.26 9.47-50 25.34C117.26 51.47 99 42 78 42a60.07 60.07 0 0 0-60 60c0 29.2 18.2 59.59 54.1 90.31a334.7 334.7 0 0 0 53.06 37a6 6 0 0 0 5.68 0a334.7 334.7 0 0 0 53.06-37C219.8 161.59 238 131.2 238 102a60.07 60.07 0 0 0-60-60m-50 175.11c-16.41-9.47-98-59.39-98-115.11a48.05 48.05 0 0 1 48-48c20.28 0 37.31 10.83 44.45 28.27a6 6 0 0 0 11.1 0C140.69 64.83 157.72 54 178 54a48.05 48.05 0 0 1 48 48c0 55.72-81.59 105.64-98 115.11"></path>
                                    </svg>
                                </button>
                                <button class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20">
                                        <g fill="#000">
                                            <path d="M5.254 14.596a.5.5 0 0 1 .707-.707A5.5 5.5 0 0 0 15.35 10a.5.5 0 0 1 .999.001a6.5 6.5 0 0 1-11.096 4.596"></path>
                                            <path d="M13.131 12.416a.5.5 0 0 1-.555-.832l3-2a.5.5 0 1 1 .555.832z"></path>
                                            <path d="M18.266 12.723a.5.5 0 1 1-.832.554l-2-3a.5.5 0 0 1 .832-.554zm-3.912-7.518a.5.5 0 0 1-.708.707a5.5 5.5 0 0 0-9.389 3.89a.5.5 0 0 1-1-.001a6.5 6.5 0 0 1 11.097-4.596"></path>
                                            <path d="M6.476 7.385a.5.5 0 0 1 .555.832l-3 2a.5.5 0 1 1-.555-.832z"></path>
                                            <path d="M1.341 7.078a.5.5 0 1 1 .832-.554l2 3a.5.5 0 0 1-.832.554z"></path>
                                        </g>
                                    </svg>
                                </button>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                        <path fill="#000" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="d-flex justify-content-center my-4">
                                <div class="featured-card-imagess">
                                    <a href="product_detail">
                                        <img src="http://127.0.0.1:8000/assets/images/category-img.png" alt="Card image">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <div class="rating border-bottom pb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                </div>
                                <p class="card-title mt-2 border-top pt-3">Suscipit laboriosam nisi</p>
                                <div class="price-and-btn">
                                    <h5 class="card-price">$12.99</h5>
                                    <button class="btn btn-add-to-cart">
                                        <span class="me-2">+</span>
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-2">
                        <div class="card featured-card border-0">
                            <p class="sale-badge text-black">Sale</p>
                            <div class="actions">
                                <button class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256">
                                        <path fill="#000" d="M178 42c-21 0-39.26 9.47-50 25.34C117.26 51.47 99 42 78 42a60.07 60.07 0 0 0-60 60c0 29.2 18.2 59.59 54.1 90.31a334.7 334.7 0 0 0 53.06 37a6 6 0 0 0 5.68 0a334.7 334.7 0 0 0 53.06-37C219.8 161.59 238 131.2 238 102a60.07 60.07 0 0 0-60-60m-50 175.11c-16.41-9.47-98-59.39-98-115.11a48.05 48.05 0 0 1 48-48c20.28 0 37.31 10.83 44.45 28.27a6 6 0 0 0 11.1 0C140.69 64.83 157.72 54 178 54a48.05 48.05 0 0 1 48 48c0 55.72-81.59 105.64-98 115.11"></path>
                                    </svg>
                                </button>
                                <button class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20">
                                        <g fill="#000">
                                            <path d="M5.254 14.596a.5.5 0 0 1 .707-.707A5.5 5.5 0 0 0 15.35 10a.5.5 0 0 1 .999.001a6.5 6.5 0 0 1-11.096 4.596"></path>
                                            <path d="M13.131 12.416a.5.5 0 0 1-.555-.832l3-2a.5.5 0 1 1 .555.832z"></path>
                                            <path d="M18.266 12.723a.5.5 0 1 1-.832.554l-2-3a.5.5 0 0 1 .832-.554zm-3.912-7.518a.5.5 0 0 1-.708.707a5.5 5.5 0 0 0-9.389 3.89a.5.5 0 0 1-1-.001a6.5 6.5 0 0 1 11.097-4.596"></path>
                                            <path d="M6.476 7.385a.5.5 0 0 1 .555.832l-3 2a.5.5 0 1 1-.555-.832z"></path>
                                            <path d="M1.341 7.078a.5.5 0 1 1 .832-.554l2 3a.5.5 0 0 1-.832.554z"></path>
                                        </g>
                                    </svg>
                                </button>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                        <path fill="#000" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="d-flex justify-content-center my-4">
                                <div class="featured-card-imagess">
                                    <a href="product_detail">
                                        <img src="http://127.0.0.1:8000/assets/images/category-img.png" alt="Card image">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <div class="rating border-bottom pb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                </div>
                                <p class="card-title mt-2 border-top pt-3">Suscipit laboriosam nisi</p>
                                <div class="price-and-btn">
                                    <h5 class="card-price">$12.99</h5>
                                    <button class="btn btn-add-to-cart">
                                        <span class="me-2">+</span>
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 my-2">
                        <div class="card featured-card border-0">
                            <p class="sale-badge text-black">Sale</p>
                            <div class="actions">
                                <button class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256">
                                        <path fill="#000" d="M178 42c-21 0-39.26 9.47-50 25.34C117.26 51.47 99 42 78 42a60.07 60.07 0 0 0-60 60c0 29.2 18.2 59.59 54.1 90.31a334.7 334.7 0 0 0 53.06 37a6 6 0 0 0 5.68 0a334.7 334.7 0 0 0 53.06-37C219.8 161.59 238 131.2 238 102a60.07 60.07 0 0 0-60-60m-50 175.11c-16.41-9.47-98-59.39-98-115.11a48.05 48.05 0 0 1 48-48c20.28 0 37.31 10.83 44.45 28.27a6 6 0 0 0 11.1 0C140.69 64.83 157.72 54 178 54a48.05 48.05 0 0 1 48 48c0 55.72-81.59 105.64-98 115.11"></path>
                                    </svg>
                                </button>
                                <button class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20">
                                        <g fill="#000">
                                            <path d="M5.254 14.596a.5.5 0 0 1 .707-.707A5.5 5.5 0 0 0 15.35 10a.5.5 0 0 1 .999.001a6.5 6.5 0 0 1-11.096 4.596"></path>
                                            <path d="M13.131 12.416a.5.5 0 0 1-.555-.832l3-2a.5.5 0 1 1 .555.832z"></path>
                                            <path d="M18.266 12.723a.5.5 0 1 1-.832.554l-2-3a.5.5 0 0 1 .832-.554zm-3.912-7.518a.5.5 0 0 1-.708.707a5.5 5.5 0 0 0-9.389 3.89a.5.5 0 0 1-1-.001a6.5 6.5 0 0 1 11.097-4.596"></path>
                                            <path d="M6.476 7.385a.5.5 0 0 1 .555.832l-3 2a.5.5 0 1 1-.555-.832z"></path>
                                            <path d="M1.341 7.078a.5.5 0 1 1 .832-.554l2 3a.5.5 0 0 1-.832.554z"></path>
                                        </g>
                                    </svg>
                                </button>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                        <path fill="#000" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="d-flex justify-content-center my-4">
                                <div class="featured-card-imagess">
                                    <a href="product_detail">
                                        <img src="http://127.0.0.1:8000/assets/images/category-img.png" alt="Card image">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <div class="rating border-bottom pb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                </div>
                                <p class="card-title mt-2 border-top pt-3">Suscipit laboriosam nisi</p>
                                <div class="price-and-btn">
                                    <h5 class="card-price">$12.99</h5>
                                    <button class="btn btn-add-to-cart">
                                        <span class="me-2">+</span>
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-2">
                        <div class="card featured-card border-0">
                            <p class="sale-badge text-black">Sale</p>
                            <div class="actions">
                                <button class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256">
                                        <path fill="#000" d="M178 42c-21 0-39.26 9.47-50 25.34C117.26 51.47 99 42 78 42a60.07 60.07 0 0 0-60 60c0 29.2 18.2 59.59 54.1 90.31a334.7 334.7 0 0 0 53.06 37a6 6 0 0 0 5.68 0a334.7 334.7 0 0 0 53.06-37C219.8 161.59 238 131.2 238 102a60.07 60.07 0 0 0-60-60m-50 175.11c-16.41-9.47-98-59.39-98-115.11a48.05 48.05 0 0 1 48-48c20.28 0 37.31 10.83 44.45 28.27a6 6 0 0 0 11.1 0C140.69 64.83 157.72 54 178 54a48.05 48.05 0 0 1 48 48c0 55.72-81.59 105.64-98 115.11"></path>
                                    </svg>
                                </button>
                                <button class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20">
                                        <g fill="#000">
                                            <path d="M5.254 14.596a.5.5 0 0 1 .707-.707A5.5 5.5 0 0 0 15.35 10a.5.5 0 0 1 .999.001a6.5 6.5 0 0 1-11.096 4.596"></path>
                                            <path d="M13.131 12.416a.5.5 0 0 1-.555-.832l3-2a.5.5 0 1 1 .555.832z"></path>
                                            <path d="M18.266 12.723a.5.5 0 1 1-.832.554l-2-3a.5.5 0 0 1 .832-.554zm-3.912-7.518a.5.5 0 0 1-.708.707a5.5 5.5 0 0 0-9.389 3.89a.5.5 0 0 1-1-.001a6.5 6.5 0 0 1 11.097-4.596"></path>
                                            <path d="M6.476 7.385a.5.5 0 0 1 .555.832l-3 2a.5.5 0 1 1-.555-.832z"></path>
                                            <path d="M1.341 7.078a.5.5 0 1 1 .832-.554l2 3a.5.5 0 0 1-.832.554z"></path>
                                        </g>
                                    </svg>
                                </button>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                        <path fill="#000" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="d-flex justify-content-center my-4">
                                <div class="featured-card-imagess">
                                    <a href="product_detail">
                                        <img src="http://127.0.0.1:8000/assets/images/category-img.png" alt="Card image">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <div class="rating border-bottom pb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160Z"></path>
                                    </svg>
                                </div>
                                <p class="card-title mt-2 border-top pt-3">Suscipit laboriosam nisi</p>
                                <div class="price-and-btn">
                                    <h5 class="card-price">$12.99</h5>
                                    <button class="btn btn-add-to-cart">
                                        <span class="me-2">+</span>
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade py-4" id="account-settings-tab-pane" role="tabpanel" aria-labelledby="account-settings-tab" tabindex="0">
                <form>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                                <label for="firstName">First Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                                <label for="lastName">Last Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="company" placeholder="Company">
                                <label for="company">Company</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
                                <label for="phoneNumber">Phone Number</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="emailAddress" placeholder="Email Address" required>
                                <label for="emailAddress">Email Address <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                                <label for="confirmPassword">Confirm Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="currentPassword" placeholder="Current Password">
                                <label for="currentPassword">Current Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <button class="btn btn-add-to-cart py-2">Update Details</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection