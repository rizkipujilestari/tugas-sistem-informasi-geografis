<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\FindLocationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReligionController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth', 'userAccess:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/religion', [ReligionController::class, 'index']);
    Route::get('/districts', [DistrictController::class, 'index']);
    Route::get('/users', [UserController::class, 'index']);
    
    Route::get('/locations', [LocationController::class, 'index']);
    Route::get('/locations/new', [LocationController::class, 'create']);
    Route::post('/locations', [LocationController::class, 'store']);
});

Route::get('/location', [FindLocationController::class, 'index']);
Route::get('/getlocations', [FindLocationController::class, 'getLocations']);

Route::get('/logout', [LoginController::class, 'logout']);
