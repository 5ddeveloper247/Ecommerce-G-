@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="news-letter">
        <div class="p-md-4 p-3">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link px-md-3 active" id="nav-newsletter-tab" data-bs-toggle="tab" data-bs-target="#nav-newsletter" type="button" role="tab" aria-controls="nav-newsletter" aria-selected="true">NewsLetter</button>
                    <button class="nav-link px-md-3" id="nav-broadcast-tab" data-bs-toggle="tab" data-bs-target="#nav-broadcast" type="button" role="tab" aria-controls="nav-broadcast" aria-selected="false">BroadCast</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-newsletter" role="tabpanel" aria-labelledby="nav-newsletter-tab" tabindex="0">
                    <div id="products">
                        <form>
                            <nav class="pt-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Newsletter</li>
                                </ol>
                            </nav>
                            <div class="row justify-content-center gx-0 gy-2 gap-4 mb-4">
                                <div class="col d-flex justify-content-center gap-2 align-items-center d-card py-3 px-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 27 24">
                                        <path fill="#2fa992" d="M24 24H0V0h18.4v2.4h-16v19.2h20v-8.8h2.4V24zM4.48 11.58l1.807-1.807l5.422 5.422l13.68-13.68L27.2 3.318L11.709 18.809z" />
                                    </svg>
                                    <div class="ms-3">
                                        <h3 class="mb-0 text-center">
                                            <span class="fw-bold fs-2">32</span>
                                        </h3>
                                        <small>Total</small>
                                    </div>
                                </div>
                            </div>
                            <div id="products">
                                <div class="px-4 py-4 bg-white shadow table-container">
                                    <table id="newsletter" class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th class="text-nowrap" scope="col">Subscriber Name</th>
                                                <th class="text-nowrap" scope="col">Email Address</th>
                                                <th class="text-nowrap" scope="col" data-sort="category">Subscription Date</th>
                                                <th class="text-center" scope="col">STATUS</th>
                                                <th class="text-end" scope="col">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody id="products-table-body">
                                            <tr>
                                                <td class="ps-3">John Doe</td>
                                                <td class="ps-3">johndoe@example.com</td>
                                                <td class="ps-3 text-center">2024-07-23</td>
                                                <td class="text-center">
                                                    Active
                                                </td>
                                                <td class="text-end">
                                                    <div class="btn-reveal-trigger position-static">
                                                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" type="button">View</a>
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
                <div class="tab-pane fade" id="nav-broadcast" role="tabpanel" aria-labelledby="nav-broadcast-tab" tabindex="0">
                    <nav class="pt-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">BroadCast</li>
                        </ol>
                    </nav>
                    <div class="row justify-content-center gx-0 gy-2 gap-4 mb-4">
                        <div class="col d-flex justify-content-center gap-2 align-items-center d-card py-3 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 2048 2048">
                                <path fill="#2fa992" d="M2048 1152v384h-384v-128h190q-45-60-112-94t-142-34q-59 0-111 20t-95 55t-70 85t-38 107l-127-22q14-81 54-149t98-118t133-78t156-28q91 0 174 35t146 102v-137zm-448 768q58 0 111-20t95-55t70-85t38-107l127 22q-14 81-54 149t-98 118t-133 78t-156 28q-91 0-174-35t-146-102v137h-128v-384h384v128h-190q45 60 112 94t142 34M576 1061l627-626l90 90l-717 718l-333-334l90-90zm-448 347h912q-11 31-18 63t-10 65H0V0h1536v1012q-33 3-65 10t-63 18V128H128z" />
                            </svg>
                            <div class="ms-3">
                                <h3 class="mb-0 text-center">
                                    <span class="fw-bold fs-2">32</span>
                                </h3>
                                <small>Recurring</small>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center gap-2 align-items-center d-card py-3 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 24 24">
                                <path fill="#ff0000bd" d="M17 22q-2.075 0-3.537-1.463T12 17t1.463-3.537T17 12t3.538 1.463T22 17t-1.463 3.538T17 22m1.675-2.625l.7-.7L17.5 16.8V14h-1v3.2zM3 21V3h6.175q.275-.875 1.075-1.437T12 1q1 0 1.788.563T14.85 3H21v8.25q-.45-.325-.95-.55T19 10.3V5h-2v3H7V5H5v14h5.3q.175.55.4 1.05t.55.95zm9-16q.425 0 .713-.288T13 4t-.288-.712T12 3t-.712.288T11 4t.288.713T12 5" />
                            </svg>
                            <div class="ms-3">
                                <h3 class="mb-0 text-center">
                                    <span class="fw-bold fs-2">52</span>
                                </h3>
                                <small class="text-nowrap">Non-Recurring</small>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center gap-2 align-items-center d-card py-3 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 27 24">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 24 24">
                                <path fill="#ff0000bd" d="M8 22q-.825 0-1.412-.587T6 20v-2H4q-.825 0-1.412-.587T2 16v-2h2v2h2V8q0-.825.588-1.412T8 6h8V4h-2V2h2q.825 0 1.413.588T18 4v2h2q.825 0 1.413.588T22 8v12q0 .825-.587 1.413T20 22zm0-2h12V8H8zm-6-8V8h2v4zm0-6V4q0-.825.588-1.412T4 2h2v2H4v2zm6-2V2h4v2zm0 16V8z" />
                            </svg>
                            <div class="ms-3">
                                <h3 class="mb-0 text-center">
                                    <span class="fw-bold fs-2">12</span>
                                </h3>
                                <small>InActive</small>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center align-items-center d-card py-md-4 py-3 px-3" data-bs-toggle="modal" data-bs-target="#filterModal">
                            <div class="d-flex flex-column align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 32 32">
                                    <path fill="currentColor" d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13s13-5.832 13-13S23.168 3 16 3m0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16S9.913 5 16 5m-1 5v5h-5v2h5v5h2v-5h5v-2h-5v-5z" />
                                </svg>
                                <small class="text-center">Add New</small>
                            </div>
                        </div>
                    </div>
                    <div id="products">
                        <div class="px-4 py-4 bg-white shadow table-container">
                            <table id="broadcast" class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Type</th>
                                        <th class="text-nowrap" scope="col" data-sort="category">Date and Time</th>
                                        <th class="text-center" scope="col">STATUS</th>
                                        <th class="text-end" scope="col">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody id="products-table-body">
                                    <tr>
                                        <td class="ps-3">John Doe</td>
                                        <td class="ps-3">Recurring</td>
                                        <td class="ps-3">Daily</td>
                                        <td class="ps-3 text-nowrap">2024-08-01 10:30 AM</td>
                                        <td class="text-center">
                                            <div class="form-check form-switch d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked="">
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
                                                    <a class="dropdown-item" type="button">View</a>
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
                </div>
            </div>

            <!-- <div class="student-result-detail d-none">
                <div class="back-to-student-result-list" style="cursor:pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m4 10l-.707.707L2.586 10l.707-.707zm17 8a1 1 0 1 1-2 0zM8.293 15.707l-5-5l1.414-1.414l5 5zm-5-6.414l5-5l1.414 1.414l-5 5zM4 9h10v2H4zm17 7v2h-2v-2zm-7-7a7 7 0 0 1 7 7h-2a5 5 0 0 0-5-5z" />
                    </svg>
                </div>
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Student Result Detail</h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Name:</strong> John Doe
                            </div>
                            <div class="col-md-6">
                                <strong>Roll Number:</strong> 12345
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Class:</strong> 10th Grade
                            </div>
                            <div class="col-md-6">
                                <strong>Subject:</strong> Mathematics
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Marks:</strong> 95
                            </div>
                            <div class="col-md-6">
                                <strong>Grade:</strong> A+
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn theme-btn" onclick="window.print()">Print</button>
                        <button class="btn btn-secondary back-to-student-result-list">Back</button>
                    </div>
                </div>
            </div> -->
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
    <div class="modal fade" id="filterModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border">
                <form id="addEventForm" autocomplete="off">
                    <div class="modal-header justify-content-between border-0 px-4 py-3">
                        <h4 class="modal-title text-white">BroadCast</h4>
                        <button class="btn p-1 btn-outline-light" type="button" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 15 15">
                                <path fill="currentColor" d="M3.64 2.27L7.5 6.13l3.84-3.84A.92.92 0 0 1 12 2a1 1 0 0 1 1 1a.9.9 0 0 1-.27.66L8.84 7.5l3.89 3.89A.9.9 0 0 1 13 12a1 1 0 0 1-1 1a.92.92 0 0 1-.69-.27L7.5 8.87l-3.85 3.85A.92.92 0 0 1 3 13a1 1 0 0 1-1-1a.9.9 0 0 1 .27-.66L6.16 7.5L2.27 3.61A.9.9 0 0 1 2 3a1 1 0 0 1 1-1c.24.003.47.1.64.27" />
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body pt-4 pb-2 px-4">
                        <div class="row align-items-center">
                            <div class="form-floating col-md-6 mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Title">
                                <label class="ms-2" for="floatingInput">Title</label>
                            </div>
                            <div class="form-floating col-md-6 mb-3">
                                <input type="datetime-local" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label class="ms-2" for="floatingInput">Date</label>
                            </div>
                            <div class="form-floating col-md-6 mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Recurring</option>
                                    <option value="2">Non-Recurring</option>
                                </select>
                                <label class="ms-2" for="floatingSelect">Category</label>
                            </div>
                            <div class="form-floating col-md-6 mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Daily</option>
                                    <option value="2">Weekly</option>
                                    <option value="3">Monthly</option>
                                </select>
                                <label class="ms-2" for="floatingSelect">Type</label>
                            </div>
                            <div class="form-check col-md-12 mb-3 ms-2">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Status
                                </label>
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea id="editor9"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center align-items-center px-4 pb-4 pt-3">
                        <button class="btn btn-cancel px-4" type="button" data-bs-dismiss="modal" aria-label="Close">
                            Cancel
                        </button>
                        <button class="btn btn-done px-4 view-exam-matrix-main-content" type="button" data-bs-dismiss="modal" aria-label="Close">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#newsletter').DataTable({
            dom: 'Bfrtip',
            pageLength: 10,
            buttons: [{
                extend: 'csv',
                text: 'Export'
            }, ],
            lengthMenu: [5, 10, 25, 50, 75, 100]
        });
        $('#broadcast').DataTable({
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