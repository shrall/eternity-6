<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function rally_trading_index()
    {
        return view('user.rally_trading.index');
    }

    public function rally_trading_rally()
    {
        return view('user.rally_trading.rally');
    }

    public function rally_trading_trading_market()
    {
        if (Auth::user()->period->name != 2 && Auth::user()->period->name != 4 && Auth::user()->period->name != 6 && Auth::user()->period->name != 8 && Auth::user()->period->name != 10 && Auth::user()->period->name != 12) {
            return redirect()->back()->with('Message', 'Access Denied');
        }
        return view('user.rally_trading.trading_market');
    }

    public function rally_trading_trading_exchange()
    {
        if (Auth::user()->period->name != 2 && Auth::user()->period->name != 4 && Auth::user()->period->name != 6 && Auth::user()->period->name != 8 && Auth::user()->period->name != 10 && Auth::user()->period->name != 12) {
            return redirect()->back()->with('Message', 'Access Denied');
        }
        return view('user.rally_trading.trading_exchange');
    }

    public function rally_trading_trading_lucky()
    {
        if (Auth::user()->period->name != 2 && Auth::user()->period->name != 4 && Auth::user()->period->name != 6 && Auth::user()->period->name != 8 && Auth::user()->period->name != 10 && Auth::user()->period->name != 12) {
            return redirect()->back()->with('Message', 'Access Denied');
        }
        return view('user.rally_trading.trading_lucky');
    }

    public function rally_trading_trading_auction()
    {
        if (Auth::user()->period->name != 2 && Auth::user()->period->name != 4 && Auth::user()->period->name != 6 && Auth::user()->period->name != 8 && Auth::user()->period->name != 10 && Auth::user()->period->name != 12) {
            return redirect()->back()->with('Message', 'Access Denied');
        }
        if (Auth::user()->auction != 1) {
            return redirect()->back();
        }
        return view('user.rally_trading.trading_auction');
    }

    public function rally_trading_trading_resource()
    {
        if (Auth::user()->period->name != 2 && Auth::user()->period->name != 4 && Auth::user()->period->name != 6 && Auth::user()->period->name != 8 && Auth::user()->period->name != 10 && Auth::user()->period->name != 12) {
            return redirect()->back()->with('Message', 'Access Denied');
        }
        return view('user.rally_trading.trading_resource');
    }

    public function escape_index()
    {
        return view('user.escape.index');
    }
}
