@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="students-subscription">
        <div class="p-md-4 p-3">
            <div id="products">
                <div class="px-4 px-lg-6 bg-white border-top border-bottom border-translucent position-relative top-1">
                    <div class="table-responsive scrollbar px-1">
                        <div class="table-responsive scrollbar px-1">
                            <table class="table fs-9 mb-0">
                                <thead>
                                    <tr>
                                        <th class="sort white-space-nowrap align-middle ps-4 text-nowrap" scope="col">STUDENT NAME</th>
                                        <th class="sort align-middle ps-4 text-nowrap" scope="col" data-sort="email">EMAIL</th>
                                        <th class="sort align-middle ps-4 text-nowrap" scope="col" data-sort="contact">CONTACT</th>
                                        <th class="sort align-middle ps-4 text-nowrap" scope="col" data-sort="subscription">SUBSCRIPTION PLAN</th>
                                        <th class="sort align-middle ps-4 text-nowrap" scope="col" data-sort="status">STATUS</th>
                                        <th class="sort text-end align-middle pe-0 ps-4 text-nowrap" scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="students-table-body">
                                    <tr class="position-static">
                                        <td class="student-name align-middle ps-4">
                                            John Doe
                                        </td>
                                        <td class="email white-space-nowrap ps-4">
                                            johndoe@gmail.com
                                        </td>
                                        <td class="contact ps-4">
                                            0332-1234567
                                        </td>
                                        <td class="subscription-plan white-space-nowrap ps-4">
                                            Premium
                                        </td>
                                        <td class="status white-space-nowrap ps-4">
                                            Active
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                            <div>
                                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                    <svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                    <a class="dropdown-item view-student-subscription">View</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#replyModal" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">Reply</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Add more student rows as needed -->
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                        <div class="col-auto d-flex">
                            <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info">
                                1 to 10
                                <span class="text-body-tertiary"> Items of</span>
                                16
                            </p>
                            <a class="fw-semibold" href="#!" data-list-view="*">View all<svg class="svg-inline--fa fa-angle-right " width="1.4rem" height="1.4em" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
                                    <g transform="translate(160 256)">
                                        <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                            <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" transform="translate(-160 -256)"></path>
                                        </g>
                                    </g>
                                </svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a>
                            <a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
                                    <g transform="translate(160 256)">
                                        <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                            <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" transform="translate(-160 -256)"></path>
                                        </g>
                                    </g>
                                </svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a>
                        </div>
                        <div class="col-auto d-flex table-bottom mb-2">
                            <button class="page-link disabled" data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                                    </path>
                                </svg>
                            </button>
                            <ul class="mb-0 pagination px-2">
                                <li class="active px-1">
                                    <button class="page" type="button" data-i="1" data-page="10">1</button>
                                </li>
                                <li class="px-1">
                                    <button class="page" type="button" data-i="2" data-page="10">2</button>
                                </li>
                            </ul>
                            <button class="page-link pe-0" data-list-pagination="next">
                                <svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-subscription-detail d-none">
                <div class="row">
                    <!-- <div class="col-12 mb-4">
                        <h2 class="text-center">Student Subscription Detail</h2>
                    </div> -->
                </div>
                <div class="row mb-4">
                    <div class="col-12 mb-3">
                        <div class="card">
                            <div class="card-header fw-bold text-center">
                                Personal Details
                            </div>
                            <div class="back-to-student-result-list position-absolute left-1 mt-2 ms-2" style="cursor:pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="m4 10l-.707.707L2.586 10l.707-.707zm17 8a1 1 0 1 1-2 0zM8.293 15.707l-5-5l1.414-1.414l5 5zm-5-6.414l5-5l1.414 1.414l-5 5zM4 9h10v2H4zm17 7v2h-2v-2zm-7-7a7 7 0 0 1 7 7h-2a5 5 0 0 0-5-5z" />
                                </svg>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <strong>Name:</strong>
                                    <span id="student-name">John Doe</span>
                                </div>
                                <div class="mb-3">
                                    <strong>Email:</strong>
                                    <span id="student-email">johndoe@gmail.com</span>
                                </div>
                                <div class="mb-3">
                                    <strong>Contact:</strong>
                                    <span id="student-contact">0332-1234567</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="card">
                            <div class="card-header fw-bold text-center">
                                Subscription Details
                            </div>
                            <div class="table-responsive scrollbar px-1">
                                <table class="table fs-9 mb-0">
                                    <thead>
                                        <tr>
                                            <th class="sort white-space-nowrap align-middle ps-4 text-nowrap" scope="col">SUBSCRIPTION ID</th>
                                            <th class="sort align-middle ps-4 text-nowrap" scope="col">START DATE</th>
                                            <th class="sort align-middle ps-4 text-nowrap" scope="col">END DATE</th>
                                            <th class="sort align-middle ps-4 text-nowrap" scope="col">COURSE NAME</th>
                                            <th class="sort align-middle ps-4 text-nowrap" scope="col">AMOUNT</th>
                                            <th class="sort align-middle ps-4 text-nowrap" scope="col">STATUS</th>
                                            <th class="sort text-end align-middle pe-0 ps-4 text-nowrap" scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="subscriptions-table-body">
                                        <tr class="position-static">
                                            <td class="subscription-id align-middle ps-4">
                                                SUB-001
                                            </td>
                                            <td class="start-date align-middle ps-4">
                                                2024-07-01
                                            </td>
                                            <td class="end-date align-middle ps-4">
                                                2025-07-01
                                            </td>
                                            <td class="course-name align-middle ps-4">
                                                Math 101
                                            </td>
                                            <td class="amount align-middle ps-4">
                                                $100.00
                                            </td>
                                            <td class="status align-middle ps-4">
                                                Active
                                            </td>
                                            <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                                <div>
                                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                                        <a class="dropdown-item view-subscription">View</a>
                                                        <a class="dropdown-item" href="#!">Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="position-static">
                                            <td class="subscription-id align-middle ps-4">
                                                SUB-002
                                            </td>
                                            <td class="start-date align-middle ps-4">
                                                2024-07-15
                                            </td>
                                            <td class="end-date align-middle ps-4">
                                                2025-07-15
                                            </td>
                                            <td class="course-name align-middle ps-4">
                                                Science 101
                                            </td>
                                            <td class="amount align-middle ps-4">
                                                $150.00
                                            </td>
                                            <td class="status align-middle ps-4">
                                                Active
                                            </td>
                                            <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                                <div>
                                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                                        <a class="dropdown-item view-subscription">View</a>
                                                        <a class="dropdown-item" href="#!">Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary me-2" type="button">Edit</button>
                            <button class="btn btn-danger" type="button">Cancel Subscription</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection