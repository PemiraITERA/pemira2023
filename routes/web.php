<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\DummyController;
use App\Http\Controllers\Admin\AdminCMSController;
use App\Http\Controllers\Admin\AdminCapresController;

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
// Route::get('/index', [AdminCapresController::class, 'index']);
// Route::get('/create', [AdminCapresController::class, 'create']);
// Route::get('/read/{id}', [AdminCapresController::class, 'show']);
// Route::get('/update/{id}', [AdminCapresController::class, 'edit']);
// Route::get('/update/{id}', [AdminCapresController::class, 'destroy']);
// Route::post('/store', [AdminCapresController::class, 'store']);

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
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware(['admin'])->name('admin.')->prefix('admin')->group(function () {
        Route::resource('dashboard', AdminCMSController::class);
        Route::resource('capres', AdminCapresController::class);
        Route::resource('cms', AdminCMSController::class);
        });
});
