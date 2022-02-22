<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UKamarController;
use App\Http\Controllers\UFasilitasController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Auth;

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
Route::middleware(['middleware'=>'PreventBackHistory'])->group(function(){
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin', 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
});
Route::group(['prefix'=>'receptionist', 'middleware'=>['isReceptionist', 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard',[ReceptionistController::class,'index'])->name('receptionist.dashboard');
});
Route::group(['prefix'=>'user', 'middleware'=>['isUser', 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
});

Route::resource('uFasilitas', UFasilitasController::class);
Route::resource('uKamar', UKamarController::class);
Route::resource('booking', BookingController::class);

