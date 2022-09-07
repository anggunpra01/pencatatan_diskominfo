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
    return view('welcome');
});


Route::get('/login',[UserController::class, 'login']);

Route::get('/register',[UserController::class, 'register']);
Route::post('/register',[UserController::class, 'store_register']);

Route::get('/dashboard', function () {
    return view('home.dashboard');
});

Route::resource('/home/laporan', LaporanController::class);
Route::resource('/home/pencatat', PencatatController::class);

