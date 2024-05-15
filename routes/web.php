<?php

use App\Http\Controllers\catatanController;
use App\Http\Controllers\SuperadminController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [catatanController::class, 'index'])->name('login');
    Route::post('/login', [catatanController::class, 'login'])->name('login');
});

Route::get('/home',function(){
    return redirect('/dashboard');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [SuperadminController::class, 'index'])->name('dashboard');
    Route::get('/logout', [catatanController::class, 'logout'])->name('logout');
});


Route::get('/tambahAkun', function () {
    return view('tambahAkun');
})->name('tambahAkun');

Route::get('/pencatatan', function () {
    return view('pencatatan');
})->name('pencatatan');



