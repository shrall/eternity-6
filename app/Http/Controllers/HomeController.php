<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function rally_trading_index(){
        return view('user.rally_trading.index');
    }

    public function rally_trading_rally(){
        return view('user.rally_trading.rally');
    }

    public function rally_trading_trading_market(){
        return view('user.rally_trading.trading_market');
    }

    public function rally_trading_trading_lucky(){
        return view('user.rally_trading.trading_lucky');
    }

    public function rally_trading_trading_auction(){
        return view('user.rally_trading.trading_auction');
    }

    public function rally_trading_trading_resource(){
        return view('user.rally_trading.trading_resource');
    }
}
