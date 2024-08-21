@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="">
        <div class="p-md-4 p-3">
            <form id="products">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Invoices</li>
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
                        <table id="invoices-list" class="table table-responsive">
                            <thead>
                                <tr>
                                    <th class="text-nowrap" scope="col">INVOICE NUMBER</th>
                                    <th scope="col" class="text-start">DATE</th>
                                    <th class="text-nowrap" scope="col">CUSTOMER NAME</th>
                                    <th scope="col">AMOUNT</th>
                                    <th scope="col">STATUS</th>
                                    <th class="text-end" scope="col">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody id="products-table-body">
                                <tr>
                                    <td>INV-0001</td>
                                    <td class="text-start">2024-07-22</td>
                                    <td>John Doe</td>
                                    <td>$500.00</td>
                                    <td class="text-nowrap">Paid</td>
                                    <td class="text-center">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item view-incoice" type="button">View</a>
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

            <div class="inoice-detail  d-none">
                <div class="d-flex align-items-center mb-4">
                    <div class="back-to-invoice-list mb-2" style="cursor:pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M48 256c0 114.87 93.13 208 208 208s208-93.13 208-208S370.87 48 256 48S48 141.13 48 256m212.65-91.36a16 16 0 0 1 .09 22.63L208.42 240H342a16 16 0 0 1 0 32H208.42l52.32 52.73A16 16 0 1 1 238 347.27l-79.39-80a16 16 0 0 1 0-22.54l79.39-80a16 16 0 0 1 22.65-.09" />
                        </svg>
                    </div>
                    <nav class="ms-3 mt-2" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Invoices</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Invoice Detail</li>
                        </ol>
                    </nav>
                </div>
                <div class="invoice-header d-flex justify-content-between align-items-center mt-2">
                    <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/50" class="rounded-circle" alt="Circular placeholder image">
                        <div class="ms-2">
                            <h4 class="m-0">Sherry</h4>
                            <p class="m-0">sherry@gmail.com</p>
                        </div>
                    </div>
                    <div class="text-end">
                        <p class="address">456 Another Street<br>City, Country</p>
                    </div>
                </div>
                <div class="invoice-body mt-4">
                    <div class="container">
                        <div class="row invoice-body-inner">
                            <div class="col-md-6">
                                <h5 class="mb-0">Bill To:</h5>
                                <p class="mb-0">Sherry</p>
                                <p class="mb-0">456 Another Street, City, Country</p>
                                <p class="mb-0">Email: sherry@gmail.com</p>
                                <p class="mb-0">Phone: 0332-00011100</p>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <h5>Invoice Details:</h5>
                                <p class="mb-0">Due Date: July 15, 2024</p>
                                <p class="mb-0">Status: Paid</p>
                            </div>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th class="text-end">Quantity</th>
                                        <th class="text-end">Unit Price</th>
                                        <th class="text-end">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Product A</td>
                                        <td class="text-end">2</td>
                                        <td class="text-end">$100.00</td>
                                        <td class="text-end">$200.00</td>
                                    </tr>
                                    <tr>
                                        <td>Service B</td>
                                        <td class="text-end">1</td>
                                        <td class="text-end">$300.00</td>
                                        <td class="text-end">$300.00</td>
                                    </tr>
                                    <!-- Additional items here -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" class="text-end"><strong>Subtotal</strong></td>
                                        <td class="text-end">$500.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end"><strong>Tax (10%)</strong></td>
                                        <td class="text-end">$50.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end"><strong>Total</strong></td>
                                        <td class="text-end">$550.00</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="invoice-footer text-center">
                    <p>Thank you for your business!</p>
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
        $('#invoices-list').DataTable({
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