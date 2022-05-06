<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('frontpage');

Route::prefix('player')->group(function () {
    Route::get('/', [PlayerController::class, 'index'])->name('player-home')->middleware('2fa');
});

//User-related routes
Route::post('player-registration', [UserController::class, 'playerRegistration'])->name('player-registration');
Route::get('2fa', [App\Http\Controllers\TwoFAController::class, 'index'])->name('2fa.index');
Route::post('2fa', [App\Http\Controllers\TwoFAController::class, 'store'])->name('2fa.post');
Route::get('2fa/reset', [App\Http\Controllers\TwoFAController::class, 'resend'])->name('2fa.resend');



Route::get('get-current-room', [HomeController::class, 'getCurrentGame'])->name('get-current-game');


//=============================for tests=============================
Route::get('/baccarat', [HomeController::class, 'baccaratGame']);
Route::get('/sabong', [HomeController::class, 'sabongGame']);
Route::get('/admin-baccarat', [HomeController::class, 'adminBaccarat']);
Route::get('/admin-sabong', [HomeController::class, 'adminSabong']);
Route::get('/admin-dashboard', [HomeController::class, 'adminDashboard']);
Route::get('/coins-wallet', [HomeController::class, 'coinsWallet']);
Route::get('/dashboard', [HomeController::class, 'dashboardPage']);
Route::get('/login', [HomeController::class, 'loginPage']);
Route::get('/register', [HomeController::class, 'registerPage']);
//=============================for tests=============================

Route::post('update-game-status', [BaccaratGameController::class, 'updateStatus'])->name('update-game-status');
Route::post('update-game-result', [BaccaratGameResultController::class, 'updateGameResult'])->name('update-game-result');
Route::post('get-result', [BaccaratGameResultController::class, 'getGameResult'])->name('get-result');

Route::resource('/baccarat-game-room', BaccaratGameController::class);
Route::resource('/baccarat-games', BaccaratGameController::class);
Route::resource('/baccarat-game-result', BaccaratGameResultController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
