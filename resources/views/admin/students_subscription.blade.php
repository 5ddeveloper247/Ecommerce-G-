@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="students-subscription">
        <div class="p-md-4 p-3">
            <div id="products">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Student Supscription</li>
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
                </div>
                <div>
                    <div class="px-4 py-4 bg-white shadow table-container">
                        <table id="enrolled-subscription" class="table table-responsive">
                            <thead>
                                <tr>
                                    <th class="text-nowrap" scope="col">STUDENT NAME</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col" data-sort="category">CONTACT</th>
                                    <th class="text-nowrap" scope="col">SUBSCRIPTION PLAN</th>
                                    <th scope="col">STATUS</th>
                                    <th class="text-end" scope="col">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody id="products-table-body">
                                <tr>
                                    <td>Sherry</td>
                                    <td>Sherry@gmail.com</td>
                                    <td>0332-00011100</td>
                                    <td>
                                        Premium
                                    </td>
                                    <td class="text-nowrap">Primary</td>
                                    <td class="text-center">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item view-student-subscription" type="button">View</a>
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
            <div class="student-subscription-detail d-none">
                <div class="row mb-4">
                    <div class="row g-3 h-100 mb-3 mt-0">
                        <div class="d-flex align-items-center mb-4">
                            <div class="back-to-student-subscription-list mb-2" style="cursor:pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M48 256c0 114.87 93.13 208 208 208s208-93.13 208-208S370.87 48 256 48S48 141.13 48 256m212.65-91.36a16 16 0 0 1 .09 22.63L208.42 240H342a16 16 0 0 1 0 32H208.42l52.32 52.73A16 16 0 1 1 238 347.27l-79.39-80a16 16 0 0 1 0-22.54l79.39-80a16 16 0 0 1 22.65-.09" />
                                </svg>
                            </div>
                            <nav class="ms-3 mt-2" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Student Supscription</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Student Supscription Detail</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column justify-content-between pb-3">
                                    <div class="row align-items-center g-5 mb-3 text-center text-sm-start">
                                        <div class="col-12 col-sm-auto mb-sm-2 d-flex justify-content-md-start justify-content-center">
                                            <div class="avatar avatar-5xl">
                                                <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/15.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-auto flex-1">
                                            <h3>Sherry Gujjar</h3>
                                            <p>Joined 3 months ago</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between border-top border-dashed pt-4">
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 2048 2048">
                                                    <path fill="currentColor" d="M1848 896q42 0 78 15t64 42t42 63t16 78q0 39-15 76t-43 65l-717 719l-377 94l94-377l717-718q28-28 65-42t76-15m51 249q21-21 21-51q0-31-20-50t-52-20q-14 0-27 4t-23 15l-692 694l-34 135l135-34zM640 896H512V768h128zm896 0H768V768h768zM512 1152h128v128H512zm128-640H512V384h128zm896 0H768V384h768zM384 1664h443l-32 128H256V0h1536v743q-67 10-128 44V128H384zm384-512h514l-128 128H768z"></path>
                                                </svg>
                                                <h6 class="ms-2 mb-0">Enrolled Exams</h6>
                                            </div>
                                            <p class="text-center mb-0">12</p>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                                                    <path fill="green" d="M3 18h18V6H3zM1 5a1 1 0 0 1 1-1h20a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm8 5a1 1 0 1 0-2 0a1 1 0 0 0 2 0m2 0a3 3 0 1 1-6 0a3 3 0 0 1 6 0m-2.998 6c-.967 0-1.84.39-2.475 1.025l-1.414-1.414A5.5 5.5 0 0 1 8.002 14a5.5 5.5 0 0 1 3.889 1.61l-1.414 1.415A3.5 3.5 0 0 0 8.002 16m8.205-1.293l4-4l-1.414-1.414l-3.293 3.293l-1.793-1.793l-1.414 1.414l2.5 2.5l.707.707z"></path>
                                                </svg>
                                                <h6 class="ms-2 mb-0">Passed Exams</h6>
                                            </div>
                                            <p class="text-center mb-0">11</p>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 48 48">
                                                    <path fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M38 4H10a2 2 0 0 0-2 2v36a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2M17 30h14m-14 6h7m-4-15l8-8m0 8l-8-8"></path>
                                                </svg>
                                                <h6 class="ms-2 mb-0">Failed Exams</h6>
                                            </div>
                                            <p class="text-center mb-0">01</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h5 class="me-1">Subscription Details</h5>
                                        <!-- <button class="btn btn-success me-2" type="button">Renew</button> -->
                                        <!-- <button class="btn btn-danger" type="button">Cancel Subscription</button> -->
                                    </div>
                                    <h6>SUBSCRIPTION PLAN</h6>
                                    <p>Premium Plan</p>
                                    <div class="mb-3">
                                        <h6>Email</h6>
                                        <a href="mailto:shatinon@jeemail.com">sherry@gmail.com</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div>
                                            <h6>Start Date</h6>
                                            <p href="tel:+1234567890">2024-04-25</p>
                                        </div>
                                        <div>
                                            <h6>End Date</h6>
                                            <p href="tel:+1234567890">2024-04-25</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <h3 class="text-center my-4">Student Subscription</h3>
                        <div class="table-responsive scrollbar px-1">
                            <table class="table fs-9 mb-0 table-hover">
                                <thead>
                                    <tr>
                                        <th class="sort white-space-nowrap align-middle ps-4 text-nowrap" scope="col">SUBSCRIPTION ID</th>
                                        <th class="sort white-space-nowrap align-middle ps-4 text-nowrap" scope="col">PLAN NAME</th>
                                        <th class="sort align-middle ps-4 text-nowrap" scope="col" data-sort="email">START DATE</th>
                                        <th class="sort align-middle ps-4 text-nowrap" scope="col">END DATE</th>
                                        <th class="sort align-middle ps-4 text-nowrap" scope="col">COURSE NAME</th>
                                        <th class="sort align-middle ps-4 text-nowrap" scope="col">AMOUNT</th>
                                        <th class="sort align-middle ps-4 text-nowrap" scope="col">STATUS</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="students-table-body">
                                    <tr class="position-static">
                                        <td class="student-name ps-4 text-primary">
                                            SUB-001
                                        </td>
                                        <td class="student-name ps-4">
                                            Premium
                                        </td>
                                        <td class="email white-space-nowrap ps-4">
                                            2024-07-01
                                        </td>
                                        <td class="contact ps-4">
                                            2025-07-01
                                        </td>
                                        <td class="subscription-plan white-space-nowrap ps-4">
                                            Math 101
                                        </td>
                                        <td class="subscription-plan white-space-nowrap ps-4">
                                            $100.00
                                        </td>
                                        <td class="status white-space-nowrap ps-4">
                                            <span class="badge text-bg-primary">Active</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              
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
        $('#enrolled-subscription').DataTable({
            dom: 'Bfrtip',
            pageLength: 10,
            buttons: [{
                extend: 'csv',
                text: 'Export'
            }, ],
            lengthMenu: [5, 10, 25, 50, 75, 100]
        });
        $('#all-enrolled-subscription').DataTable({
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