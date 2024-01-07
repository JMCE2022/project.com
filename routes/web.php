<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RegionProvinceCityController;

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

Route::get('/', [LoginDashboardController::class, 'login']);
Route::post('login', [LoginDashboardController::class, 'AuthLogin']);





Route::group(['middleware' => 'admin'], function () {
    Route::get('/Admin/Dashboard', [DashboardController::class, 'dashboard']);
    
   
    Route::get('/Admin/Listusers', [AdminController::class, 'listUsers']);
    Route::get('/Admin/Listarchive', [AdminController::class, 'listarchive']);
    Route::get('/Admin/Listusers/Archive/{id}', [AdminController::class, 'archive']);
    Route::get('/Admin/Listusers/Archived/{id}', [AdminController::class, 'archived']);
    Route::delete('/Admin/Listusers/DeletePermanent/{id}', [AdminController::class, 'deletePermanent'])->name('admin.users.deletePermanent');

    Route::get('/Admin/Listusers/Addusers', [AdminController::class, 'addUsers']);
    Route::post('/Admin/Listusers/Addusers', [AdminController::class, 'add']);
    Route::get('/Admin/Listusers/Edit/{id}', [AdminController::class, 'edit']);
    Route::post('/Admin/Listusers/Edit/{id}', [AdminController::class, 'update']);
    

    Route::get('/Admin/Listchildrens', [ChildrenController::class, 'listChildrens']);
    Route::get('/Admin/Listchildrens/Addchildrens', [ChildrenController::class, 'addChildrens']);
    Route::post('/Admin/Listchildrens/Addchildrens', [ChildrenController::class, 'add']);
    Route::get('/Admin/Listchildrens/Addinfofamilies', [ChildrenController::class, 'addinfofamilies']);
    Route::post('/Admin/Listchildrens/Addinfofamilies', [ChildrenController::class, 'infofamilies']);
    Route::get('/Admin/Listchildrens/Addsiblings', [ChildrenController::class, 'addsiblings']);
    Route::post('/Admin/Listchildrens/Addsiblings', [ChildrenController::class, 'siblings']);
    Route::get('/Admin/Listchildrens/Addguardians', [ChildrenController::class, 'addguardians']);
    Route::post('/Admin/Listchildrens/Addguardians', [ChildrenController::class, 'guardians']);
    Route::get('/Admin/Listchildrens/Addfinders', [ChildrenController::class, 'addfinders']);
    Route::post('/Admin/Listchildrens/Addfinders', [ChildrenController::class, 'finders']);
    Route::get('/Admin/Listchildrens/Adddevelopments', [ChildrenController::class, 'Adddevelopments']);
    Route::post('/Admin/Listchildrens/Adddevelopments', [ChildrenController::class, 'developments']);
    Route::get('/Admin/Listchildrens/Addhabits', [ChildrenController::class, 'Addhabits']);
    Route::post('/Admin/Listchildrens/Addhabits', [ChildrenController::class, 'habits']);
    Route::get('/Admin/Listchildrens/Addrehabilitations', [ChildrenController::class, 'Addrehabilitations']);
    Route::post('/Admin/Listchildrens/Addrehabilitations', [ChildrenController::class, 'rehabilitations']);
    Route::get('/Admin/Listchildrens/Addrecommendations', [ChildrenController::class, 'Addrecommendations']);
    Route::post('/Admin/Listchildrens/Addrecommendations', [ChildrenController::class, 'recommendations']);

    
    Route::get('/Admin/region-province-city', [ChildrenController::class, 'region']);
    Route::post('/Admin/get-provinces-by-region', [ChildrenController::class, 'getProvince']);
    Route::post('/Admin/get-cities-by-province', [ChildrenController::class, 'getCity']);
    Route::get('/Admin/Listdischargedchildren', [ChildrenController::class, 'childrenlistdischarged']);
    Route::get('/Admin/Listchildrens/Edit/{id}', [ChildrenController::class, 'edit']);
    Route::get('/Admin/Listchildrens/Preview/{id}', [ChildrenController::class, 'preview']);
    Route::post('/Admin/Listchildrens/Edit/{id}', [ChildrenController::class, 'update']);
    Route::get('/Admin/Listchildrens/Archive/{id}', [ChildrenController::class, 'archive']);
    Route::get('/Admin/Listchildrens/Archived/{id}', [ChildrenController::class, 'archived']);
    Route::delete('/Admin/Listchildrens/DeletePermanent/{id}', [ChildrenController::class, 'deletePermanentChildren'])->name('admin.childrens.deletePermanentChildren');
    
    Route::get('/Admin/Form/pic1', [FormController::class, 'pic1']);
    Route::get('/Admin/Form/pic2', [FormController::class, 'pic2']);
    Route::get('/Admin/Form/pic3A', [FormController::class, 'pic3A']);
    Route::get('/Admin/Form/pic3B', [FormController::class, 'pic3B']);
    Route::get('/Admin/Form/pic4', [FormController::class, 'pic4']);


    Route::get('/Admin/Myprofile/Myaccount', [GeneralController::class, 'myAccount']);
    Route::post('/Admin/Myprofile/Myaccount', [GeneralController::class, 'updateMyAccount']);
    Route::get('/Admin/Myaccount/region-province-city', [GeneralController::class, 'region']);
    Route::post('/Admin/Myaccount/get-provinces-by-region', [GeneralController::class, 'getProvince']);
    Route::post('/Admin/Myaccount/get-cities-by-province', [GeneralController::class, 'getCity']);

    


});

