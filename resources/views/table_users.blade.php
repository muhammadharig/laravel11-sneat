@extends('layouts.app')

@section('title', 'dashboard')

@push('style')
    <link rel="stylesheet" href="{{ asset('vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('css/sneat-admin.css') }}" />
@endpush

@section('main')
    <div class="card">
        <h5 class="card-header">Data User</h5>
        <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4 mb-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTop"><i class="fas fa-add"></i>
                    Add New User
                </button>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr class="bg-dark">
                            <th class="text-white">No</th>
                            <th class="text-white">Profile</th>
                            <th class="text-white">Name</th>
                            <th class="text-white">Email</th>
                            <th class="text-white">Phone</th>
                            <th class="text-white">Roles</th>
                            <th class="text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>No</td>
                            <td>No img</td>
                            <td>Adu du</td>
                            <td>adudu@gmail.com</td>
                            <td>081234567890</td>
                            <td>Operator</td>
                            <td>
                                <a href="" class="btn btn-success"><i class="fas fa-edit"></i>Edit</a>
                                <a href="" class="btn btn-danger"><i class="fas fa-trash"></i>Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
@endpush
