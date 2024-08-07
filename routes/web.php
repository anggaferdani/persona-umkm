<?php

use App\Http\Controllers\AIController;
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
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\MarketerController;

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
    
        Route::name('umkm.')->group(function() {
            Route::get('/detail-produk', [DetailProdukController::class, 'detailProduk'])->name('detail-produk');
            Route::post('/detail-produk/store', [DetailProdukController::class, 'store'])->name('detail-produk.store');
            Route::put('/detail-produk/update/{id}', [DetailProdukController::class, 'update'])->name('detail-produk.update');
            Route::get('/ai', [AIController::class, 'ai'])->name('ai');
            Route::get('/ai-generate-text', [AIController::class, 'generateText'])->name('ai.generate-text');
            Route::post('/ai-generate-text/store', [AIController::class, 'generateTextStore'])->name('ai.generate-text.store');
            Route::get('/ai-generate-text/histories', [AIController::class, 'generateTextHistories'])->name('ai.generate-text.histories');
            Route::get('/ai-generate-image', [AIController::class, 'generateImage'])->name('ai.generate-image');
            Route::post('/ai-generate-image/store', [AIController::class, 'generateImageStore'])->name('ai.generate-image.store');
            Route::get('/ai-generate-image/histories', [AIController::class, 'generateImageHistories'])->name('ai.generate-image.histories');
            Route::get('/ai-generate-tag', [AIController::class, 'generateTag'])->name('ai.generate-tag');
            Route::post('/ai-generate-tag/store', [AIController::class, 'generateTagStore'])->name('ai.generate-tag.store');
            Route::get('/ai-generate-tag/histories', [AIController::class, 'generateTagHistories'])->name('ai.generate-tag.histories');
            Route::get('/calendarific', [AIController::class, 'calendarific'])->name('calendarific');
        });
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
        Route::resource('/user', UserController::class);
        Route::resource('/marketer', MarketerController::class);
    });
});


Route::get('/dw-cv/{file}', [PersonalityController::class, 'downloadcv'])->name('downloadcv');
Route::get('/dw-porto/{file}', [PersonalityController::class, 'downloadporto'])->name('downloadporto');
Route::get('/dw-contoh/{file}', [PersonalityController::class, 'downloadcontoh'])->name('downloadcontoh');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
