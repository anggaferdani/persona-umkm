<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Livewire\Customers\Customer;
use App\Livewire\Kuesioners\Kuesioner;
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

// Route::get('/lupapassword', function () {return view('NewPages.LupaPassword');});



Route::get('/brand-personality-aaker', [BrandPersonalityAakerController::class, 'index'])->name('brand-personality-aaker');

Route::get('/', [LoginController::class, 'index'])->name('user.login');
Route::post('/postlogin', [LoginController::class, 'afterlogin'])->name('user.postlogin');
Route::get('/reset-password', [LoginController::class, 'resetpassword'])->name('user.resetpassword');
Route::get('/register', [LoginController::class, 'registerselect'])->name('user.registerselect');
Route::post('/post-password', [LoginController::class, 'postresetpassword'])->name('postresetpassword');
Route::get('/forgot-password/{token}', [LoginController::class, 'mailreset'])->name('mailreset');
Route::post('/forgot-password', [LoginController::class, 'aftermailreset'])->name('aftermailreset.user');



Route::prefix('umkm')->group(function(){
    Route::get('/register', [LoginController::class, 'register'])->name('user.register');
    Route::post('/post-register', [LoginController::class, 'postregister'])->name('user.postregister');
    Route::get('/otp/{id}',  [LoginController::class, 'otp'])->name('user.otp');
    Route::post('/otp/submit/{id}',  [LoginController::class, 'otpsubmit'])->name('user.otpsubmit');
    Route::post('/otp/resent/{id}',  [LoginController::class, 'otpresent'])->name('user.otpresent');

    Route::middleware(['user', 'auth:web', 'disableBackButton'])->group(function (){
        Route::get('/welcome', [PersonalityController::class, 'welcome'])->name('user.welcome');
        Route::get('/kuisioner', [PersonalityController::class, 'kuisioner'])->name('user.kuisioner');
        Route::post('/kuisioner/store', [PersonalityController::class, 'postkuisioner'])->name('user.postkuisioner');
        Route::get('/hasil/{id}',  [PersonalityController::class, 'hasil'])->name('user.hasil');
        Route::get('/beranda', [PersonalityController::class, 'beranda'])->name('user.beranda');
        Route::post('/level-umkm', [PersonalityController::class, 'levelumkm'])->name('user.level');
        Route::post('/strategi-digital', [PersonalityController::class, 'strategi'])->name('user.strategi');
        Route::get('/marketer', [PersonalityController::class, 'marketer'])->name('user.marketer');
        Route::get('/marketerdetail/{id}', [PersonalityController::class, 'marketerdetail']);
        Route::get('/profile', [PersonalityController::class, 'profil']);
        Route::post('/profile-submit', [PersonalityController::class, 'profilsubmit']);
    
        // MARKETER
        // Route::get('/umkm', function () {return view('Marketer.Umkm');});
        // Route::get('/detail-umkm', function () {return view('Marketer.DetailUmkm');});
    
        
    });
});

Route::prefix('marketer')->group(function(){
    Route::get('/register', [LoginController::class, 'marketerregister'])->name('marketer.register');
    Route::post('/post-register', [LoginController::class, 'marketerpostregister'])->name('marketer.postregister');
    Route::get('/otp/{id}',  [LoginController::class, 'marketerotp'])->name('marketer.otp');
    Route::post('/otp/submit/{id}',  [LoginController::class, 'marketerotpsubmit'])->name('marketer.otpsubmit');
    Route::post('/otp/resent/{id}',  [LoginController::class, 'marketerotpresent'])->name('marketer.otpresent');

    Route::middleware(['marketer', 'auth:web', 'disableBackButton'])->group(function (){
        Route::get('/welcome', [PersonalityController::class, 'welcome'])->name('user.welcome');
        Route::get('/kuisioner', [PersonalityController::class, 'kuisioner'])->name('user.kuisioner');
        Route::post('/kuisioner/store', [PersonalityController::class, 'postkuisioner'])->name('user.postkuisioner');
        Route::get('/hasil/{id}',  [PersonalityController::class, 'hasil'])->name('user.hasil');
        Route::get('/beranda', [PersonalityController::class, 'marketerberanda'])->name('marketer.beranda');
        Route::post('/level-umkm', [PersonalityController::class, 'levelumkm'])->name('user.level');
        Route::get('/profile',[PersonalityController::class, 'profil']);
        Route::post('/profile-submit', [PersonalityController::class, 'profilsubmit']);
    
        // MARKETER
        // Route::get('/hasil-umkm', function () {return view('Marketer.Hasil');});
        Route::get('/umkm',[PersonalityController::class, 'listumkm']);
        Route::get('/detail-umkm/{id}', [PersonalityController::class, 'detailumkm']);
    });
});


Route::middleware(['web', 'disableBackButton'])->group(function(){
        Route::get('/login', [LoginController::class, 'login'])->name('login');
        Route::post('/post-login', [LoginController::class, 'postLogin'])->name('post-login');
    
});

Route::prefix('superadmin')->name('superadmin.')->group(function(){
    Route::middleware(['auth:web', 'disableBackButton', 'superadmin'])->group(function(){
        Route::get('/dashboard', function(){ return view('pages.dashboard'); })->name('dashboard');
        Route::get('/kuesioner', Kuesioner::class)->name('kuesioner');
        Route::get('/customer', Customer::class )->name('customer');
    });
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['auth:web', 'disableBackButton', 'admin'])->group(function(){
        Route::get('/dashboard', function(){ return view('pages.dashboard'); })->name('dashboard');
        Route::get('/umkm', [UserController::class, 'index'])->name('user');
        Route::get('/marketer', [UserController::class, 'indexmarketer'])->name('userm');
    });
});


Route::get('/dw-cv/{file}', [PersonalityController::class, 'downloadcv'])->name('downloadcv');
Route::get('/dw-porto/{file}', [PersonalityController::class, 'downloadporto'])->name('downloadporto');
Route::get('/dw-contoh/{file}', [PersonalityController::class, 'downloadcontoh'])->name('downloadcontoh');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
