<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\AuthenticationController;
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

Route::get('/', [AuthenticationController::class, 'login']);
Route::get('forgot', [AuthenticationController::class, 'forgot']);
Route::post('login_post',[AuthenticationController::class,'login_post']);
Route::post('forgot_post',[AuthenticationController::class,'forgot_post']);
Route::get('reset/{token}',[AuthenticationController::class,'getReset']);
Route::post('reset/{token}',[AuthenticationController::class,'postReset']);
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/customers', [CustomersController::class, 'customers']);
    Route::get('admin/customers/add',[CustomersController::class,'add_customers']);
});
Route::get('logout',[AuthenticationController::class, 'logout']);
