@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="exam_plans">
        <div class="p-md-4 p-3">
            <div id="products">
                <form>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Exam Plans</li>
                        </ol>
                    </nav>
                    <div class="row justify-content-center gx-0 gy-2 gap-4 mb-4">
                        <div class="col d-flex justify-content-center gap-2 align-items-center d-card py-3 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 27 24">
                                <path fill="#2fa992" d="M24 24H0V0h18.4v2.4h-16v19.2h20v-8.8h2.4V24zM4.48 11.58l1.807-1.807l5.422 5.422l13.68-13.68L27.2 3.318L11.709 18.809z" />
                            </svg>
                            <div class="ms-3">
                                <h3 class="mb-0 text-center">
                                    <span class="fw-bold fs-2">32</span>
                                </h3>
                                <small>Active</small>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center gap-2 align-items-center d-card py-3 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 24 24">
                                <path fill="#ff0000bd" d="M8 22q-.825 0-1.412-.587T6 20v-2H4q-.825 0-1.412-.587T2 16v-2h2v2h2V8q0-.825.588-1.412T8 6h8V4h-2V2h2q.825 0 1.413.588T18 4v2h2q.825 0 1.413.588T22 8v12q0 .825-.587 1.413T20 22zm0-2h12V8H8zm-6-8V8h2v4zm0-6V4q0-.825.588-1.412T4 2h2v2H4v2zm6-2V2h4v2zm0 16V8z" />
                            </svg>
                            <div class="ms-3">
                                <h3 class="mb-0 text-center">
                                    <span class="fw-bold fs-2">12</span>
                                </h3>
                                <small>InActive</small>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center gap-2 align-items-center d-card py-3 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M17 22q-2.075 0-3.537-1.463T12 17t1.463-3.537T17 12t3.538 1.463T22 17t-1.463 3.538T17 22m1.675-2.625l.7-.7L17.5 16.8V14h-1v3.2zM3 21V3h6.175q.275-.875 1.075-1.437T12 1q1 0 1.788.563T14.85 3H21v8.25q-.45-.325-.95-.55T19 10.3V5h-2v3H7V5H5v14h5.3q.175.55.4 1.05t.55.95zm9-16q.425 0 .713-.288T13 4t-.288-.712T12 3t-.712.288T11 4t.288.713T12 5" />
                            </svg>
                            <div class="ms-3">
                                <h3 class="mb-0 text-center">
                                    <span class="fw-bold fs-2">52</span>
                                </h3>
                                <small>Total</small>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center align-items-center d-card py-md-4 py-3 px-3 ppt-bank-form">
                            <div class="d-flex flex-column align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 32 32">
                                    <path fill="currentColor" d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13s13-5.832 13-13S23.168 3 16 3m0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16S9.913 5 16 5m-1 5v5h-5v2h5v5h2v-5h5v-2h-5v-5z" />
                                </svg>
                                <small class="text-center">Add Mode</small>
                            </div>
                        </div>
                    </div>
                    <div id="products">
                        <div class="px-4 py-4 bg-white shadow table-container">
                            <table id="exam-plans" class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th class="text-start" scope="col">ID</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Exam</th>
                                        <th class="text-nowrap" scope="col">Exam Modes</th>
                                        <th scope="col">Packages</th>
                                        <th scope="col">Desc</th>
                                        <th scope="col">Status</th>
                                        <th class="text-end" scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="products-table-body">
                                    <tr>
                                        <td class="text-start">101</td>
                                        <td class="ps-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-s">
                                                    <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/32.webp" alt="">
                                                </div>
                                                <p class="mb-0 ms-3">Sherry</p>
                                            </div>
                                        </td>
                                        <td class="ps-3">Maths</td>
                                        <td class="ps-3">Maths 101</td>
                                        <td class="ps-3">Recommended</td>
                                        <td class="ps-3">Lorem ipsum dolor sit amet.</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="btn-reveal-trigger position-static">
                                                <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Add Feature</a>
                                                    <a class="dropdown-item" type="button">View Feature</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" type="button" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
            <div class="ppt-bank-form-detail d-none">
                <div class="d-flex align-items-center mb-4">
                    <div class="back-to-ppt-add-form mb-2" style="cursor:pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M48 256c0 114.87 93.13 208 208 208s208-93.13 208-208S370.87 48 256 48S48 141.13 48 256m212.65-91.36a16 16 0 0 1 .09 22.63L208.42 240H342a16 16 0 0 1 0 32H208.42l52.32 52.73A16 16 0 1 1 238 347.27l-79.39-80a16 16 0 0 1 0-22.54l79.39-80a16 16 0 0 1 22.65-.09" />
                        </svg>
                    </div>
                    <nav class="ms-3 mt-2" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">plan details</li>
                        </ol>
                    </nav>
                </div>
                <form>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelectGrid">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="floatingSelectGrid">Exam</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <select class="my-select2" multiple="multiple" style="width: 100%;">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                                <option value="option4">Option 4</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="file" class="form-control" id="uploadicon" placeholder="Auto Number">
                                <label for="uploadicon">Upload Icon</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="Title" placeholder="Title" required>
                                <label for="Title">Title</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Comments</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check my-2">
                                <input class="form-check-input" type="checkbox" id="role1" checked>
                                <label class="form-check-label" for="role1">
                                    Status
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn theme-btn-outline my-4 d-flex align-items-center px-md-5 mx-1">
                            Save
                        </button>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="d-flex justify-content-start">
                            <button type="button" class="btn theme-btn my-4 d-flex align-items-center px-md-5 mx-1" data-bs-toggle="modal" data-bs-target="#filterModal">
                                Add Packages
                            </button>
                        </div>
                        <div class="table-responsive scrollbar px-1">
                            <table class="table fs-9 mb-0 table-hover">
                                <thead>
                                    <tr>
                                        <th class="sort white-space-nowrap align-middle ps-4 text-nowrap" scope="col">ID</th>
                                        <th class="sort align-middle ps-4 text-nowrap" scope="col">TITLE</th>
                                        <th class="sort align-middle ps-4 text-nowrap" scope="col">DURATION</th>
                                        <th class="sort align-middle ps-4 text-nowrap" scope="col">PRICE</th>
                                        <th class="sort align-middle ps-4 text-nowrap" scope="col">STATUS</th>
                                        <th class="sort align-middle ps-4 text-nowrap" scope="col">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="students-table-body">
                                    <tr class="position-static">
                                        <td class="ps-4">
                                            101
                                        </td>
                                        <td class="ps-4 text-primary">
                                            Premium Plan
                                        </td>
                                        <td class="ps-4">
                                            2 Years
                                        </td>
                                        <td class="white-space-nowrap ps-4">
                                            $50
                                        </td>
                                        <td class="ps-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                            </div>
                                        </td>
                                        <td class="white-space-nowrap ps-4">
                                            <div class="btn-reveal-trigger position-static">
                                                <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#add-features">Add Feature</a>
                                                    <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#view-features">View Feature</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" type="button" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="position-static">
                                        <td class="ps-4">
                                            102
                                        </td>
                                        <td class="ps-4 text-primary">
                                            Basic Plan
                                        </td>
                                        <td class="ps-4">
                                            1 Year
                                        </td>
                                        <td class="white-space-nowrap ps-4">
                                            $25
                                        </td>
                                        <td class="ps-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked2" checked>
                                            </div>
                                        </td>
                                        <td class="white-space-nowrap ps-4">
                                            <div class="btn-reveal-trigger position-static">
                                                <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Add Feature</a>
                                                    <a class="dropdown-item" type="button">View Feature</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" type="button" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="position-static">
                                        <td class="ps-4">
                                            103
                                        </td>
                                        <td class="ps-4 text-primary">
                                            Standard Plan
                                        </td>
                                        <td class="ps-4">
                                            3 Years
                                        </td>
                                        <td class="white-space-nowrap ps-4">
                                            $75
                                        </td>
                                        <td class="ps-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked3" checked>
                                            </div>
                                        </td>
                                        <td class="white-space-nowrap ps-4">
                                            <div class="btn-reveal-trigger position-static">
                                                <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Add Feature</a>
                                                    <a class="dropdown-item" type="button">View Feature</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" type="button" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="position-static">
                                        <td class="ps-4">
                                            104
                                        </td>
                                        <td class="ps-4 text-primary">
                                            Gold Plan
                                        </td>
                                        <td class="ps-4">
                                            5 Years
                                        </td>
                                        <td class="white-space-nowrap ps-4">
                                            $120
                                        </td>
                                        <td class="ps-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked4" checked>
                                            </div>
                                        </td>
                                        <td class="white-space-nowrap ps-4">
                                            <div class="btn-reveal-trigger position-static">
                                                <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Add Feature</a>
                                                    <a class="dropdown-item" type="button">View Feature</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" type="button" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="position-static">
                                        <td class="ps-4">
                                            105
                                        </td>
                                        <td class="ps-4 text-primary">
                                            Silver Plan
                                        </td>
                                        <td class="ps-4">
                                            6 Months
                                        </td>
                                        <td class="white-space-nowrap ps-4">
                                            $15
                                        </td>
                                        <td class="ps-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked5" checked>
                                            </div>
                                        </td>
                                        <td class="white-space-nowrap ps-4">
                                            <div class="btn-reveal-trigger position-static">
                                                <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Add Feature</a>
                                                    <a class="dropdown-item" type="button">View Feature</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" type="button" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="position-static">
                                        <td class="ps-4">
                                            106
                                        </td>
                                        <td class="ps-4 text-primary">
                                            Platinum Plan
                                        </td>
                                        <td class="ps-4">
                                            10 Years
                                        </td>
                                        <td class="white-space-nowrap ps-4">
                                            $200
                                        </td>
                                        <td class="ps-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked6" checked>
                                            </div>
                                        </td>
                                        <td class="white-space-nowrap ps-4">
                                            <div class="btn-reveal-trigger position-static">
                                                <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Add Feature</a>
                                                    <a class="dropdown-item" type="button">View Feature</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" type="button" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn theme-btn-outline text-center px-md-5 px-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="view-features" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border">
                <form id="addEventForm" autocomplete="off">
                    <div class="modal-header justify-content-between border-0 px-4 py-3">
                        <h4 class="modal-title text-white">View Features</h4>
                        <button class="btn p-1 btn-outline-light" type="button" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 15 15">
                                <path fill="currentColor" d="M3.64 2.27L7.5 6.13l3.84-3.84A.92.92 0 0 1 12 2a1 1 0 0 1 1 1a.9.9 0 0 1-.27.66L8.84 7.5l3.89 3.89A.9.9 0 0 1 13 12a1 1 0 0 1-1 1a.92.92 0 0 1-.69-.27L7.5 8.87l-3.85 3.85A.92.92 0 0 1 3 13a1 1 0 0 1-1-1a.9.9 0 0 1 .27-.66L6.16 7.5L2.27 3.61A.9.9 0 0 1 2 3a1 1 0 0 1 1-1c.24.003.47.1.64.27" />
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body pt-4 pb-2 px-4">
                        <div class="d-flex align-items-center justify-content-between my-2">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15">
                                    <path fill="#55C959" fill-rule="evenodd" d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0m7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768z" clip-rule="evenodd" />
                                </svg>
                                <p class="mb-0 ms-3">2900+ Total Questions & Rationales</p>
                            </div>
                            <svg class="cross-svg" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15">
                                <path fill="currentColor" d="M3.64 2.27L7.5 6.13l3.84-3.84A.92.92 0 0 1 12 2a1 1 0 0 1 1 1a.9.9 0 0 1-.27.66L8.84 7.5l3.89 3.89A.9.9 0 0 1 13 12a1 1 0 0 1-1 1a.92.92 0 0 1-.69-.27L7.5 8.87l-3.85 3.85A.92.92 0 0 1 3 13a1 1 0 0 1-1-1a.9.9 0 0 1 .27-.66L6.16 7.5L2.27 3.61A.9.9 0 0 1 2 3a1 1 0 0 1 1-1c.24.003.47.1.64.27"></path>
                            </svg>
                        </div>
                        <div class="d-flex align-items-center justify-content-between my-2">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15">
                                    <path fill="#55C959" fill-rule="evenodd" d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0m7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768z" clip-rule="evenodd" />
                                </svg>
                                <p class="mb-0 ms-3">2900+ Total Questions & Rationales</p>
                            </div>
                            <svg class="cross-svg" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15">
                                <path fill="currentColor" d="M3.64 2.27L7.5 6.13l3.84-3.84A.92.92 0 0 1 12 2a1 1 0 0 1 1 1a.9.9 0 0 1-.27.66L8.84 7.5l3.89 3.89A.9.9 0 0 1 13 12a1 1 0 0 1-1 1a.92.92 0 0 1-.69-.27L7.5 8.87l-3.85 3.85A.92.92 0 0 1 3 13a1 1 0 0 1-1-1a.9.9 0 0 1 .27-.66L6.16 7.5L2.27 3.61A.9.9 0 0 1 2 3a1 1 0 0 1 1-1c.24.003.47.1.64.27"></path>
                            </svg>
                        </div>
                        <div class="d-flex align-items-center justify-content-between my-2">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15">
                                    <path fill="#55C959" fill-rule="evenodd" d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0m7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768z" clip-rule="evenodd" />
                                </svg>
                                <p class="mb-0 ms-3">2900+ Total Questions & Rationales</p>
                            </div>
                            <svg class="cross-svg" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15">
                                <path fill="currentColor" d="M3.64 2.27L7.5 6.13l3.84-3.84A.92.92 0 0 1 12 2a1 1 0 0 1 1 1a.9.9 0 0 1-.27.66L8.84 7.5l3.89 3.89A.9.9 0 0 1 13 12a1 1 0 0 1-1 1a.92.92 0 0 1-.69-.27L7.5 8.87l-3.85 3.85A.92.92 0 0 1 3 13a1 1 0 0 1-1-1a.9.9 0 0 1 .27-.66L6.16 7.5L2.27 3.61A.9.9 0 0 1 2 3a1 1 0 0 1 1-1c.24.003.47.1.64.27"></path>
                            </svg>
                        </div>
                        <div class="d-flex align-items-center justify-content-between my-2">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15">
                                    <path fill="#55C959" fill-rule="evenodd" d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0m7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768z" clip-rule="evenodd" />
                                </svg>
                                <p class="mb-0 ms-3">2900+ Total Questions & Rationales</p>
                            </div>
                            <svg class="cross-svg" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15">
                                <path fill="currentColor" d="M3.64 2.27L7.5 6.13l3.84-3.84A.92.92 0 0 1 12 2a1 1 0 0 1 1 1a.9.9 0 0 1-.27.66L8.84 7.5l3.89 3.89A.9.9 0 0 1 13 12a1 1 0 0 1-1 1a.92.92 0 0 1-.69-.27L7.5 8.87l-3.85 3.85A.92.92 0 0 1 3 13a1 1 0 0 1-1-1a.9.9 0 0 1 .27-.66L6.16 7.5L2.27 3.61A.9.9 0 0 1 2 3a1 1 0 0 1 1-1c.24.003.47.1.64.27"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center align-items-center px-4 pb-4 pt-3">
                        <button class="btn btn-cancel px-4" type="button" data-bs-dismiss="modal" aria-label="Close">
                            Cancel
                        </button>
                        <button class="btn btn-done px-4" type="submit">Done</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add-features" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border">
                <form id="addEventForm" autocomplete="off">
                    <div class="modal-header justify-content-between border-0 px-4 py-3">
                        <h4 class="modal-title text-white">Add Features</h4>
                        <button class="btn p-1 btn-outline-light" type="button" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 15 15">
                                <path fill="currentColor" d="M3.64 2.27L7.5 6.13l3.84-3.84A.92.92 0 0 1 12 2a1 1 0 0 1 1 1a.9.9 0 0 1-.27.66L8.84 7.5l3.89 3.89A.9.9 0 0 1 13 12a1 1 0 0 1-1 1a.92.92 0 0 1-.69-.27L7.5 8.87l-3.85 3.85A.92.92 0 0 1 3 13a1 1 0 0 1-1-1a.9.9 0 0 1 .27-.66L6.16 7.5L2.27 3.61A.9.9 0 0 1 2 3a1 1 0 0 1 1-1c.24.003.47.1.64.27" />
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body pt-4 pb-2 px-4">
                        <div class="row">
                            <div class="form-floating col-md-12 mb-3">
                                <input type="email" class="form-control" id="title" placeholder="title">
                                <label class="mx-2" for="title">Title</label>
                            </div>
                            <div class="form-floating col-md-12 mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label class="mx-2" for="floatingTextarea2">Description</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center align-items-center px-4 pb-4 pt-3">
                        <button class="btn btn-cancel px-4" type="button" data-bs-dismiss="modal" aria-label="Close">
                            Cancel
                        </button>
                        <button class="btn btn-done px-4" type="submit">Done</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="filterModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border">
                <form id="addEventForm" autocomplete="off">
                    <div class="modal-header justify-content-between border-0 px-4 py-3">
                        <h4 class="modal-title text-white">Add Plan</h4>
                        <button class="btn p-1 btn-outline-light" type="button" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 15 15">
                                <path fill="currentColor" d="M3.64 2.27L7.5 6.13l3.84-3.84A.92.92 0 0 1 12 2a1 1 0 0 1 1 1a.9.9 0 0 1-.27.66L8.84 7.5l3.89 3.89A.9.9 0 0 1 13 12a1 1 0 0 1-1 1a.92.92 0 0 1-.69-.27L7.5 8.87l-3.85 3.85A.92.92 0 0 1 3 13a1 1 0 0 1-1-1a.9.9 0 0 1 .27-.66L6.16 7.5L2.27 3.61A.9.9 0 0 1 2 3a1 1 0 0 1 1-1c.24.003.47.1.64.27" />
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body pt-4 pb-2 px-4">
                        <div class="row">
                            <div class="form-floating col-md-12 mb-3">
                                <input type="email" class="form-control" id="title" placeholder="title">
                                <label class="mx-2" for="title">Title</label>
                            </div>
                            <div class="form-floating col-md-12 mb-3">
                                <input type="number" class="form-control" id="duration" placeholder="duration">
                                <label class="mx-2" for="duration">Duration (Days)</label>
                            </div>
                            <div class="form-floating col-md-12 mb-3">
                                <input type="number" class="form-control" id="price" placeholder="price">
                                <label class="mx-2" for="price">Price</label>
                            </div>
                            <div class="form-check col-md-6 mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Addon 1
                                </label>
                            </div>
                            <div class="form-check col-md-6 mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Addon 2
                                </label>
                            </div>
                            <div class="form-check col-md-6 mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Enable
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center align-items-center px-4 pb-4 pt-3">
                        <button class="btn btn-cancel px-4" type="button" data-bs-dismiss="modal" aria-label="Close">
                            Cancel
                        </button>
                        <button class="btn btn-done px-4" type="submit">Done</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content text-center">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: #00000040 !important;"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center justify-content-center my-4">
                        <h6 class="mb-0 me-2">Are Sure Want to Delete</h6>
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                            <g fill="none">
                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                <path fill="currentColor" d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2m0 2a8 8 0 1 0 0 16a8 8 0 0 0 0-16m0 12a1 1 0 1 1 0 2a1 1 0 0 1 0-2m0-9.5a3.625 3.625 0 0 1 1.348 6.99a.8.8 0 0 0-.305.201c-.044.05-.051.114-.05.18L13 14a1 1 0 0 1-1.993.117L11 14v-.25c0-1.153.93-1.845 1.604-2.116a1.626 1.626 0 1 0-2.229-1.509a1 1 0 1 1-2 0A3.625 3.625 0 0 1 12 6.5" />
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-danger px-md-3" data-bs-dismiss="modal">NO</button>
                    <button type="button" class="btn btn-outline-danger px-md-3">YES</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#exam-plans').DataTable({
            dom: 'Bfrtip',
            pageLength: 10,
            buttons: [{
                extend: 'csv',
                text: 'Export'
            }, ],
            lengthMenu: [5, 10, 25, 50, 75, 100]
        });
    </script>
    @endsection