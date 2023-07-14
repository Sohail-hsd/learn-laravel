<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\basic;
use App\Http\Controllers\registration;
use App\Http\Controllers\resourceController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [basic::class, 'about']);
Route::get('/home', [basic::class, 'index']);
Route::resource('demo', resourceController::class);
Route::get('/register',[registration::class,'index']);
Route::post('/register',[registration::class,'register']);


// Route::get('/demo/{name}/{id?}', function($name,$id = null) {
//     // echo $name . " " . $id;
//     // Sand Data on the blade file.
//     $data = compact('name','id');
//     return view('demo')->with($data);
// });
