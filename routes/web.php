<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\PersonalityController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BrandPersonalityAakerController;

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
// Route::get('/', function () {return view('NewPages.Opening');});
// Route::get('/register', function () {return view('NewPages.Registrasi');});
Route::middleware(['user', 'auth:web', 'PreventBack'])->group(function (){
    Route::get('/welcome', [PersonalityController::class, 'welcome'])->name('user.welcome');
    Route::get('/kuisioner', [PersonalityController::class, 'kuisioner'])->name('user.kuisioner');
    Route::post('/kuisioner/store', [PersonalityController::class, 'postkuisioner'])->name('user.postkuisioner');
    Route::get('/hasil/{id}',  [PersonalityController::class, 'hasil'])->name('user.hasil');
    Route::get('/beranda', [PersonalityController::class, 'beranda'])->name('user.beranda');
    Route::post('/level-umkm', [PersonalityController::class, 'levelumkm'])->name('user.level');
    Route::get('/marketer', function () {return view('NewPages.Marketer');});
    Route::get('/marketerdetail', function () {return view('NewPages.MarketerDetail');});
    Route::get('/profile', function () {return view('NewPages.Profile');});

    // MARKETER
    Route::get('/hasil-umkm', function () {return view('Marketer.Hasil');});
    Route::get('/umkm', function () {return view('Marketer.Umkm');});
    Route::get('/detail-umkm', function () {return view('Marketer.DetailUmkm');});

    Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
});
// Route::get('/lupapassword', function () {return view('NewPages.LupaPassword');});

Route::get('/brand-personality-aaker', [BrandPersonalityAakerController::class, 'index'])->name('brand-personality-aaker');

Route::get('/', [LoginController::class, 'index'])->name('user.login');
Route::post('/postlogin', [LoginController::class, 'afterlogin'])->name('user.postlogin');
Route::get('/register', [LoginController::class, 'register'])->name('user.register');
Route::post('/post-register', [LoginController::class, 'postregister'])->name('user.postregister');
Route::get('/reset-password', [LoginController::class, 'resetpassword'])->name('user.resetpassword');
Route::get('/otp/{id}',  [LoginController::class, 'otp'])->name('user.otp');
Route::post('/otp/submit/{id}',  [LoginController::class, 'otpsubmit'])->name('user.otpsubmit');
Route::post('/otp/resent/{id}',  [LoginController::class, 'otpresent'])->name('user.otpresent');

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