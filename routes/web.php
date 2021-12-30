<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/rally_trading/index', [HomeController::class, 'rally_trading_index'])->name('rally_trading_index');
Route::get('/rally_trading/rally', [HomeController::class, 'rally_trading_rally'])->name('rally_trading_rally');
Route::get('/rally_trading/trading/market', [HomeController::class, 'rally_trading_trading_market'])->name('rally_trading_trading_market');
Route::get('/rally_trading/trading/lucky', [HomeController::class, 'rally_trading_trading_lucky'])->name('rally_trading_trading_lucky');
Route::get('/rally_trading/trading/auction', [HomeController::class, 'rally_trading_trading_auction'])->name('rally_trading_trading_auction');
Route::get('/rally_trading/trading/resource', [HomeController::class, 'rally_trading_trading_resource'])->name('rally_trading_trading_resource');
