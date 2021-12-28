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
}
