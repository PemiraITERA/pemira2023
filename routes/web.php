<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\DummyController;
use App\Http\Controllers\Admin\AdminCMSController;
use App\Http\Controllers\Admin\AdminDokumentasiController;
use App\Http\Controllers\Admin\AdminCapresController;
use App\Http\Controllers\Admin\AdminProgramStudiController;
use App\Http\Controllers\Client\HomeClientController;
use App\Http\Controllers\Client\ClientCapresmaController;

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

// Route::get('/', function () {
//     return view('client/index');
// });
// Route::get('/index', [AdminCapresController::class, 'index']);
// Route::get('/create', [AdminCapresController::class, 'create']);
// Route::get('/read/{id}', [AdminCapresController::class, 'show']);
// Route::get('/update/{id}', [AdminCapresController::class, 'edit']);
// Route::get('/update/{id}', [AdminCapresController::class, 'destroy']);
// Route::post('/store', [AdminCapresController::class, 'store']);

Route::get('/', [HomeClientController::class, 'index'])->name('beranda');
Route::controller(ClientCapresmaController::class)->name('capresma.')->prefix('capresma')->group(function () {
    Route::get('/view', 'index');
    Route::get('/view/{nama_capresma}', 'show');
});
// Route::controller(ClientDokumentasiCapresmaController::class)->name('capresma.')->prefix('capresma')->group(function () {
//     Route::get('/{view}', 'index');
//     Route::get('/{capresma}/{nama_capresma}', 'show');
// });
// Route::controller(ClientLokasiPemilihanCapresmaController::class)->name('capresma.')->prefix('capresma')->group(function () {
//     Route::get('/{view}', 'index');
//     Route::get('/{capresma}/{nama_capresma}', 'show');
// });

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
        Route::resource('dokumentasi', AdminDokumentasiController::class);
        Route::resource('prodi', AdminProgramStudiController::class);
        Route::resource('cms', AdminCMSController::class);
        });
});
