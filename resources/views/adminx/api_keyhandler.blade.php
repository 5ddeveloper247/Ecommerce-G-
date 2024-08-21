@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="exam_matrix_multiple">
        <div class="p-md-4 p-3">
            <h2 class="text-center">Add AuthorizeNet Credentials</h2>
            <form>
                <div class="my-5">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="clientID" class="form-label">CLIENT ID *</label>
                            <input type="text" class="form-control" id="clientID" placeholder="-">
                        </div>
                        <div class="col-md-6">
                            <label for="clientSecret" class="form-label">CLIENT SECRET *</label>
                            <input type="text" class="form-control" id="clientSecret" placeholder="-">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="environment" class="form-label">ENVIRONMENT *</label>
                            <select class="form-select" id="environment" aria-label="Default select example">
                                <option>Sandbox</option>
                                <option>Production</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="apiURL" class="form-label">API URL *</label>
                            <input type="text" class="form-control" id="apiURL" placeholder="http://">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-outline-primary px-md-5 btn-lg">ADD</button>
                </div>
            </form>
        </div>

    </div>

</div>
@endsection