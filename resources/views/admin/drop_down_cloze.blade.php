@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="drop-down-cloze">
        <div class="p-md-4 p-3">
            <form id="products">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Quiz</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Drop Down Cloze</li>
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
                <div>
                    <div class="px-4 py-4 bg-white shadow table-container">
                        <table id="cloze" class="table table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th class="text-nowrap" scope="col">QUESTION TYPE</th>
                                    <th scope="col" data-sort="category">QUESTION</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">PUBLISHED ON</th>
                                    <th class="text-end" scope="col">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody id="products-table-body">
                                <tr>
                                    <td class="text-center">01</td>
                                    <td>Multiple Choice</td>
                                    <td>What is 2 + 2?</td>
                                    <td class="text-center">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">Nov 02, 6:15 AM</td>
                                    <td class="text-end">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item view-cloze-main-content" type="button">View</a>
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
            <div class="row cloze-main-content d-none">
                <div class="d-flex align-items-center mb-4">
                    <div class="back-to-products mb-2" style="cursor:pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M48 256c0 114.87 93.13 208 208 208s208-93.13 208-208S370.87 48 256 48S48 141.13 48 256m212.65-91.36a16 16 0 0 1 .09 22.63L208.42 240H342a16 16 0 0 1 0 32H208.42l52.32 52.73A16 16 0 1 1 238 347.27l-79.39-80a16 16 0 0 1 0-22.54l79.39-80a16 16 0 0 1 22.65-.09" />
                        </svg>
                    </div>
                    <nav class="ms-3 mt-2" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Drop Down Cloze</a></li>
                            <li class="breadcrumb-item"><a href="#">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sub-Category</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6">
                    <h5 class="mb-4">
                        Pre Statement
                    </h5>
                    <textarea id="editor"></textarea>
                    <h5 class="my-4 d-flex align-items-center">
                        Pre Info
                        <span class="ms-3" style="font-size: inherit !important; cursor:pointer" data-bs-toggle="modal" data-bs-target="#modal1" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                            (+)
                        </span>
                    </h5>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link px-lg-4 px-3 active" id="nav-Title1-tab" data-bs-toggle="tab" data-bs-target="#nav-Title1" type="button" role="tab" aria-controls="nav-Title1" aria-selected="true">Title1</button>
                            <button class="nav-link px-lg-4 px-3" id="nav-Title2-tab" data-bs-toggle="tab" data-bs-target="#nav-Title2" type="button" role="tab" aria-controls="nav-Title2" aria-selected="false">Title2</button>
                            <button class="nav-link px-lg-4 px-3" id="nav-Title3-tab" data-bs-toggle="tab" data-bs-target="#nav-Title3" type="button" role="tab" aria-controls="nav-Title3" aria-selected="false">Title3</button>
                            <button class="nav-link px-lg-4 px-3" id="nav-Title4-tab" data-bs-toggle="tab" data-bs-target="#nav-Title4" type="button" role="tab" aria-controls="nav-Title4" aria-selected="false">Title4</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane pre-info-tab-content fade pt-1 show active" id="nav-Title1" role="tabpanel" aria-labelledby="nav-Title1-tab" tabindex="0">A 28-year-old client is brought to the ED by friends,
                            who state that the client became violent this evening in
                            a local bar after a partner “break up.” The client accused
                            the partner of “cheating” and pulled out a knife. The cli-
                            ent’s friends were able to stop the client and take the knife
                            before any harm occurred. They state that they have never
                            seen the client act like this and are worried that something
                            might be seriously wrong. Currently the client seems agi-
                            tated and restless, and begins pacing in the ED demand-
                            ing to “see my partner right now.
                        </div>
                        <div class="tab-pane pre-info-tab-content fade pt-1" id="nav-Title2" role="tabpanel" aria-labelledby="nav-Title2-tab" tabindex="0">
                            with a hyperosmolar state. A low blood pressure is also consistent with dehydration.
                            Multiple Response Select N Item
                            e Multiple Response Select N test item is similar to the Multiple Response Select All
                            at Apply item except that the number of required correct responses is specied in the
                            question. is item will also have at least ve options but no more than 10 options from
                            which to choose. Sample Question 2.4 shows an example of this type of item to measure
                            the clinical judgment cognitive skill of Recognize Cues for an adult client who has new
                            onset of symptoms.
                            An 81-year-old client was admitted to an acute care unit from an
                            assisted-living facility with a low-grade fever and acute confusion.
                            The client’s daughter tells the admitting nurse that the client’s
                            mother had a stroke 2 years ago that resulted in left hemiparesis
                            and urinary incontinence, and the client has been in the assisted-
                            living facility for the past 5 months. The client has a long history
                            of DM type 2, which has been well controlled. Until this morning,
                            the client’s daughter had not been allowed to visit the facility due
                            to the COVID-19 pandemic. During the visit today, the daughter
                            noted that her mother was lethargic, confused, and unable to am-
                            bulate with a walker. POC testing in the ED indicated the presence
                            of multiple bacteria in the client’s urine and FSBG of 331 mg/dL
                            (18.4 mmol/L). The client’s BP is currently 96/48 mm Hg.
                        </div>
                        <div class="tab-pane pre-info-tab-content fade pt-1" id="nav-Title3" role="tabpanel" aria-labelledby="nav-Title3-tab" tabindex="0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At debitis porro omnis.</div>
                        <div class="tab-pane pre-info-tab-content fade pt-1" id="nav-Title4" role="tabpanel" aria-labelledby="nav-Title4-tab" tabindex="0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente error illum dolorem quo dignissimos voluptate voluptatibus praesentium libero?</div>
                    </div>
                    <h5 class="my-4">
                        Post Statement
                    </h5>
                    <textarea id="editor3"></textarea>
                </div>
                <div class="col-md-6">
                    <h5 class="mb-4">
                        Question Statement
                    </h5>
                    <textarea id="editor4"></textarea>
                    <div class="d-flex flex-wrap justify-content-between">
                        <button type="button" class="btn theme-btn-outline my-4 d-flex align-items-center add-statement-btn">
                            Statement
                            <span class="ps-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M228 128a12 12 0 0 1-12 12h-76v76a12 12 0 0 1-24 0v-76H40a12 12 0 0 1 0-24h76V40a12 12 0 0 1 24 0v76h76a12 12 0 0 1 12 12" />
                                </svg>
                            </span>
                        </button>
                        <button type="button" class="btn theme-btn-outline my-4 d-flex align-items-center add-option-btn">
                            Option
                            <span class=" ps-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M228 128a12 12 0 0 1-12 12h-76v76a12 12 0 0 1-24 0v-76H40a12 12 0 0 1 0-24h76V40a12 12 0 0 1 24 0v76h76a12 12 0 0 1 12 12" />
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="add-statement d-none">
                        <textarea id="editor7"></textarea>
                    </div>
                    <div class="add-option row align-items-center d-none">
                        <div class="col-md-6 my-1 d-flex">
                            <input class="form-control" type="text" placeholder="Option input field" aria-label="default input example">
                            <button type="button" class="btn btn-sm theme-btn-outline ms-2">Add</button>
                        </div>
                        <div class="col-md-6 my-1">
                            <div class="form-check my-2">

                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15">
                                    <path fill="currentColor" d="M3.64 2.27L7.5 6.13l3.84-3.84A.92.92 0 0 1 12 2a1 1 0 0 1 1 1a.9.9 0 0 1-.27.66L8.84 7.5l3.89 3.89A.9.9 0 0 1 13 12a1 1 0 0 1-1 1a.92.92 0 0 1-.69-.27L7.5 8.87l-3.85 3.85A.92.92 0 0 1 3 13a1 1 0 0 1-1-1a.9.9 0 0 1 .27-.66L6.16 7.5L2.27 3.61A.9.9 0 0 1 2 3a1 1 0 0 1 1-1c.24.003.47.1.64.27"></path>
                                </svg>
                            </div>
                            <div class="form-check my-2">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15">
                                    <path fill="currentColor" d="M3.64 2.27L7.5 6.13l3.84-3.84A.92.92 0 0 1 12 2a1 1 0 0 1 1 1a.9.9 0 0 1-.27.66L8.84 7.5l3.89 3.89A.9.9 0 0 1 13 12a1 1 0 0 1-1 1a.92.92 0 0 1-.69-.27L7.5 8.87l-3.85 3.85A.92.92 0 0 1 3 13a1 1 0 0 1-1-1a.9.9 0 0 1 .27-.66L6.16 7.5L2.27 3.61A.9.9 0 0 1 2 3a1 1 0 0 1 1-1c.24.003.47.1.64.27"></path>
                                </svg>
                            </div>
                            <div class="form-check my-2">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Default checked radio
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15">
                                    <path fill="currentColor" d="M3.64 2.27L7.5 6.13l3.84-3.84A.92.92 0 0 1 12 2a1 1 0 0 1 1 1a.9.9 0 0 1-.27.66L8.84 7.5l3.89 3.89A.9.9 0 0 1 13 12a1 1 0 0 1-1 1a.92.92 0 0 1-.69-.27L7.5 8.87l-3.85 3.85A.92.92 0 0 1 3 13a1 1 0 0 1-1-1a.9.9 0 0 1 .27-.66L6.16 7.5L2.27 3.61A.9.9 0 0 1 2 3a1 1 0 0 1 1-1c.24.003.47.1.64.27"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <h5 class="my-4">
                        Why Correct?
                    </h5>
                    <textarea id="editor5"></textarea>
                </div>
                <div class="col-md-6">
                    <h5 class="my-4">
                        Why Wrong?
                    </h5>
                    <textarea id="editor6"></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-danger back-to-products my-4 d-flex align-items-center px-md-5 mx-1">
                        Back
                    </button>
                    <button type="button" class="btn theme-btn-outline my-4 d-flex align-items-center px-md-5 mx-1">
                        Save
                    </button>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- Modal  -->
