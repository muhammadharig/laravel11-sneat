@extends('layouts.app')

@section('title', 'dashboard')

@section('main')
    <div class="card">
        <h5 class="card-header">Data User</h5>
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="mb-3 col-md-3">
                        <label for="name" class="form-label">Name</label>
                        <select name="" id="" class="select2 form-select">
                            <option value="">Pilih</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="name" class="form-label">Name</label>
                        <select name="" id="" class="select2 form-select">
                            <option value="">Pilih</option>
                        </select>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-filter"></i>
                        Filter
                    </button>
                    </div>
                    <div class="mb-3 col-md-3 mt-5">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
