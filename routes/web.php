<?php

use App\Http\Controllers\CaracteristiqueController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Users
Route::resource('/users', UserController::class);
Route::get('/users/{id}/download', [UserController::class, 'download']);

// Services
Route::resource('/services', ServiceController::class);
Route::get('/services/{id}/download', [ServiceController::class, 'download']);

// Portfolios
Route::resource('/portfolios', PortfolioController::class);
Route::get('/portfolios/{id}/download', [PortfolioController::class, 'download']);

// Galeries
<<<<<<< HEAD
// Route::resource('/galeries', GalerieController::class);
=======
>>>>>>> a021a20b71a6298fe3f1367271b6aaa46578a1b4
Route::resource("/galeries", GalerieController::class)->parameters(['galeries' => 'galerie']);
Route::get('/galeries/{id}/download', [GalerieController::class, 'download']);

// Caractéristique
Route::resource('/caracteristiques', CaracteristiqueController::class);

Route::get('/caracteristiques/{id}/download', [CaracteristiqueController::class, 'download']);
