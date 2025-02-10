<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FindLocationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);

Route::middleware(['auth', 'userAccess:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);
});

Route::get('/location', [FindLocationController::class, 'index']);

Route::get('/logout', [LoginController::class, 'logout']);
