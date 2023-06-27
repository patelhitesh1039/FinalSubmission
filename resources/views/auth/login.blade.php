@extends('layout.app')

@section('title', 'Login')

@push('styles')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Login <b>Employees</b></h2>
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>
                    <div class="bg-light p-2 m-2">
                        <h5 class="text-dark text-center">Login</h5>
                        <div id="cform">
                            <div class="form-group">
                                <label class="text-dark">Email</label>
                                <input type="text" id="email_input" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Password</label>
                                <input type="password" id="password_input" name="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer col-sm-6">
                            <input type="submit" class="btn btn-success" value="LOGIN" onclick="logEmployee()">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
    @push('custome_script')
        <script src="{{ asset('../js/auth/login.js') }}"></script>
    @endpush