<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/register', [RegistrationController::class,'index'])->name('customer.create');
Route::post('/register', [RegistrationController::class,'register']);
Route::post('/register/update', [RegistrationController::class,'update']);
Route::get('/customers', [CustomerController::class,'index']);
Route::get('/customers/delete/{id}', [CustomerController::class,'delete'])->name('customer.delete');
Route::get('/customers/edit/{id}', [CustomerController::class,'edit'])->name('customer.edit');
Route::get('/customers/update/{id}', [CustomerController::class,'update'])->name('customer.update');

