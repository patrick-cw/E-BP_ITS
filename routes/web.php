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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/createWord/eng', [App\Http\Controllers\EBPEnglishController::class,'createWordDoc']);
Route::get('/createWord/ind', [App\Http\Controllers\EBPIndoController::class,'createWordDoc']);

Route::prefix('admin')->group(function() {
    Route::get('/login',[App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::get('logout/', [App\Http\Controllers\Auth\AdminLoginController::class, 'logout'])->name('admin.logout');
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/registrasi', [App\Http\Controllers\AdminController::class, 'registrasi'])->name('admin.dashboard');
    Route::put('/dashboard/registrasi/{id}', [App\Http\Controllers\AdminController::class, 'aktivasiMahasiswa'])->name('admin.aktivasi'); 
    Route::get('/detail/{id}', [App\Http\Controllers\AdminController::class, 'detail'])->name('mhs.detail');

    Route::get('/validasi', [App\Http\Controllers\AdminController::class, 'validasi']);
    Route::put('/validasi/a/{id}', [App\Http\Controllers\AdminController::class, 'validasiSetuju'])->name('mhs.validasi.setuju');
    Route::put('/validasi/d/{id}', [App\Http\Controllers\AdminController::class, 'validasiTolak'])->name('mhs.validasi.tolak');

    Route::get('/terimaTA', [App\Http\Controllers\AdminController::class, 'terimaTA'])->name('admin.terima');
    Route::put('/terimaTA/setuju/{id}', [App\Http\Controllers\AdminController::class, 'terimaTASetuju'])->name('admin.terima.setuju');

    Route::get('/tanggungan', [App\Http\Controllers\AdminController::class, 'tanggungan']);

    Route::get('/suratbebas', [App\Http\Controllers\AdminController::class, 'suratbebas'])->name('admin.suratbebas');
    Route::get('/suratbebas/setuju/{id}', [App\Http\Controllers\AdminController::class, 'suratbebasSetuju'])->name('admin.suratbebas.setuju');
}) ;