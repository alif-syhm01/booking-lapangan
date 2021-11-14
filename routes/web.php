<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\MainPageController;
use App\Http\Controllers\Admin\ManagementFieldController;
use App\Http\Controllers\Admin\ManagementBookingController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TestController;

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
Route::get('order', [OrderController::class, 'viewOrder'] );
Route::get('test-api', [TestController::class, 'callUser']);
Route::get('test-field', [TestController::class, 'callField']);
Route::get('test-rate', [TestController::class, 'callRate']);
Route::get('test-order', [TestController::class, 'callOrder']);

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

Route::group(['prefix' => 'order'], function(){
    Route::post('add-order', [OrderController::class, 'addOrder']);
    Route::put('edit-order/{id_order}', [OrderController::class, 'editOrder']);
    Route::delete('delete-order/{id_order}', [OrderController::class, 'deleteOrder']);
});