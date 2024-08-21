@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="website_settings">
        <div class="p-md-4 p-3">
            <form>
                <!-- Website Settings Section -->
                <div class="section">
                    <h2>Website Settings</h2>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" class="form-control" id="logo">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <img class="logo-preview" src="https://static.onecompiler.com/images/logo/oc_logo_v4_light.svg" alt="">
                        </div>
                    </div>
                    <h4>Social Links</h4>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="socialLinks" class="form-label">FaceBook</label>
                            <input type="text" class="form-control" id="socialLinks" placeholder="Enter social links">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="socialLinks" class="form-label">LinkedIn</label>
                            <input type="text" class="form-control" id="socialLinks" placeholder="Enter social links">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="socialLinks" class="form-label">Instagram</label>
                            <input type="text" class="form-control" id="socialLinks" placeholder="Enter social links">
                        </div>
                    </div>
                    <h4>Contact Links</h4>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="contactLinks" class="form-label">Name</label>
                            <input type="text" class="form-control" id="contactLinks" placeholder="Enter contact links">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="contactLinks" class="form-label">Phone No</label>
                            <input type="text" class="form-control" id="contactLinks" placeholder="Enter contact links">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="mail" class="form-control" id="Email" placeholder="Email">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="contactLinks" class="form-label">Address</label>
                            <textarea class="form-control" id="contactInfo" rows="3" placeholder="Enter contact information"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="websiteName" class="form-label">Website Name</label>
                            <input type="text" class="form-control" id="websiteName" placeholder="Enter website name">
                        </div>

                        <div class="col-sm-6 mb-3">
                            <label for="dateFormat" class="form-label">Date Format</label>
                            <select class="form-select" id="dateFormat" aria-label="Default select example">
                                <option selected>10/10/2023</option>
                                <option value="1">10 sep 2023</option>
                            </select>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="timeZone" class="form-label">TimeZone</label>
                            <select class="form-select" id="timeZone" aria-label="Default select example">
                                <option selected>America</option>
                                <option value="1">Asia</option>
                            </select>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="currency" class="form-label">Currency</label>
                            <select class="form-select" id="currency" aria-label="Default select example">
                                <option selected>USD</option>
                                <option value="1">PKR</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn theme-btn-outline btn-lg px-md-5">Save Settings</button>
                </div>
            </form>
        </div>

    </div>

</div>
@endsection