<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginDashboardController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [LoginDashboardController::class,'login']);
Route::post('login', [LoginDashboardController::class,'AuthLogin']);



Route::get('/admin/search', function () {
    return view('admin.search');
});

Route::group(['middleware'=> 'admin'], function () {
    Route::get('/admin/dashboard', [DashboardController::class,'dashboard']);
});

Route::group(['middleware'=> 'staff'], function () {
    Route::get('/staff/dashboard', [DashboardController::class,'dashboard']);
});







Route::get('/logout', [LoginDashboardController::class, 'logoutButton'])->name('logoutButton');




    