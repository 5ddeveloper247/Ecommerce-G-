@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="ppt">
        <div class="p-md-4 p-3">
            <div id="products">
                <form>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ppt</li>
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
                                <small class="text-center">Add New</small>
                            </div>
                        </div>
                    </div>
                    <div id="products">
                        <div class="px-4 py-4 bg-white shadow table-container">
                            <table id="ppt-table" class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap" scope="col">Student Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col" data-sort="category">Contact</th>
                                        <th class="text-nowrap" class="text-center" scope="col">Exam Name</th>
                                        <th class="text-nowrap" class="text-center" scope="col">Exam Date</th>
                                        <th class="text-nowrap" class="text-center" scope="col">Exam Score</th>
                                        <th class="text-end" scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="products-table-body">
                                    <tr>
                                        <td class="ps-3">John Doe</td>
                                        <td class="ps-3">johndoe@example.com</td>
                                        <td class="ps-3">+123456789</td>
                                        <td class="ps-3">Math Exam</td>
                                        <td class="text-center">
                                            2024-07-22
                                        </td>
                                        <td class="text-center">
                                            95
                                        </td>
                                        <td class="text-end">
                                            <div class="btn-reveal-trigger position-static">
                                                <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item ppt-bank-form" type="button">View</a>
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
                            <li class="breadcrumb-item"><a href="#">Question</a></li>
                            <li class="breadcrumb-item"><a href="#">PPT</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add</li>
                        </ol>
                    </nav>
                </div>
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6 form-floating mb-3">
                            <input type="text" class="form-control" id="audioBankCode" placeholder="Audio Bank Code" disabled>
                            <label class="ms-2" for="audioBankCode">Audio Bank Code</label>
                        </div>
                        <div class="col-md-6 form-floating mb-3">
                            <input type="text" class="form-control" id="audioBankType" placeholder="Audio Bank Type">
                            <label class="ms-2" for="audioBankType">Audio Bank Type</label>
                        </div>
                        <div class="col-md-6 form-floating mb-3">
                            <select class="form-select" id="category" aria-label="Select Category">
                                <option value="" selected>Select Category</option>
                            </select>
                            <label class="ms-2" for="category">Category</label>
                        </div>
                        <div class="col-md-6 form-floating mb-3">
                            <input type="text" class="form-control" id="description" placeholder="Description">
                            <label class="ms-2" for="description">Description</label>
                        </div>
                        <div class="col-md-6 form-floating mb-3">
                            <select class="form-select" id="status" aria-label="Select Status">
                                <option value="" selected>Select Status</option>
                                <option value="Draft">Draft</option>
                                <option value="Approved">Approved</option>
                            </select>
                            <label class="ms-2" for="status">Status</label>
                        </div>
                        <div class="col-md-6 form-floating mb-3">
                            <input type="file" class="form-control" id="pptUpload" accept=".ppt, .pptx" placeholder="PPT Upload">
                            <label class="ms-2" for="pptUpload">PPT Upload</label>
                        </div>
                        <div class="col-md-6 form-floating mb-3">
                            <input type="file" class="form-control" id="audioUpload" accept=".mp3, .wav" placeholder="Audio Upload">
                            <label class="ms-2" for="audioUpload">Audio Upload</label>
                        </div>
                        <div class="col-md-6 form-floating mb-3">
                            <input type="url" class="form-control" id="videoLink" placeholder="Video Link">
                            <label class="ms-2" for="videoLink">Video Link</label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-2">
                        <button type="submit" class="btn theme-btn-outline text-center px-md-5 px-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#ppt-table').DataTable({
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