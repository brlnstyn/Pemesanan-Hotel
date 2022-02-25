<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UKamarController;
use App\Http\Controllers\UFasilitasController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\FasilitasKamarController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\RegisterAdminController;
use App\Http\Controllers\RegisterReceptionistController;
use App\Http\Controllers\BuktiController;
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
    Route::get('dashboard',[ReceptionistController::class,'filter'])->name('receptionist.dashboard');
});
Route::group(['prefix'=>'user', 'middleware'=>['isUser', 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
});

Route::resource('uFasilitas', UFasilitasController::class)->middleware('auth');
Route::resource('uKamar', UKamarController::class)->middleware('auth');
Route::resource('bookings', BookingController::class)->middleware('auth');
Route::resource('rooms', RoomController::class)->middleware('auth');
Route::resource('fasilitasKamar', FasilitasKamarController::class)->middleware('auth');
Route::resource('facilities', FacilityController::class)->middleware('auth');
Route::resource('registerAdmin', RegisterAdminController::class)->middleware('auth');
Route::resource('registerReceptionist', RegisterReceptionistController::class)->middleware('auth');
Route::resource('bukti', BuktiController::class)->middleware('auth');


