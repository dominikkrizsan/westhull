<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* ------------------------projektrol----------------------- */

Route::get('/KEOP_7.1.1.1', function () {
    return view('guest.keop7111');
});

Route::get('/KEOP_1.1.1_2F_09-11-2012-0001', function () {
    return view('guest.keop111');
});

Route::get('/KEOP-2.3.0_2008-0006', function () {
    return view('guest.keop230');
});

/* ------------------------kozbeszerzes----------------------- */

Route::get('/kozbeszerzes', function () {
    return view('guest.kozbeszerzes');
});
