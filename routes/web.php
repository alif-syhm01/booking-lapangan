<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\MainPageController;
use App\Http\Controllers\Admin\ManagementFieldController;
use App\Http\Controllers\Admin\ManagementBookingController;
use App\Http\Controllers\FieldController;

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
    return view('homes');
});

Route::get('login-page', [UserController::class, 'viewLogin']);
Route::get('register-page', [UserController::class, 'viewRegister']);
Route::get('admin', [DashboardAdminController::class, 'viewAdmin']);
Route::get('user', [DashboardUserController::class, 'viewUser']);
Route::get('field', [FieldController::class, 'viewField']);

Route::group(['prefix' => 'admin'], function () {
    Route::get('main-page', [MainPageController::class, 'viewMainPage']);
    Route::get('management-field', [ManagementFieldController::class, 'viewManagementField']);
    Route::get('management-booking', [ManagementBookingController::class, 'viewManagementBooking']);
});

Route::group(['prefix' => 'field'], function () {
    Route::post('add-field', [FieldController::class, 'addField']);
    Route::put('edit-field/{id_field}', [FieldController::class, 'editField']);
    Route::delete('delete-field/{id_field}', [FieldController::class, 'deleteField']);
});