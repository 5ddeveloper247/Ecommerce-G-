@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="ticket-list">
        <div class="p-md-4 p-3">
            <div id="products">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Support</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ticket List</li>
                    </ol>
                </nav>
                <div class="table-responsive scrollbar px-1 d-none">
                    <table class="table fs-9 mb-0">
                        <thead>
                            <tr>
                                <th class="sort white-space-nowrap align-middle ps-4 text-nowrap" scope="col">TICKET ID</th>
                                <th class="sort align-middle ps-4 text-nowrap" scope="col" data-sort="subject">SUBJECT</th>
                                <th class="sort align-middle ps-4 text-nowrap" scope="col">STATUS</th>
                                <th class="sort align-middle ps-4 text-nowrap" scope="col" data-sort="priority">PRIORITY</th>
                                <th class="sort align-middle ps-4 text-nowrap" scope="col" data-sort="created-date">CREATED DATE</th>
                                <th class="sort align-middle ps-4 text-nowrap" scope="col" data-sort="assigned-to">ASSIGNED TO</th>
                                <th class="sort text-end align-middle pe-0 ps-4 text-nowrap" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list" id="tickets-table-body">
                            <tr class="position-static">
                                <td class="product align-middle ps-4">001</td>
                                <td class="white-space-nowrap ps-4">Issue with login</td>
                                <td class="ps-4">Open</td>
                                <td class="white-space-nowrap ps-4">High</td>
                                <td class="ps-4">2023-07-20</td>
                                <td class="white-space-nowrap ps-4">John Doe</td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div>
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                            <svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item view-ticket">View</a>
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#replyModal" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">Reply</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="mail-categories">
                            <div class="mail-menu m-0 p-0">
                                <div class="mail-menu-item mail-categories" data-bs-toggle="collapse" href="#collapseExample22" role="button" aria-expanded="false" aria-controls="collapseExample22">
                                    <span class="mail-text">Status</span>
                                    <span class="mail-icon">▾</span>
                                </div>
                                <div class="collapse show" id="collapseExample22">
                                    <div class="mail-menu-item mail-sub-categories">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <span class="mail-text">Complete</span>
                                    </div>
                                    <div class="mail-menu-item mail-sub-categories">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        </div>
                                        <span class="mail-text">Incomplete</span>
                                    </div>
                                    <div class="mail-menu-item mail-sub-categories">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        </div>
                                        <span class="mail-text">In Pocess</span>
                                    </div>
                                    <div class="mail-menu-item mail-sub-categories">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                        </div>
                                        <span class="mail-text">Assigned</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="px-4 px-lg-6 bg-white border-top border-bottom border-translucent position-relative top-1">
                            <div class="list-group mt-3">
                                <div class="list-item view-ticket">
                                    <input type="checkbox" class="form-check-input me-3">
                                    <span class="star">★</span>
                                    <div class="list-item-content">
                                        Lux Foods Inc., A wide variety of spices are organized in glass jars - Dolores ipsum dolor sit amet consectetur adipisicing elit. Cumque, est.
                                    </div>
                                    <div class="timestamp">
                                        09:15 am
                                    </div>
                                </div>

                                <div class="list-item view-ticket">
                                    <input type="checkbox" class="form-check-input me-3">
                                    <span class="star">★</span>
                                    <div class="list-item-content">
                                        Tech Innovations, The latest gadgets are displayed in the showroom - Ipsum dolor sit amet consectetur adipisicing elit. Cumque, est.
                                    </div>
                                    <div class="timestamp">
                                        02:30 pm
                                    </div>
                                </div>

                                <div class="list-item view-ticket">
                                    <input type="checkbox" class="form-check-input me-3">
                                    <span class="star">★</span>
                                    <div class="list-item-content">
                                        EcoGreen Solutions, Various plant samples are laid out for analysis - Sit amet consectetur adipisicing elit. Cumque, est.
                                    </div>
                                    <div class="timestamp">
                                        08:45 am
                                    </div>
                                </div>

                                <div class="list-item view-ticket">
                                    <input type="checkbox" class="form-check-input me-3">
                                    <span class="star">★</span>
                                    <div class="list-item-content">
                                        Horizon Enterprises, A series of architectural blueprints are scattered on the desk - Adipisicing elit. Cumque, est.
                                    </div>
                                    <div class="timestamp">
                                        01:20 pm
                                    </div>
                                </div>

                                <div class="list-item view-ticket">
                                    <input type="checkbox" class="form-check-input me-3">
                                    <span class="star">★</span>
                                    <div class="list-item-content">
                                        Global Travels, Colorful travel brochures are displayed on the rack - Consectetur adipisicing elit. Cumque, est.
                                    </div>
                                    <div class="timestamp">
                                        04:10 pm
                                    </div>
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
                                        </svg>
                                    </a>
                                    <a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
                                            <g transform="translate(160 256)">
                                                <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                                    <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" transform="translate(-160 -256)"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
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
            <div class="row ticket-detail d-none">
                <div class="d-flex align-items-center mb-4">
                    <div class="back-to-ticket-list" style="cursor:pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M48 256c0 114.87 93.13 208 208 208s208-93.13 208-208S370.87 48 256 48S48 141.13 48 256m212.65-91.36a16 16 0 0 1 .09 22.63L208.42 240H342a16 16 0 0 1 0 32H208.42l52.32 52.73A16 16 0 1 1 238 347.27l-79.39-80a16 16 0 0 1 0-22.54l79.39-80a16 16 0 0 1 22.65-.09" />
                        </svg>
                    </div>
                    <nav class="ms-3 mt-2" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ticket List</a></li>
                            <li class="breadcrumb-item"><a href="#">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sub-Category</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-3">
                    <div class="mail-categories my-2">
                        <div class="mail-menu m-0 p-0">
                            <div class="mail-menu-item mail-categories" data-bs-toggle="collapse" href="#collapseExample22" role="button" aria-expanded="false" aria-controls="collapseExample22">
                                <span class="mail-text">Status</span>
                                <span class="mail-icon">▾</span>
                            </div>
                            <div class="collapse show" id="collapseExample22">
                                <div class="mail-menu-item mail-sub-categories">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    </div>
                                    <span class="mail-text">Complete</span>
                                </div>
                                <div class="mail-menu-item mail-sub-categories">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    </div>
                                    <span class="mail-text">Incomplete</span>
                                </div>
                                <div class="mail-menu-item mail-sub-categories">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                    </div>
                                    <span class="mail-text">In Process</span>
                                </div>
                                <div class="mail-menu-item mail-sub-categories">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                    </div>
                                    <span class="mail-text">Assigned</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">

                    <div class="d-flex align-items-center justify-content-between profile-area mt-2">
                        <div class="d-flex mail-profile-detail">
                            <img src="{{asset('assets/images/5.jpg')}}" alt="">
                            <div class="ms-2">
                                <h6>Ingredia Nutrisha</h6>
                                <p><small>20 May 2020</small></p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button type="button" class="btn ticketno mx-2">
                                Mark Incomplete
                            </button>
                            <button type="button" class="btn ticketno mx-2">
                                Mark Process
                            </button>
                        </div>
                    </div>
                    <div class="mail-structure">
                        <div class="d-flex align-items-center justify-content-between">
                            <p>
                                <b>A collection of textile samples lay spread</b>
                            </p>
                            <p class="mx-2">07:23 AM</p>
                        </div>
                        <p>To: Me, info@example.com</p><br>
                        <p><b>Hi,Ingredia,</b></p>
                        <br>
                        <p>
                            <b>Ingredia Nutrisha,</b> A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture
                        </p>
                        <p class="pt-2">
                            Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                        </p>
                        <p class="pt-2">
                            Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,
                            <br><br>
                            <b>Kind Regards</b>
                        </p>
                        <p class="pt-2">Mr Smith</p>
                        <p></p>
                        <hr>
                        <div class="d-flex align-items-center justify-content-between">
                            <p>
                                <b>A collection of textile samples lay spread</b>
                            </p>
                            <p class="mx-2">07:23 AM</p>
                        </div>
                        <p>To: Me, info@example.com</p><br>
                        <p><b>Hi,Ingredia,</b></p>
                        <br>
                        <p>
                            <b>Ingredia Nutrisha,</b> A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture
                        </p>
                        <p class="pt-2">
                            Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                        </p>
                        <p class="pt-2">
                            Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,
                            <br><br>
                            <b>Kind Regards</b>
                        </p>
                        <p class="pt-2">Mr Smith</p>
                        <p></p>
                    </div>
                    <hr>
                    <h5 class="my-4">Reply</h5>
                    <div class="form_blk">
                        <textarea name="" id="" class="text_box p-3 rounded" placeholder="eg: Details about your dealership brand &amp; service"></textarea>
                    </div>
                  
                    <div class="attachments mt-3">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0">Attachments (3)</h5>
                            <svg style="cursor:pointer" class="advance-plus-icon ms-3" xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 256 256">
                                <path fill="currentColor" d="M188 184a16 16 0 1 1 16-16a16 16 0 0 1-16 16m36-68h-44a12 12 0 0 0 0 24h40v56H36v-56h40a12 12 0 0 0 0-24H32a20 20 0 0 0-20 20v64a20 20 0 0 0 20 20h192a20 20 0 0 0 20-20v-64a20 20 0 0 0-20-20M88.49 80.49L116 53v75a12 12 0 0 0 24 0V53l27.51 27.52a12 12 0 1 0 17-17l-48-48a12 12 0 0 0-17 0l-48 48a12 12 0 1 0 17 17Z"></path>
                            </svg>
                        </div>
                        <div class="d-flex">
                            <p class="px-2">My-Photo.png</p>
                            <p class="px-2">My-Document.docx</p>
                        </div>
                        <hr>
                        <div class="col-xs-12 p-0 mb-5">
                            <div class="uploader_blk uploader-blk-support text_box">
                                <div class="icon mb-3">
                                    <img src="{{asset('assets/images/upload.svg')}}" alt="">
                                </div>
                                <h6>Drag &amp; Drop</h6>
                                <div class="or">OR</div>
                                <div class="btn_blk text-center">
                                    <button type="button" class="btn btn-primary">Browse Files</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-primary my-4 px-md-5">Send</a>
                    </div>
                </div>
            </div>

            <div class="ticket-details-old d-none">
                <div class="back-to-ticket-list" style="cursor:pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m4 10l-.707.707L2.586 10l.707-.707zm17 8a1 1 0 1 1-2 0zM8.293 15.707l-5-5l1.414-1.414l5 5zm-5-6.414l5-5l1.414 1.414l-5 5zM4 9h10v2H4zm17 7v2h-2v-2zm-7-7a7 7 0 0 1 7 7h-2a5 5 0 0 0-5-5z" />
                    </svg>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Ticket Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Ticket ID:</strong>
                                <p>001</p>
                            </div>
                            <div class="col-md-6">
                                <strong>Subject:</strong>
                                <p>Issue with login</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Status:</strong>
                                <p>Open</p>
                            </div>
                            <div class="col-md-6">
                                <strong>Priority:</strong>
                                <p>High</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Created Date:</strong>
                                <p>2023-07-20</p>
                            </div>
                            <div class="col-md-6">
                                <strong>Assigned To:</strong>
                                <p>John Doe</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <strong>Description:</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <strong>Comments:</strong>
                                <div class="card">
                                    <div class="card-body">
                                        <p><strong>John Doe:</strong> Initial review of the issue. Working on a fix.</p>
                                        <p><strong>Jane Smith:</strong> Confirmed the issue. Awaiting further updates.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#replyModal">Reply</button>
                                <button class="btn btn-danger back-to-ticket-list">Close Ticket</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Reply Modal -->
    <div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="replyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="replyModalLabel">Reply to Ticket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="replyMessage" class="form-label">Message</label>
                            <textarea class="form-control" id="replyMessage" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Reply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection