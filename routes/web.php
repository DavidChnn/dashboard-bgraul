<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//LOGIN
Route::get('/login', function () {
    return view('login');
});

// ADMIN
Route::get('/', function () {
    return view('dashboard');
});
Route::get('/listasset', function () {
    return view('listasset');
});
Route::get('/listasset/assetdetail', function () {
    return view('listasset/assetdetail');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/listasset/addasset', function () {
    return view('listasset/addasset');
});
Route::get('/cip/request', function () {
    return view('cip/request');
});
Route::get('/cip/confirmrequest', function () {
    return view('cip/confirmrequest');
});
Route::get('/cip/confirmation', function () {
    return view('cip/confirmation');
});
Route::get('/cip/outstanding', function () {
    return view('cip/outstanding');
});
Route::get('/assetlayout', function () {
    return view('assetlayout');
});
Route::get('/assetlayout/lineproductionmap', function () {
    return view('assetlayout/lineproductionmap');
});
Route::get('/assetopname', function () {
    return view('assetopname');
});
Route::get('/report/depreciation', function () {
    return view('report/depreciation');
});
Route::get('/report/depreciation/fiscal', function () {
    return view('report/depreciation/fiscal');
});
Route::get('/setting', function () {
    return view('setting');
});

// USER
Route::get('/dashboarduser', function () {
    return view('dashboarduser');
});
Route::get('/cip/user/request', function () {
    return view('cip/user/request');
});
Route::get('/cip/user/addrequest', function () {
    return view('cip/user/addrequest');
});
Route::get('/cip/user/confirmation', function () {
    return view('cip/user/confirmation');
});