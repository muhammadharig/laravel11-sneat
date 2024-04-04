<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/form-broadcasting', function () {
    return view('form_broadcasting');
});

Route::get('/table-broadcasting', function () {
    return view('table_broadcasting');
});

Route::get('/table-users', function () {
    return view('table_users');
});

Route::get('/statistik', function () {
    return view('statistik');
});