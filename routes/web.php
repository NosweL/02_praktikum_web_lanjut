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
    echo('selamat datang');
});
Route::get('/about', function () {
    return('2041720253, Welson Mario Naibaho, TI2C');
});
Route::get('/articles/{id}', function ($id) {
    return('halaman article dengan id '.$id);
});