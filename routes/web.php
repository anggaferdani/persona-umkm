<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BrandPersonalityAakerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KuesionerController;

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
Route::get('/', function () {return view('NewPages.Opening');});
Route::get('/register', function () {return view('NewPages.Registrasi');});
Route::get('/otp', function () {return view('NewPages.Otp');});
Route::get('/welcome', function () {return view('NewPages.SelamatDatang');});
Route::get('/kuisioner', function () {return view('NewPages.IsiKuisioner');});
Route::get('/hasil', function () {return view('NewPages.Hasil');});
Route::get('/beranda', function () {return view('NewPages.Beranda');});
Route::get('/marketer', function () {return view('NewPages.Marketer');});
Route::get('/marketerdetail', function () {return view('NewPages.MarketerDetail');});
Route::get('/profile', function () {return view('NewPages.Profile');});
Route::get('/lupapassword', function () {return view('NewPages.LupaPassword');});

// MARKETER
Route::get('/hasil-umkm', function () {return view('Marketer.Hasil');});
Route::get('/umkm', function () {return view('Marketer.Umkm');});
Route::get('/detail-umkm', function () {return view('Marketer.DetailUmkm');});

Route::get('/brand-personality-aaker', [BrandPersonalityAakerController::class, 'index'])->name('brand-personality-aaker');

Route::middleware(['web', 'disableBackButton'])->group(function(){
    Route::middleware(['authenticated'])->group(function(){
        Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
        Route::post('/post-login', [AuthenticationController::class, 'postLogin'])->name('post-login');
    });
    
    Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
});

Route::prefix('superadmin')->name('superadmin.')->group(function(){
    Route::middleware(['auth:web', 'disableBackButton', 'superadmin'])->group(function(){
        Route::get('/dashboard', function(){ return view('pages.dashboard'); })->name('dashboard');
        Route::get('/kuesioner', [KuesionerController::class, 'index'])->name('kuesioner');
        Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
    });
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['auth:web', 'disableBackButton', 'admin'])->group(function(){
        Route::get('/dashboard', function(){ return view('pages.dashboard'); })->name('dashboard');
    });
});