@extends('layouts.app')

@section('title', 'dashboard')

@section('main')
<div class="card mb-4">
    <h5 class="card-header">Tambah Users</h5>
    <!-- Account -->
    <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
            <img src="{{ asset('img/avatars/1.png') }}" alt="user-avatar" class="d-block rounded" height="100" width="100"
                id="uploadedAvatar" />
            <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                    <span class="d-none d-sm-block">Upload new photo</span>
                    <i class="bx bx-upload d-block d-sm-none"></i>
                    <input type="file" id="upload" class="account-file-input" hidden
                        accept="image/png, image/jpeg" />
                </label>
                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                    <i class="bx bx-reset d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Reset</span>
                </button>

                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
            </div>
        </div>
    </div>
    <hr class="my-0" />
    <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="ex. Mark Zuckerberg"
                        autofocus />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="username" class="form-label">Username</label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="ex. Mark" />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input class="form-control" type="text" id="email" name="email"
                     placeholder="ex. markzuckerberg@example.com" />
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                    <div class="input-group input-group-merge">
                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                            placeholder="ex. 08123456789" />
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"/>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password"/>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="language" class="form-label">Roles</label>
                    <select id="language" class="select2 form-select">
                        <option value="">Select Roles</option>
                        <option value="">Operator</option>
                        <option value="">Pimpinan</option>
                        <option value="">User</option>
                    </select>
                </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
            </div>
        </form>
    </div>
    <!-- /Account -->
</div>
@endsection
