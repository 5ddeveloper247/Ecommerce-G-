@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="">
        <div class="p-md-4 p-3">
            <div id="products">
                <div class="px-4 px-lg-6 bg-white border-top border-bottom border-translucent position-relative top-1">
                    <div class="table-responsive scrollbar px-1">
                        <table class="table fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort white-space-nowrap align-middle ps-4 text-nowrap" scope="col">NAME</th>
                                    <th class="sort align-middle ps-4 text-nowrap" scope="col" data-sort="category">EMAIL</th>
                                    <th class="sort align-middle ps-4 text-nowrap" scope="col">CONTACT</th>
                                    <th class="sort align-middle ps-4 text-nowrap" scope="col" data-sort="time">ADDRESS</th>
                                    <th class="sort text-end align-middle pe-0 ps-4 text-nowrap" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="products-table-body">
                                <tr class="position-static">
                                    <td class="product align-middle ps-4">
                                        Sherry
                                    </td>
                                    <td class="white-space-nowrap ps-4">
                                        Sherry@gmail.com
                                    </td>
                                    <td class="ps-4">
                                        0332-00011100
                                    </td>
                                    <td class="white-space-nowrap ps-4">
                                        Bahria Town Phase 8 Rawalpindi
                                    </td>
                                    <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                        <div>
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">

                                                <a class="dropdown-item" href="#!">View</a>

                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#replyModal" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256">Reply</a>
                                                <div class="dropdown-divider"></div>

                                                <a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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

        </div>

    </div>
    <div class="modal fade drop-down-table" id="replyModal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border border-translucent">
                <form id="addEventForm" autocomplete="off">
                    <div class="modal-header justify-content-between border-translucent p-4">
                        <h4 class="modal-title">
                            Reply
                        </h4>
                        <button class="btn p-1 text-danger" type="button" data-bs-dismiss="modal" aria-label="Close">
                            <svg class="svg-inline--fa fa-xmark" width="2em" height="2em" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body px-4 pb-0">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Sherry">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Sherry@gmail.com">
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" id="name" placeholder="0332-00011100">
                        </div>
                        <div class="mb-3">
                            <input type="address" class="form-control" id="address" placeholder="Bahria Town Phase 8 Rawalpindi">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="message" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center align-items-center px-4 pb-4 border-0 pt-3">
                        <button class="btn btn-primary px-5" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection