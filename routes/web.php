<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\cticket;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('guest.dashboard');
});

Route::get('/faq', function () {
    return view('guest.faq');
})->name('faq');

Route::get('/agenx/beli-tiket', function () {
    return view('guest.belitiket');
})->name('belitiket');

Route::get('/agenx/cetak-tiket/{id_ticket}', [cticket::class, 'cetaktiket'])->name('cetaktiket');
Route::post('/agenx/beli-tiket/action', [cticket::class, 'belitiket'])->name('belitiket.action');



//admin agen x

Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::controller(admin::class)->middleware('auth')->group(function () {
    Route::get('/home', 'home')->name('home');
    Route::get('/admin/pemesan', 'pemesan')->name('pemesan');
    Route::get('/admin/laporan', 'laporan')->name('laporan');
    Route::get('/admin/checkin', 'checkin')->name('checkin');

    Route::post('/admin/checkinaction', 'checkin_action')->name('checkin.action');
});

Route::controller(UserController::class,)->middleware('guest')->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'login_action')->name('login.action');
});
