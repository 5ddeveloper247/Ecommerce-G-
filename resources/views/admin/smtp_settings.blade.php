@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="smtp_settings">
        <div class="p-md-4 p-3">
            <form>
                <!-- SMTP Settings Section -->
                <div class="section mt-5">
                    <h2>SMTP Settings</h2>
                    <div class="row align-items-center">
                        <div class="col-sm-6 mb-3">
                            <label for="fromName" class="form-label">From Name</label>
                            <input type="text" class="form-control" id="fromName" placeholder="Enter from name">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="fromEmail" class="form-label">From Email</label>
                            <input type="email" class="form-control" id="fromEmail" placeholder="Enter from email">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="mailHost" class="form-label">Mail Host</label>
                            <input type="text" class="form-control" id="mailHost" placeholder="Enter mail host">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="mailPort" class="form-label">Mail Port</label>
                            <input type="text" class="form-control" id="mailPort" placeholder="Enter mail port">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="mailUsername" class="form-label">Mail Username</label>
                            <input type="text" class="form-control" id="mailUsername" placeholder="Enter mail username">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="mailPassword" class="form-label">Mail Password</label>
                            <input type="password" class="form-control" id="mailPassword" placeholder="Enter mail password">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="mailEncryption" class="form-label">Mail Encryption</label>
                            <input type="text" class="form-control" id="mailEncryption" placeholder="Enter mail encryption">
                        </div>
                        <div class="col-sm-6 mb-3 mt-md-4 form-check">
                            <input type="checkbox" class="form-check-input" id="activeInactive">
                            <label class="form-check-label" for="activeInactive">Active/Inactive</label>
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