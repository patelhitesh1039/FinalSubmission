@extends('layout.app')

@section('title', 'Register')

@push('styles')
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Rregister <b>Employees</b></h2>
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>
                    <div>
                        <div class="bg-light p-2 m-2">
                            <h5 class="text-dark text-center">Register</h5>
                            <div class="modal-body label_text register">
                                <div class="form-group">
                                    <label class="text-dark">Name</label>
                                    <input type="text" id="name_input" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="text-dark">Email</label>
                                    <input type="email" id="email_input" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="text-dark">Password</label>
                                    <input type="password" id="password_input" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer col-sm-6">
                            <input type="submit" class="btn btn-success" value="REGISTER" onclick="regiEmployee()">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custome_script')
    <script src="{{ asset('../js/auth/register.js') }}"></script>
@endpush