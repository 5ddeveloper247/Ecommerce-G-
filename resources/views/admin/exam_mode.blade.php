@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')


<div>
    <div class="p-md-4 p-3">
        <form>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Exam</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Exam Mode</li>
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
                <div class="col d-flex justify-content-center align-items-center d-card py-md-4 py-3 px-3" data-bs-toggle="modal" data-bs-target="#filterModal">
                    <div class="d-flex flex-column align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 32 32">
                            <path fill="currentColor" d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13s13-5.832 13-13S23.168 3 16 3m0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16S9.913 5 16 5m-1 5v5h-5v2h5v5h2v-5h5v-2h-5v-5z" />
                        </svg>
                        <small class="text-center">Add Exams</small>
                    </div>
                </div>
            </div>
            <!-- <div class="row g-3 justify-content-between mb-2">
                <div class="col-auto">
                    <h3>Exam Mode</h3>
                </div>
                <div class="col-auto">
                    <button class="btn px-3 theme-btn" type="button" data-bs-toggle="modal" data-bs-target="#filterModal" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                        ADD EXAM
                    </button>
                </div>
            </div> -->

            <div id="products">
                <div class="px-4 py-4 bg-white shadow table-container">
                    <table id="exam-mode" class="table table-responsive">
                        <thead>
                            <tr>
                                <!-- <th>
                                    <div class="form-check">
                                        <input class="form-check-input" id="checkbox-bulk-products-select" type="checkbox">
                                    </div>
                                </th> -->
                                <th scope="col">ID</th>
                                <th scope="col">MODE NAME</th>
                                <th scope="col" data-sort="category">DISCRIPTION</th>
                                <th class="text-center" scope="col">STATUS</th>
                                <th scope="col">PUBLISHED ON</th>
                                <th class="text-end" scope="col">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody id="products-table-body">
                            <tr>
                                <!-- <td class="ps-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td> -->
                                <td class="ps-3">01</td>
                                <td class="ps-3">Maths 101</td>
                                <td class="ps-3">Consectetur adipiscing elit.</td>
                                <td class="text-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    </div>
                                </td>
                                <td class="ps-3 text-nowrap">Nov 02, 6:15 AM</td>
                                <td class="text-end">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" type="button" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <!-- <td class="ps-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td> -->
                                <td class="ps-3">02</td>
                                <td class="ps-3">Science 102</td>
                                <td class="ps-3">Consectetur adipiscing elit.</td>
                                <td class="text-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    </div>
                                </td>
                                <td class="ps-3 text-nowrap">Nov 12, 8:15 AM</td>
                                <td class="text-end">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" type="button" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <!-- <td class="ps-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td> -->
                                <td class="ps-3">03</td>
                                <td class="ps-3">History 109</td>
                                <td class="ps-3">Sed do eiusmod tempor.</td>
                                <td class="text-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                                    </div>
                                </td>
                                <td class="ps-3 text-nowrap">Nov 13, 2:45 PM</td>
                                <td class="text-end">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" type="button" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <!-- <td class="ps-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td> -->
                                <td class="ps-3">04</td>
                                <td class="ps-3">Geography 207</td>
                                <td class="ps-3">Ut labore et dolore magna aliqua.</td>
                                <td class="text-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                                    </div>
                                </td>
                                <td class="ps-3 text-nowrap">Nov 14, 10:30 AM</td>
                                <td class="text-end">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" type="button" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <!-- <td class="ps-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td> -->
                                <td class="ps-3">05</td>
                                <td class="ps-3">English 96</td>
                                <td class="ps-3">Ut enim ad minim veniam.</td>
                                <td class="text-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    </div>
                                </td>
                                <td class="ps-3 text-nowrap">Nov 15, 1:20 PM</td>
                                <td class="text-end">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" type="button" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <!-- <td class="ps-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td> -->
                                <td class="ps-3">06</td>
                                <td class="ps-3">Physics 112</td>
                                <td class="ps-3">Quis nostrud exercitation ullamco laboris.</td>
                                <td class="text-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                                    </div>
                                </td>
                                <td class="ps-3 text-nowrap">Nov 16, 4:00 PM</td>
                                <td class="text-end">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" type="button" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <!-- <td class="ps-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td> -->
                                <td class="ps-3">07</td>
                                <td class="ps-3">Chemistry 198</td>
                                <td class="ps-3">Duis aute irure dolor in reprehenderit.</td>
                                <td class="text-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    </div>
                                </td>
                                <td class="ps-3 text-nowrap">Nov 17, 11:10 AM</td>
                                <td class="text-end">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" type="button" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <!-- <td class="ps-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td> -->
                                <td class="ps-3">08</td>
                                <td class="ps-3">Biology 977</td>
                                <td class="ps-3">Excepteur sint occaecat cupidatat non proident.</td>
                                <td class="text-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                                    </div>
                                </td>
                                <td class="ps-3 text-nowrap">Nov 18, 6:55 PM</td>
                                <td class="text-end">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" type="button" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <!-- <td class="ps-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td> -->
                                <td class="ps-3">09</td>
                                <td class="ps-3">Economics 100</td>
                                <td class="ps-3">Sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                                <td class="text-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                                    </div>
                                </td>
                                <td class="ps-3 text-nowrap">Nov 19, 5:40 AM</td>
                                <td class="text-end">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a type="button" class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <!-- <td class="ps-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td> -->
                                <td class="ps-3">10</td>
                                <td class="ps-3">Computer Science 12</td>
                                <td class="ps-3">Laboris nisi ut aliquip ex ea commodo consequat.</td>
                                <td class="text-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    </div>
                                </td>
                                <td class="ps-3">Nov 20, 9:10 PM</td>
                                <td class="text-end">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" type="button" data-bs-toggle="modal" data-bs-target="#confirmationModal">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <!-- <td class="ps-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td> -->
                                <td class="ps-3">11</td>
                                <td class="ps-3">Science 307</td>
                                <td class="ps-3">Laboris nisi ut aliquip ex ea commodo consequat.</td>
                                <td class="text-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    </div>
                                </td>
                                <td class="ps-3 text-nowrap">Nov 20, 9:10 PM</td>
                                <td class="text-end">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">Edit</a>
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
</div>

