@extends('layouts.app')

@section('title', 'dashboard')

@push('style')
    <link rel="stylesheet" href="{{ asset('vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('css/sneat-admin.css') }}" />
@endpush

@section('main')
    <!-- Modal -->
    <div class="modal modal-top fade" id="modalTop" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTopTitle">Import Data Broadcasting</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form id="import" action="" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Pilih File</label>
                                <input type="file" class="form-control" name="import_file">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i>
                                Import File
                            </button>
                        </form>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Table Broadcasting</h5>
        <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4 mb-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTop"><i class="fas fa-upload"></i>
                    Import
                </button>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr class="bg-dark">
                            <th class="text-white">No</th>
                            <th class="text-white">CURR_LIC_NUM</th>
                            <th class="text-white">CLNT_ID</th>
                            <th class="text-white">APPL_ID</th>
                            <th class="text-white">ERP_PWR_DBM</th>
                            <th class="text-white">BWIDTH</th>
                            <th class="text-white">BHP</th>
                            <th class="text-white">EQ_MDL</th>
                            <th class="text-white">ANT_MDL</th>
                            <th class="text-white">HGT_ANT</th>
                            <th class="text-white">MASTER_PLZN_CODE</th>
                            <th class="text-white">SID_LONG</th>
                            <th class="text-white">SID_LAT</th>
                            <th class="text-white">MON_QURY</th>
                            <th class="text-white">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>No</td>
                            <td>221412</td>
                            <td>C3324</td>
                            <td>232323</td>
                            <td>232332</td>
                            <td>23233</td>
                            <td>2323</td>
                            <td>2323</td>
                            <td>244242</td>
                            <td>233223</td>
                            <td>M2323</td>
                            <td>23233</td>
                            <td>232</td>
                            <td>2323</td>
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
