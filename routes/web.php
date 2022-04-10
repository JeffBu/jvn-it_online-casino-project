<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BaccaratGame;
use App\Http\Controllers\BaccaratGameController;
use App\Http\Controllers\BaccaratGameResultController;
use Illuminate\Support\Facades\Auth;
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
Route::get('get-current-room', [HomeController::class, 'getCurrentGame'])->name('get-current-game');

Route::get('/baccarat', [HomeController::class, 'baccaratGame']);
Route::get('/admin-baccarat', [HomeController::class, 'adminBaccarat']);


Route::post('update-game-status', [BaccaratGameController::class, 'updateStatus'])->name('update-game-status');
Route::post('update-game-result', [BaccaratGameResultController::class, 'updateGameResult'])->name('update-game-result');
Route::post('get-result', [BaccaratGameResultController::class, 'getGameResult'])->name('get-result');

Route::resource('/baccarat-game-room', BaccaratGameController::class);
Route::resource('/baccarat-games', BaccaratGameController::class);
Route::resource('/baccarat-game-result', BaccaratGameResultController::class);
