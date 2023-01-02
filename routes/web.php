<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Dashboard_Controller;
use App\Http\Controllers\Auth\AdloginController;
use App\Http\Controllers\Auth\AdregisterController;

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

Route::view('register','auth.register')->middleware('guest');
Route::post('store',[RegisterController::class,'store']);

Route::view('login','auth.login')->middleware('guest');
Route::post('authenticate',[LoginController::class,'authenticate']);

Route::get('Admin_Dash',[AdminController::class,'index']);

Route::get('admin_login',[AdloginController::class,'index']);
Route::post('authenticate',[AdloginController::class,'authenticate']);


Route::get('delete/{id}',[AdminController::class,'remove']);
Route::get('edit/{id}',[AdminController::class,'edit']);
Route::post('update/{id}',[AdminController::class,'update']);
Route::get('delete/{id}',[AdminController::class,'delete']);


Route::get('dashboard',[Dashboard_Controller::class,'index'])->middleware('auth');
Route::post('store',[Dashboard_Controller::class,'store']);

Route::get('sucesspage',[Dashboard_Controller::class,'process_index']);

Route::get('Adminregister',[AdregisterController::class,'index']);
Route::post('store',[AdregisterController::class,'store']);

