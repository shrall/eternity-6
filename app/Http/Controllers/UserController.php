<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function craft(Request $request)
    {
        $user = User::where('id', Auth::id())->first();
        $flour = $request->bread + $request->bakpao;
        $egg = $request->bread + $request->omelette;
        $meat = $request->bakpao + $request->steak;
        $oil = $request->omelette + $request->steak;
        $iron = $request->sword + $request->furniture + $request->armor;
        $wood = $request->sail + $request->sword + $request->furniture;
        $cloth = $request->sail + $request->armor + $request->furniture;
        if ($flour > $user->flour || $egg > $user->egg || $meat > $user->meat || $oil > $user->oil || $iron > $user->iron || $wood > $user->wood || $cloth > $user->cloth) {
            return redirect()->route('rally_trading_index')->with('Message', 'Crafting Failed');
        }
        $user->update([
            'flour' => $user->flour - $flour,
            'egg' => $user->egg - $egg,
            'meat' => $user->meat - $meat,
            'oil' => $user->oil - $oil,
            'iron' => $user->iron - $iron,
            'wood' => $user->wood - $wood,
            'cloth' => $user->cloth - $cloth,
            'bread' => $user->bread + $request->bread,
            'bakpao' => $user->bakpao + $request->bakpao,
            'omelette' => $user->omelette + $request->omelette,
            'steak' => $user->steak + $request->steak,
            'sword' => $user->sword + $request->sword,
            'armor' => $user->armor + $request->armor,
            'sail' => $user->sail + $request->sail,
            'furniture' => $user->furniture + $request->furniture,
        ]);
        return redirect()->route('rally_trading_index')->with('Message', 'Crafting Successful');
    }

    public function upgrade_ship(Request $request)
    {
        $user = User::where('id', Auth::id())->first();
        $level = 0;
        $suff = true;
        if ($request->ship == 'A') {
            $level = $user->ship1;
        } else if ($request->ship == 'B') {
            $level = $user->ship2;
        } else if ($request->ship == 'C') {
            $level = $user->ship3;
        } else if ($request->ship == 'D') {
            $level = $user->ship4;
        } else if ($request->ship == 'E') {
            $level = $user->ship5;
        } else if ($request->ship == 'F') {
            $level = $user->ship6;
        }
        if ($level == 0 && $user->eternite1 >= 100) {
            $level++;
            $user->update([
                'eternite1' => $user->eternite1 - 100,
            ]);
            Log::create([
                'amount' => 100,
                'before' => $user->eternite1,
                'after' => $user->eternite1 - 100,
                'math' => 1,
                'description' => 'Upgrade Ship Part ' . $request->ship,
                'user_id' => Auth::id(),
                'period' => $user->period->name,
            ]);
        } else if ($level == 1 && $user->eternite1 >= 150) {
            $level++;
            $user->update([
                'eternite1' => $user->eternite1 - 150,
            ]);
            Log::create([
                'amount' => 150,
                'before' => $user->eternite1,
                'after' => $user->eternite1 - 150,
                'math' => 1,
                'description' => 'Upgrade Ship Part ' . $request->ship,
                'user_id' => Auth::id(),
                'period' => $user->period->name,
            ]);
        } else if ($level == 2 && $user->eternite1 >= 300) {
            $level++;
            $user->update([
                'eternite1' => $user->eternite1 - 300,
            ]);
            Log::create([
                'amount' => 300,
                'before' => $user->eternite1,
                'after' => $user->eternite1 - 300,
                'math' => 1,
                'description' => 'Upgrade Ship Part ' . $request->ship,
                'user_id' => Auth::id(),
                'period' => $user->period->name,
            ]);
        } else if ($level == 3 && $user->eternite1 >= 350) {
            $level++;
            Log::create([
                'amount' => 350,
                'before' => $user->eternite1,
                'after' => $user->eternite1 - 350,
                'math' => 1,
                'description' => 'Upgrade Ship Part ' . $request->ship,
                'user_id' => Auth::id(),
                'period' => $user->period->name,
            ]);
            $user->update([
                'eternite1' => $user->eternite1 - 350,
            ]);
        } else if ($level == 4 && $user->eternite1 >= 400) {
            $level++;
            Log::create([
                'amount' => 400,
                'before' => $user->eternite1,
                'after' => $user->eternite1 - 400,
                'math' => 1,
                'description' => 'Upgrade Ship Part ' . $request->ship,
                'user_id' => Auth::id(),
                'period' => $user->period->name,
            ]);
            $user->update([
                'eternite1' => $user->eternite1 - 400,
            ]);
        } else {
            $suff = false;
        }
        if ($request->ship == 'A') {
            $user->update([
                'ship1' => $level
            ]);
        } else if ($request->ship == 'B') {
            $user->update([
                'ship2' => $level
            ]);
        } else if ($request->ship == 'C') {
            $user->update([
                'ship3' => $level
            ]);
        } else if ($request->ship == 'D') {
            $user->update([
                'ship4' => $level
            ]);
        } else if ($request->ship == 'E') {
            $user->update([
                'ship5' => $level
            ]);
        } else if ($request->ship == 'F') {
            $user->update([
                'ship6' => $level
            ]);
        }
        if ($suff) {
            return redirect()->route('rally_trading_index')->with('Message', 'Upgrade Successful');
        } else {
            return redirect()->route('rally_trading_index')->with('Message', 'Upgrade Failed');
        }
    }
    public function sell_market(Request $request)
    {
        if (Auth::user()->period->name == 1 || Auth::user()->period->name == 3 || Auth::user()->period->name == 5 || Auth::user()->period->name == 7 || Auth::user()->period->name == 9 || Auth::user()->period->name == 11) {
            return redirect()->route('rally_trading_index')->with('Message', 'The Trading Menu is Closed');
        }
        $user = User::where('id', Auth::id())->first();
        if ($request->type == 'raw') {
            if ($request->flour > $user->flour || $request->egg > $user->egg || $request->meat > $user->meat || $request->oil > $user->oil || $request->iron > $user->iron || $request->wood > $user->wood || $request->cloth > $user->cloth) {
                return redirect()->route('rally_trading_trading_market')->with('Message', 'Insufficient Items');
            }
            $flour = $request->flour * Auth::user()->period->flour;
            $egg = $request->egg * Auth::user()->period->egg;
            $meat = $request->meat  * Auth::user()->period->meat;
            $oil = $request->oil  * Auth::user()->period->oil;
            $iron = $request->iron  * Auth::user()->period->iron;
            $wood = $request->wood  * Auth::user()->period->wood;
            $cloth = $request->cloth  * Auth::user()->period->cloth;
            $eternite = $flour + $egg + $meat + $oil + $iron + $wood + $cloth;
            Log::create([
                'amount' => $eternite,
                'before' => $user->eternite1,
                'after' => $user->eternite1 + $eternite,
                'math' => 0,
                'description' => 'Sell Raw Items',
                'user_id' => Auth::id(),
                'period' => $user->period->name,
            ]);
            $user->update([
                'flour' => $user->flour - $request->flour,
                'egg' => $user->egg - $request->egg,
                'meat' => $user->meat - $request->meat,
                'oil' => $user->oil - $request->oil,
                'iron' => $user->iron - $request->iron,
                'wood' => $user->wood - $request->wood,
                'cloth' => $user->cloth - $request->cloth,
                'eternite1' => $user->eternite1 + $eternite,
            ]);
            return redirect()->route('rally_trading_trading_market')->with('Message', 'Item Sold');
        } else {
            if ($request->bread > $user->bread || $request->omelette > $user->omelette || $request->steak > $user->steak || $request->bakpao > $user->bakpao || $request->sword > $user->sword || $request->armor > $user->armor || $request->furniture > $user->furniture || $request->sail > $user->sail) {
                return redirect()->route('rally_trading_trading_market')->with('Message', 'Insufficient Items');
            }
            $bread = $request->bread * Auth::user()->period->bread;
            $omelette = $request->omelette * Auth::user()->period->omelette;
            $steak = $request->steak  * Auth::user()->period->steak;
            $bakpao = $request->bakpao  * Auth::user()->period->bakpao;
            $sword = $request->sword  * Auth::user()->period->sword;
            $armor = $request->armor  * Auth::user()->period->armor;
            $furniture = $request->furniture  * Auth::user()->period->furniture;
            $sail = $request->sail  * Auth::user()->period->sail;
            $eternite = $bread + $omelette + $steak + $bakpao + $sword + $armor + $furniture + $sail;
            Log::create([
                'amount' => $eternite,
                'before' => $user->eternite1,
                'after' => $user->eternite1 + $eternite,
                'math' => 0,
                'description' => 'Sell Raw Items',
                'user_id' => Auth::id(),
                'period' => $user->period->name,
            ]);
            $user->update([
                'bread' => $user->bread - $request->bread,
                'omelette' => $user->omelette - $request->omelette,
                'steak' => $user->steak - $request->steak,
                'bakpao' => $user->bakpao - $request->bakpao,
                'sword' => $user->sword - $request->sword,
                'armor' => $user->armor - $request->armor,
                'furniture' => $user->furniture - $request->furniture,
                'sail' => $user->sail - $request->sail,
                'eternite1' => $user->eternite1 + $eternite,
            ]);
            return redirect()->route('rally_trading_trading_market')->with('Message', 'Item Sold');
        }
    }
    public function get_lucky(Request $request)
    {
        if (Auth::user()->period->name == 1 || Auth::user()->period->name == 3 || Auth::user()->period->name == 5 || Auth::user()->period->name == 7 || Auth::user()->period->name == 9 || Auth::user()->period->name == 11) {
            return redirect()->route('rally_trading_index')->with('Message', 'The Trading Menu is Closed');
        }
        $user = User::where('id', Auth::id())->first();
        Log::create([
            'amount' => 125,
            'before' => $user->eternite1,
            'after' => $user->eternite1 - 125,
            'math' => 1,
            'description' => 'Buy Lucky Draw',
            'user_id' => Auth::id(),
            'period' => $user->period->name,
        ]);
        if ($request->data == 1) {
            $user->update([
                'eternite1' => $user->eternite1 + 25,
                'luckydraw' => 1,
            ]);
        } else if ($request->data == 2) {
            $user->update([
                'eternite1' => $user->eternite1 + 50,
                'luckydraw' => 1,
            ]);
        } else if ($request->data == 3) {
            $user->update([
                'eternite1' => $user->eternite1 + 75,
                'luckydraw' => 1,
            ]);
        } else if ($request->data == 4) {
            $user->update([
                'eternite1' => $user->eternite1 - 125,
                'luckydraw' => 1,
                'flour' => $user->flour + 1
            ]);
        } else if ($request->data == 5) {
            $user->update([
                'eternite1' => $user->eternite1 - 125,
                'luckydraw' => 1,
                'egg' => $user->egg + 1
            ]);
        } else if ($request->data == 6) {
            $user->update([
                'eternite1' => $user->eternite1 - 125,
                'luckydraw' => 1,
                'sail' => $user->sail + 1
            ]);
        } else if ($request->data == 7) {
            $user->update([
                'eternite1' => $user->eternite1 - 125,
                'luckydraw' => 1,
                'bakpao' => $user->bakpao + 1
            ]);
        } else if ($request->data == 8) {
            $user->update([
                'eternite1' => $user->eternite1 - 100,
                'luckydraw' => 1,
                'sword' => $user->sword + 1
            ]);
        } else if ($request->data == 9) {
            $user->update([
                'eternite1' => $user->eternite1 - 100,
                'luckydraw' => 1,
                'bakpao' => $user->bakpao + 1
            ]);
        }
        return $request->data;
    }
    public function buy_resource(Request $request)
    {
        if (Auth::user()->period->name == 1 || Auth::user()->period->name == 3 || Auth::user()->period->name == 5 || Auth::user()->period->name == 7 || Auth::user()->period->name == 9 || Auth::user()->period->name == 11) {
            return redirect()->route('rally_trading_index')->with('Message', 'The Trading Menu is Closed');
        }
        $user = User::where('id', Auth::id())->first();
        $cannon = $request->cannon * 1300;
        $cb = $request->cannonball * 200;
        $coal = $request->coal * 35;
        $r = $request->ration * 20;
        if ($user->cannon_c > 0 || $request->cannon > 1) {
            return redirect()->route('rally_trading_trading_resource')->with('Message', "Cannon Has Exceeded Ship's Capacity");
        }
        // if ($user->coal_c >= 10 && $request->coal > 10) {
        //     return redirect()->route('rally_trading_trading_resource')->with('Message', "Coal Has Exceeded Ship's Capacity");
        // }
        // if ($user->cannonball_c >= 30 && $request->cannonball > 30) {
        //     return redirect()->route('rally_trading_trading_resource')->with('Message', "Cannon Ball Has Exceeded Ship's Capacity");
        // }
        $total = $cannon + $cb + $coal + $r;
        if ($total > $user->eternite1) {
            return redirect()->route('rally_trading_trading_resource')->with('Message', 'Insufficient Eternites');
        }
        Log::create([
            'amount' => $total,
            'before' => $user->eternite1,
            'after' => $user->eternite1 - $total,
            'math' => 1,
            'description' => 'Buy Resource Items',
            'user_id' => Auth::id(),
            'period' => $user->period->name,
        ]);
        $user->update([
            'eternite1' => $user->eternite1 - $total,
            'cannon' => $user->cannon + $request->cannon,
            'cannonball' => $user->cannonball + $request->cannonball,
            'coal_c' => $request->coal,
            'cannon_c' => $request->cannon,
            'cannonball_c' => $request->cannonball,
            'coal' => $user->coal + $request->coal,
            'ration' => $user->ration + $request->ration,
        ]);
        return redirect()->route('rally_trading_trading_resource')->with('Message', 'Purchase Successful');
    }
    public function auction_answer(Request $request)
    {

        if (Auth::user()->period->name == 1 || Auth::user()->period->name == 3 || Auth::user()->period->name == 5 || Auth::user()->period->name == 7 || Auth::user()->period->name == 9 || Auth::user()->period->name == 11) {
            return redirect()->route('rally_trading_index')->with('Message', 'The Trading Menu is Closed');
        }
        $user = User::where('id', Auth::id())->first();
        if ($user->auction_c == 3) {
            return redirect()->route('rally_trading_index')->with('Message', 'Submit Failed');
        }
        $user->update([
            'auction_c' => $user->auction_c + 1
        ]);
        if (Auth::user()->auction_q == 1 && strtolower(preg_replace('/\s+/', '', $request->answer)) == 'eternity') {
            $user->update([
                'auction' => 1
            ]);
            return redirect()->back()->with('Message', 'Correct Answer');
        } else if (Auth::user()->auction_q == 2 && strtolower(preg_replace('/\s+/', '', $request->answer)) == 'ciputra') {
            $user->update([
                'auction' => 1
            ]);
            return redirect()->back()->with('Message', 'Correct Answer');
        } else if (Auth::user()->auction_q == 3 && strtolower(preg_replace('/\s+/', '', $request->answer)) == 'inflasi') {
            $user->update([
                'auction' => 1
            ]);
            return redirect()->back()->with('Message', 'Correct Answer');
        } else if (Auth::user()->auction_q == 4 && strtolower(preg_replace('/\s+/', '', $request->answer)) == 'megawati') {
            $user->update([
                'auction' => 1
            ]);
            return redirect()->back()->with('Message', 'Correct Answer');
        } else if (Auth::user()->auction_q == 5 && strtolower(preg_replace('/\s+/', '', $request->answer)) == 'jakarta') {
            $user->update([
                'auction' => 1
            ]);
            return redirect()->back()->with('Message', 'Correct Answer');
        } else if (Auth::user()->auction_q == 6 && strtolower(preg_replace('/\s+/', '', $request->answer)) == 'madagaskar') {
            $user->update([
                'auction' => 1
            ]);
            return redirect()->back()->with('Message', 'Correct Answer');
        } else if (Auth::user()->auction_q == 7 && strtolower(preg_replace('/\s+/', '', $request->answer)) == 'filipina') {
            $user->update([
                'auction' => 1
            ]);
            return redirect()->back()->with('Message', 'Correct Answer');
        } else if (Auth::user()->auction_q == 8 && strtolower(preg_replace('/\s+/', '', $request->answer)) == 'sumatera') {
            $user->update([
                'auction' => 1
            ]);
            return redirect()->back()->with('Message', 'Correct Answer');
        } else if (Auth::user()->auction_q == 9 && strtolower(preg_replace('/\s+/', '', $request->answer)) == 'thailand') {
            $user->update([
                'auction' => 1
            ]);
            return redirect()->back()->with('Message', 'Correct Answer');
        } else if (Auth::user()->auction_q == 10 && strtolower(preg_replace('/\s+/', '', $request->answer)) == 'konvensi') {
            $user->update([
                'auction' => 1
            ]);
            return redirect()->back()->with('Message', 'Correct Answer');
        } else {
            return redirect()->back()->with('Message', 'Wrong Answer');
        }
    }
    public function exchange_item(Request $request)
    {
        if (Auth::user()->period->name == 1 || Auth::user()->period->name == 3 || Auth::user()->period->name == 5 || Auth::user()->period->name == 7 || Auth::user()->period->name == 9 || Auth::user()->period->name == 11) {
            return redirect()->route('rally_trading_index')->with('Message', 'The Trading Menu is Closed');
        }
        if ($request->first_item == $request->second_item) {
            return redirect()->route('rally_trading_trading_exchange')->with('Message', 'Exchange Failed');
        }
        $user = User::where('id', Auth::id())->first();
        if ($user->eternite1 < $request->total_eternites) {
            return redirect()->route('rally_trading_trading_exchange')->with('Message', 'Insufficient Eternites');
        }
        if ($request->first_item == 'wood') {
            if ($user->wood < $request->amount) {
                return redirect()->route('rally_trading_trading_exchange')->with('Message', 'Insufficient Items');
            } else {
                Log::create([
                    'amount' => $request->total_eternites,
                    'before' => $user->eternite1,
                    'after' => $user->eternite1 - $request->total_eternites,
                    'math' => 1,
                    'description' => 'Exchange Item',
                    'user_id' => Auth::id(),
                    'period' => $user->period->name,
                ]);
                if ($request->second_item == 'iron') {
                    $user->update([
                        'wood' => $user->wood - $request->amount,
                        'iron' => $user->iron + $request->amount,
                    ]);
                } else if ($request->second_item == 'cloth') {
                    $user->update([
                        'wood' => $user->wood - $request->amount,
                        'cloth' => $user->cloth + $request->amount,
                    ]);
                }
            }
        } else if ($request->first_item == 'iron') {
            if ($user->iron < $request->amount) {
                return redirect()->route('rally_trading_trading_exchange')->with('Message', 'Insufficient Items');
            } else {
                Log::create([
                    'amount' => $request->total_eternites,
                    'before' => $user->eternite1,
                    'after' => $user->eternite1 - $request->total_eternites,
                    'math' => 1,
                    'description' => 'Exchange Item',
                    'user_id' => Auth::id(),
                    'period' => $user->period->name,
                ]);
                if ($request->second_item == 'wood') {
                    $user->update([
                        'iron' => $user->iron - $request->amount,
                        'wood' => $user->wood + $request->amount,
                    ]);
                } else if ($request->second_item == 'cloth') {
                    $user->update([
                        'iron' => $user->iron - $request->amount,
                        'cloth' => $user->cloth + $request->amount,
                    ]);
                }
            }
        } else if ($request->first_item == 'cloth') {
            if ($user->cloth < $request->amount) {
                return redirect()->route('rally_trading_trading_exchange')->with('Message', 'Insufficient Items');
            } else {
                Log::create([
                    'amount' => $request->total_eternites,
                    'before' => $user->eternite1,
                    'after' => $user->eternite1 - $request->total_eternites,
                    'math' => 1,
                    'description' => 'Exchange Item',
                    'user_id' => Auth::id(),
                    'period' => $user->period->name,
                ]);
                if ($request->second_item == 'wood') {
                    $user->update([
                        'cloth' => $user->cloth - $request->amount,
                        'wood' => $user->wood + $request->amount,
                    ]);
                } else if ($request->second_item == 'iron') {
                    $user->update([
                        'cloth' => $user->cloth - $request->amount,
                        'iron' => $user->iron + $request->amount,
                    ]);
                }
            }
        } else if ($request->first_item == 'egg') {
            if ($user->egg < $request->amount) {
                return redirect()->route('rally_trading_trading_exchange')->with('Message', 'Insufficient Items');
            } else {
                Log::create([
                    'amount' => $request->total_eternites,
                    'before' => $user->eternite1,
                    'after' => $user->eternite1 - $request->total_eternites,
                    'math' => 1,
                    'description' => 'Exchange Item',
                    'user_id' => Auth::id(),
                    'period' => $user->period->name,
                ]);
                if ($request->second_item == 'oil') {
                    $user->update([
                        'egg' => $user->egg - $request->amount,
                        'oil' => $user->oil + $request->amount,
                    ]);
                } else if ($request->second_item == 'meat') {
                    $user->update([
                        'egg' => $user->egg - $request->amount,
                        'meat' => $user->meat + $request->amount,
                    ]);
                } else if ($request->second_item == 'flour') {
                    $user->update([
                        'egg' => $user->egg - $request->amount,
                        'flour' => $user->flour + $request->amount,
                    ]);
                }
            }
        } else if ($request->first_item == 'oil') {
            if ($user->oil < $request->amount) {
                return redirect()->route('rally_trading_trading_exchange')->with('Message', 'Insufficient Items');
            } else {
                Log::create([
                    'amount' => $request->total_eternites,
                    'before' => $user->eternite1,
                    'after' => $user->eternite1 - $request->total_eternites,
                    'math' => 1,
                    'description' => 'Exchange Item',
                    'user_id' => Auth::id(),
                    'period' => $user->period->name,
                ]);
                if ($request->second_item == 'egg') {
                    $user->update([
                        'oil' => $user->oil - $request->amount,
                        'egg' => $user->egg + $request->amount,
                    ]);
                } else if ($request->second_item == 'meat') {
                    $user->update([
                        'oil' => $user->oil - $request->amount,
                        'meat' => $user->meat + $request->amount,
                    ]);
                } else if ($request->second_item == 'flour') {
                    $user->update([
                        'oil' => $user->oil - $request->amount,
                        'flour' => $user->flour + $request->amount,
                    ]);
                }
            }
        } else if ($request->first_item == 'meat') {
            if ($user->meat < $request->amount) {
                return redirect()->route('rally_trading_trading_exchange')->with('Message', 'Insufficient Items');
            } else {
                Log::create([
                    'amount' => $request->total_eternites,
                    'before' => $user->eternite1,
                    'after' => $user->eternite1 - $request->total_eternites,
                    'math' => 1,
                    'description' => 'Exchange Item',
                    'user_id' => Auth::id(),
                    'period' => $user->period->name,
                ]);
                if ($request->second_item == 'egg') {
                    $user->update([
                        'meat' => $user->meat - $request->amount,
                        'egg' => $user->egg + $request->amount,
                    ]);
                } else if ($request->second_item == 'oil') {
                    $user->update([
                        'meat' => $user->meat - $request->amount,
                        'oil' => $user->oil + $request->amount,
                    ]);
                } else if ($request->second_item == 'flour') {
                    $user->update([
                        'meat' => $user->meat - $request->amount,
                        'flour' => $user->flour + $request->amount,
                    ]);
                }
            }
        } else if ($request->first_item == 'flour') {
            if ($user->flour < $request->amount) {
                return redirect()->route('rally_trading_trading_exchange')->with('Message', 'Insufficient Items');
            } else {
                Log::create([
                    'amount' => $request->total_eternites,
                    'before' => $user->eternite1,
                    'after' => $user->eternite1 - $request->total_eternites,
                    'math' => 1,
                    'description' => 'Exchange Item',
                    'user_id' => Auth::id(),
                    'period' => $user->period->name,
                ]);
                if ($request->second_item == 'egg') {
                    $user->update([
                        'flour' => $user->flour - $request->amount,
                        'egg' => $user->egg + $request->amount,
                    ]);
                } else if ($request->second_item == 'oil') {
                    $user->update([
                        'flour' => $user->flour - $request->amount,
                        'oil' => $user->oil + $request->amount,
                    ]);
                } else if ($request->second_item == 'meat') {
                    $user->update([
                        'flour' => $user->flour - $request->amount,
                        'meat' => $user->meat + $request->amount,
                    ]);
                }
            }
        }
        $user->update([
            'eternite1' => $user->eternite1 - $request->total_eternites
        ]);
        return redirect()->route('rally_trading_trading_exchange')->with('Message', 'Exchange Successful');
    }

    public function add_item(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->update([
            'map' => $user->map + 1,
            $request->item => 1
        ]);
        return $user->map;
    }
    public function submit_answer(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->update([
            $request->difficulty . $request->number => $request->answer,
        ]);
    }
}
