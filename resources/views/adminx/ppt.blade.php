@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="ppt">
        <div class="p-md-4 p-3">
            <div id="products">
                <div class="px-4 px-lg-6 bg-white border-top border-bottom border-translucent position-relative top-1">
                    <div class="my-4">
                        <button class="btn btn-outline-primary ppt-bank-form px-md-5 px-3">Add Bank Form</button>
                    </div>
                    <div class="table-responsive scrollbar px-1">
                        <table class="table fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort white-space-nowrap align-middle ps-4 text-nowrap" scope="col">Student Name</th>
                                    <th class="sort align-middle ps-4 text-nowrap" scope="col" data-sort="email">Email</th>
                                    <th class="sort align-middle ps-4 text-nowrap" scope="col">Contact</th>
                                    <th class="sort align-middle ps-4 text-nowrap" scope="col">Exam Name</th>
                                    <th class="sort align-middle ps-4 text-nowrap" scope="col" data-sort="exam_date">Exam Date</th>
                                    <th class="sort align-middle ps-4 text-nowrap" scope="col">Exam Score</th>
                                    <th class="sort text-end align-middle pe-0 ps-4 text-nowrap" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="students-table-body">
                                <tr class="position-static">
                                    <td class="product align-middle ps-4">Sherry</td>
                                    <td class="white-space-nowrap ps-4">Sherry@gmail.com</td>
                                    <td class="ps-4">0332-00011100</td>
                                    <td class="white-space-nowrap ps-4">Math Exam</td>
                                    <td class="white-space-nowrap ps-4">2024-07-22</td>
                                    <td class="ps-4">95</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                        <div>
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item view-enroll-students">View</a>
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#replyModal" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">Reply</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger">Remove</a>
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
            <div class="ppt-bank-form-detail d-none">
                <div class="d-flex">
                    <div class="back-to-ppt-add-form" style="cursor:pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m4 10l-.707.707L2.586 10l.707-.707zm17 8a1 1 0 1 1-2 0zM8.293 15.707l-5-5l1.414-1.414l5 5zm-5-6.414l5-5l1.414 1.414l-5 5zM4 9h10v2H4zm17 7v2h-2v-2zm-7-7a7 7 0 0 1 7 7h-2a5 5 0 0 0-5-5z" />
                        </svg>
                    </div>
                    <h3 class="mx-auto mb-3">Ppt Bank Details</h3>
                </div>
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="audioBankCode" class="form-label">Audio Bank Code</label>
                            <input type="text" class="form-control" id="audioBankCode" placeholder="Audio Bank Code" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="audioBankType" class="form-label">Audio Bank Type</label>
                            <input type="text" class="form-control" id="audioBankType" placeholder="Audio Bank Type">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" id="category">
                                <option value="" selected>Select Category</option>
                                <!-- Add your category options here -->
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" placeholder="Description">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status">
                                <option value="" selected>Select Status</option>
                                <option value="Draft">Draft</option>
                                <option value="Approved">Approved</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pptUpload" class="form-label">PPT Upload</label>
                            <input type="file" class="form-control" id="pptUpload" accept=".ppt, .pptx">
                        </div>
                        <div class="col-md-6">
                            <label for="audioUpload" class="form-label">Audio Upload</label>
                            <input type="file" class="form-control" id="audioUpload" accept=".mp3, .wav">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="videoLink" class="form-label">Video Link</label>
                            <input type="url" class="form-control" id="videoLink" placeholder="Video Link">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        <button type="submit" class="btn btn-outline-primary text-center px-md-5 px-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection