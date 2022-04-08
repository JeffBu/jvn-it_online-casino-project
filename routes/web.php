<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BaccaratGame;
use App\Http\Controllers\BaccaratGameController;
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

Route::resource('/baccarat-game-room', BaccaratGameController::class);
