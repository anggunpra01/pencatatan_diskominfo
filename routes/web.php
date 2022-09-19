<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PencatatController;
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
    return view('register.login');
});


Route::get('/login',[UserController::class, 'login']);
Route::post('/login',[UserController::class, 'authenticate']);

Route::get('/register',[UserController::class, 'register']);
Route::post('/register',[UserController::class, 'store_register']);
Route::post('/create',[LaporanController::class, 'store']);
// edit
Route::get('/edit/{id}',[LaporanController::class, 'edit']);
Route::post('/edit/{id}',[LaporanController::class, 'editAttempt']);
// delete
Route::get('/delete/{id}',[LaporanController::class, 'delete']);

Route::get('/dashboard', function () {
    return view('home.dashboard');
});



Route::get('/home/cekSlug', [LaporanController::class, 'cekSlug']);
Route::resource('/home/laporan', LaporanController::class);
Route::post('/logout', [UserController::class, 'logout']);