Route::group(['middleware' => 'staff'], function () {
    Route::get('/Staff/Dashboard', [DashboardController::class, 'dashboard']);
    
    Route::get('/Staff/region-province-city', [ChildrenController::class, 'region']);
    Route::post('/Staff/get-provinces-by-region', [ChildrenController::class, 'getProvince']);
    Route::post('/Staff/get-cities-by-province', [ChildrenController::class, 'getCity']);
    Route::get('/Staff/Listchildrens', [ChildrenController::class, 'listChildrens']);
    Route::get('/Staff/Listchildrens/Addchildrens', [ChildrenController::class, 'addChildrens']);
    Route::post('/Staff/Listchildrens/Addchildrens', [ChildrenController::class, 'add']);
    Route::get('/Staff/Listchildrens/Addinfofamilies', [ChildrenController::class, 'addinfofamilies']);
    Route::post('/Staff/Listchildrens/Addinfofamilies', [ChildrenController::class, 'infofamilies']);
    Route::get('/Staff/Listchildrens/Addsiblings', [ChildrenController::class, 'addsiblings']);
    Route::post('/Staff/Listchildrens/Addsiblings', [ChildrenController::class, 'siblings']);
    Route::get('/Staff/Listchildrens/Addguardians', [ChildrenController::class, 'addguardians']);
    Route::post('/Staff/Listchildrens/Addguardians', [ChildrenController::class, 'guardians']);
    Route::get('/Staff/Listchildrens/Addfinders', [ChildrenController::class, 'addfinders']);
    Route::post('/Staff/Listchildrens/Addfinders', [ChildrenController::class, 'finders']);
    Route::get('/Staff/Listchildrens/Adddevelopments', [ChildrenController::class, 'Adddevelopments']);
    Route::post('/Staff/Listchildrens/Adddevelopments', [ChildrenController::class, 'developments']);
    Route::get('/Staff/Listchildrens/Addhabits', [ChildrenController::class, 'Addhabits']);
    Route::post('/Staff/Listchildrens/Addhabits', [ChildrenController::class, 'habits']);
    Route::get('/Staff/Listchildrens/Addrehabilitations', [ChildrenController::class, 'Addrehabilitations']);
    Route::post('/Staff/Listchildrens/Addrehabilitations', [ChildrenController::class, 'rehabilitations']);
    Route::get('/Staff/Listchildrens/Addrecommendations', [ChildrenController::class, 'Addrecommendations']);
    Route::post('/Staff/Listchildrens/Addrecommendations', [ChildrenController::class, 'recommendations']);

    

    Route::get('/Staff/Listdischargedchildren', [ChildrenController::class, 'childrenlistdischarged']);
    Route::get('/Staff/Listchildrens/Edit/{id}', [ChildrenController::class, 'edit']);
    Route::get('/Staff/Listchildrens/Preview/{id}', [ChildrenController::class, 'preview']);
    Route::post('/Staff/Listchildrens/Edit/{id}', [ChildrenController::class, 'update']);
    Route::get('/Staff/Listchildrens/Archive/{id}', [ChildrenController::class, 'archive']);
    Route::get('/Staff/Listchildrens/Archived/{id}', [ChildrenController::class, 'archived']);
    Route::delete('/Staff/Listchildrens/DeletePermanent/{id}', [ChildrenController::class, 'deletePermanentChildren'])->name('staff.childrens.deletePermanentChildren');
    
    Route::get('/Staff/Form/pic1', [FormController::class, 'pic1']);
    Route::get('/Staff/Form/pic2', [FormController::class, 'pic2']);
    Route::get('/Staff/Form/pic3A', [FormController::class, 'pic3A']);
    Route::get('/Staff/Form/pic3B', [FormController::class, 'pic3B']);
    Route::get('/Staff/Form/pic4', [FormController::class, 'pic4']);

    Route::get('/Staff/Myprofile/Myaccount', [GeneralController::class, 'myAccount']);
    Route::post('/Staff/Myprofile/Myaccount', [GeneralController::class, 'updateMyAccount']);
    Route::get('/Staff/Myaccount/region-province-city', [GeneralController::class, 'region']);
    Route::post('/Staff/Myaccount/get-provinces-by-region', [GeneralController::class, 'getProvince']);
    Route::post('/Staff/Myaccount/get-cities-by-province', [GeneralController::class, 'getCity']);
});







Route::get('/logout', [LoginDashboardController::class, 'logoutButton'])->name('logoutButton');