<div class="modal fade" id="filterModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border">
            <form id="addEventForm" autocomplete="off">
                <div class="modal-header justify-content-between border-0 px-4 py-3">
                    <h4 class="modal-title text-white">Mode</h4>
                    <button class="btn p-1 btn-outline-light" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 15 15">
                            <path fill="currentColor" d="M3.64 2.27L7.5 6.13l3.84-3.84A.92.92 0 0 1 12 2a1 1 0 0 1 1 1a.9.9 0 0 1-.27.66L8.84 7.5l3.89 3.89A.9.9 0 0 1 13 12a1 1 0 0 1-1 1a.92.92 0 0 1-.69-.27L7.5 8.87l-3.85 3.85A.92.92 0 0 1 3 13a1 1 0 0 1-1-1a.9.9 0 0 1 .27-.66L6.16 7.5L2.27 3.61A.9.9 0 0 1 2 3a1 1 0 0 1 1-1c.24.003.47.1.64.27" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body pt-4 pb-2 px-4">
                    <div class="row">
                        <div class="form-floating col-md-12 mb-3">
                            <input type="email" class="form-control" id="generalInfo" placeholder="name@example.com">
                            <label class="mx-2" for="generalInfo">Mode General Information</label>
                        </div>
                        <div class="form-floating col-md-12 mb-3">
                            <input type="email" class="form-control" id="examName" placeholder="name@example.com">
                            <label class="mx-2" for="examName">Mode Name</label>
                        </div>
                        <div class="form-floating col-md-12 mb-3">
                            <textarea class="form-control" placeholder="Description" id="floatingTextarea"></textarea>
                            <label class="mx-2" for="floatingTextarea">Mode Description</label>
                        </div>
                        <div class="form-check form-switch col-md-12 d-flex align-items-center mb-3 mx-3">
                            <input class="form-check-input" type="checkbox" role="switch" id="status">
                            <label class="form-check-label ms-2" for="status">Enable</label>
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
</div>

<script>
    $('#exam-mode').DataTable({
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