<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/status', [App\Http\Controllers\HomeController::class, 'index'])->name('status');
    Route::get('/createWord/eng', [App\Http\Controllers\EBPController::class,'generateEngPDF']);
    Route::get('/createWord/ind', [App\Http\Controllers\EBPController::class,'generateIndPDF']);
    Route::get('/edit_profil', [App\Http\Controllers\HomeController::class,'edit_profil'])->name('edit_profil');
    Route::patch('/edit_profil/{id}', [App\Http\Controllers\HomeController::class,'edit_profil_approve'])->name('edit_profil_approve');
    Route::get('/edit_password', [App\Http\Controllers\HomeController::class,'edit_password'])->name('edit_password');
    Route::patch('/edit_password/{id}', [App\Http\Controllers\HomeController::class,'edit_password_approve'])->name('edit_password_approve');
    Route::get('/profil', [App\Http\Controllers\HomeController::class,'profil'])->name('profil');
});


Route::prefix('admin')->group(function() {
    Route::get('/login',[App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::get('/logout', [App\Http\Controllers\Auth\AdminLoginController::class, 'logout'])->name('admin.logout');
    Route::get('/aktivasi', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::put('/aktivasi/{id}', [App\Http\Controllers\AdminController::class, 'aktivasiMahasiswa'])->name('admin.aktivasi'); 
    Route::get('/detail/{id}', [App\Http\Controllers\AdminController::class, 'detail'])->name('mhs.detail');

    Route::get('/validasi', [App\Http\Controllers\AdminController::class, 'validasi']);
    Route::put('/validasi/a/{id}', [App\Http\Controllers\AdminController::class, 'validasiSetuju'])->name('mhs.validasi.setuju');
    Route::put('/validasi/d/{id}', [App\Http\Controllers\AdminController::class, 'validasiTolak'])->name('mhs.validasi.tolak');

    Route::get('/terimaTA', [App\Http\Controllers\AdminController::class, 'terimaTA'])->name('admin.terima');
    Route::put('/terimaTA/setuju/{id}', [App\Http\Controllers\AdminController::class, 'terimaTASetuju'])->name('admin.terima.setuju');

    Route::get('/tanggungan', [App\Http\Controllers\AdminController::class, 'tanggungan']);
    Route::put('/admin/tanggungan/a/{id}', [App\Http\Controllers\AdminController::class, 'tanggunganSetuju'])->name('admin.tanggungan.setuju');
    Route::put('/admin/tanggungan/d/{id}', [App\Http\Controllers\AdminController::class, 'tanggunganTolak'])->name('admin.tanggungan.tolak');

    Route::get('/suratbebas', [App\Http\Controllers\AdminController::class, 'suratbebas'])->name('admin.suratbebas');
}) ;