<div class="modal fade" id="modal1" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border border-translucent">
            <form id="addEventForm" autocomplete="off">
                <div class="modal-header justify-content-between border-translucent p-4">
                    <h5 class="modal-title fs-6 lh-sm">Pre Info</h5>
                    <button class="btn p-1 text-danger" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="modal-body pt-4 pb-2 px-4">
                    <div class="mb-3">
                        <label class="mb-2" for="leadStatus">
                            Title
                        </label>
                        <br>
                        <input class="w-100 py-1 px-2" type="text">
                    </div>
                    <div class="mb-3">
                        <label class="mb-2" for="createDate">
                            Description
                        </label>
                        <br>
                        <textarea id="editor2"></textarea>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-end align-items-center px-4 pb-4 border-0 pt-3">
                    <button class="btn theme-btn px-5" type="submit">Done</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="filterModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border">
            <form id="addEventForm" autocomplete="off">
                <div class="modal-header justify-content-between border-0 px-4 py-3">
                    <h4 class="modal-title text-white">Drop Down Cloze</h4>
                    <button class="btn p-1 btn-outline-light" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 15 15">
                            <path fill="currentColor" d="M3.64 2.27L7.5 6.13l3.84-3.84A.92.92 0 0 1 12 2a1 1 0 0 1 1 1a.9.9 0 0 1-.27.66L8.84 7.5l3.89 3.89A.9.9 0 0 1 13 12a1 1 0 0 1-1 1a.92.92 0 0 1-.69-.27L7.5 8.87l-3.85 3.85A.92.92 0 0 1 3 13a1 1 0 0 1-1-1a.9.9 0 0 1 .27-.66L6.16 7.5L2.27 3.61A.9.9 0 0 1 2 3a1 1 0 0 1 1-1c.24.003.47.1.64.27" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body pt-4 pb-2 px-4">
                    <div class="row">
                        <div class="form-floating col-md-12 mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label class="ms-2" for="floatingSelect">Category</label>
                        </div>
                        <div class="form-floating col-md-12 mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label class="ms-2" for="floatingSelect">Sub-Category</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center px-4 pb-4 pt-3">
                    <button class="btn btn-cancel px-4" type="button" data-bs-dismiss="modal" aria-label="Close">
                        Cancel
                    </button>
                    <button class="btn btn-done px-4 view-cloze-main-content" type="button" data-bs-dismiss="modal" aria-label="Close">Done</button>
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
<script>
    $('#cloze').DataTable({
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