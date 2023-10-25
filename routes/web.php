<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\DummyController;
use App\Http\Controllers\Admin\AdminCMSController;

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
    return view('index');
});

Auth::routes(['register' => false,
'reset' => false,
'verify' => false,
'login' => false,
'logout' => false,]);

Route::get('/admin', [LoginController::class, 'showLoginForm'])->name('admin');
Route::post('/admin', [LoginController::class, 'login']);

Route::get('/login', [DummyController::class, 'index'])->name('login');
Route::post('/login', [DummyController::class, 'login']);

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
    Route::get('/admin/cms', function () {
        return view('layouts.admin.app');
        });

    Route::middleware(['admin'])->name('admin.')->prefix('admin')->group(function () {
        Route::resource('dashboard', AdminCMSController::class);
        });
    });