<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
})->name('home');

Auth::routes();

Route::group(['middleware' => ['player']], function () {
    Route::get('/rally_trading/index', [HomeController::class, 'rally_trading_index'])->name('rally_trading_index');
    Route::get('/rally_trading/rally', [HomeController::class, 'rally_trading_rally'])->name('rally_trading_rally');
    Route::get('/rally_trading/trading/market', [HomeController::class, 'rally_trading_trading_market'])->name('rally_trading_trading_market');
    Route::get('/rally_trading/trading/exchange', [HomeController::class, 'rally_trading_trading_exchange'])->name('rally_trading_trading_exchange');
    Route::get('/rally_trading/trading/lucky', [HomeController::class, 'rally_trading_trading_lucky'])->name('rally_trading_trading_lucky');
    Route::get('/rally_trading/trading/auction', [HomeController::class, 'rally_trading_trading_auction'])->name('rally_trading_trading_auction');
    Route::get('/rally_trading/trading/resource', [HomeController::class, 'rally_trading_trading_resource'])->name('rally_trading_trading_resource');
    Route::post('/rally_trading/craft', [UserController::class, 'craft'])->name('rally_trading_craft');
    Route::post('/rally_trading/upgrade_ship', [UserController::class, 'upgrade_ship'])->name('rally_trading_upgrade_ship');
    Route::post('/rally_trading/sellmarket', [UserController::class, 'sell_market'])->name('rally_trading_sell_market');
    Route::post('/rally_trading/getlucky', [UserController::class, 'get_lucky'])->name('rally_trading_get_lucky');
});
