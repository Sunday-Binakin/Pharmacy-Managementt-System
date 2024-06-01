<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MedicinesController;
use App\Http\Controllers\Admin\SuppliersController;

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
Route::post('login_post', [AuthenticationController::class, 'login_post']);
Route::post('forgot_post', [AuthenticationController::class, 'forgot_post']);
Route::get('reset/{token}', [AuthenticationController::class, 'getReset']);
Route::post('reset/{token}', [AuthenticationController::class, 'postReset']);
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/customers', [CustomersController::class, 'customers']);
    Route::get('admin/customers/add', [CustomersController::class, 'add_customers']);
    Route::post('admin/customers/add', [CustomersController::class, 'insert_add_customers']);
    Route::get('admin/customers/edit/{id}', [CustomersController::class, 'edit_customers']);
    Route::post('admin/customers/edit/{id}', [CustomersController::class, 'update_customers']);
    Route::get('admin/customers/delete/{id}', [CustomersController::class, 'delete_customers']);
    // medicines
    Route::get('admin/medicines', [MedicinesController::class, 'medicines']);
    Route::get('admin/medicines/add', [MedicinesController::class, 'add_medicines']);
    Route::post('admin/medicines/add', [MedicinesController::class, 'add_update']);
    Route::get('admin/medicines/edit/{id}', [MedicinesController::class, 'edit_medicines']);
    Route::post('admin/medicines/edit/{id}', [MedicinesController::class, 'update_medicines']);
    Route::get('admin/medicines/delete/{id}', [MedicinesController::class, 'delete_medicines']);
    //Medicine stock
    Route::get('admin/medicines_stock', [MedicinesController::class, 'medicine_stock_list']);
    Route::get('admin/medicines_stock/add', [MedicinesController::class, 'medicine_stock_add']);
    Route::post('admin/medicines_stock/add', [MedicinesController::class, 'medicine_stock_store']);
    //suppliers
    Route::get('admin/suppliers', [SuppliersController::class, 'index']);
    Route::get('admin/suppliers/add', [SuppliersController::class, 'create']);
    Route::post('admin/suppliers/add', [SuppliersController::class, 'store']);
});
Route::get('logout', [AuthenticationController::class, 'logout']);
