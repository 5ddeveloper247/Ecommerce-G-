@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="enrolled-students-with-exams">
        <div class="p-md-4 p-3">
            <form id="products">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Enrolled Student Wwith Exams</li>
                    </ol>
                </nav>
                <div class="row gx-0 gy-4 gap-4 mb-4">
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
                </div>
                <div>
                    <div class="px-4 pt-4 pb-5 bg-white shadow">
                        <table id="enrolled-students" class="table table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">STUDENT NAME</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col" data-sort="category">CONTACT</th>
                                    <th scope="col">EXAM NAME</th>
                                    <th scope="col">EXAM DATE</th>
                                    <th scope="col">EXAM SCORE</th>
                                    <th class="text-end" scope="col">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody id="products-table-body">
                                <tr>
                                    <td>Sherry</td>
                                    <td>Sherry@gmail.com</td>
                                    <td>0332-00011100</td>
                                    <td>
                                        Math Exam
                                    </td>
                                    <td class="text-nowrap">2024-07-22</td>
                                    <td class="text-nowrap text-center">95</td>
                                    <td class="text-center">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item view-enroll-students" type="button">View</a>
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

            <div class="enroll-students-detail d-none">
                <div class="row g-3 h-100">
                    <div class="col-12 col-md-7">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column justify-content-between pb-3">
                                <div class="row align-items-center g-5 mb-3 text-center text-sm-start">
                                    <div class="col-12 col-sm-auto mb-sm-2">
                                        <div class="avatar avatar-5xl">
                                            <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/15.webp" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-auto flex-1">
                                        <h3>Ansolo Lazinatov</h3>
                                        <p class="text-body-secondary">Joined 3 months ago</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between border-top border-dashed pt-4">
                                    <div>
                                        <h6>Enrolled Exams</h6>
                                        <p class="fs-7 text-body-secondary mb-0">12</p>
                                    </div>
                                    <div>
                                        <h6>Passed Exams</h6>
                                        <p class="fs-7 text-body-secondary mb-0">11</p>
                                    </div>
                                    <div>
                                        <h6>Failed Exams</h6>
                                        <p class="fs-7 text-body-secondary mb-0">01</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <h3 class="me-1">Default Address</h3>
                                </div>
                                <h5 class="text-body-secondary">Address</h5>
                                <p class="text-body-secondary">Shatinon Mekalan<br>Vancouver, British Columbia<br>Canada</p>
                                <div class="mb-3">
                                    <h5 class="text-body-secondary">Email</h5>
                                    <a href="mailto:shatinon@jeemail.com">shatinon@jeemail.com</a>
                                </div>
                                <h5 class="text-body-secondary">Phone</h5>
                                <a class="text-body-secondary" href="tel:+1234567890">+1234567890</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
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
        $('#enrolled-students').DataTable({
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