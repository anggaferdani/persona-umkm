<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

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
    });
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['auth:web', 'disableBackButton', 'admin'])->group(function(){
        Route::get('/dashboard', function(){ return view('pages.dashboard'); })->name('dashboard');
    });
});