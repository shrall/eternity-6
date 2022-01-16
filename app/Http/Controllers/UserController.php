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
        if($flour > $user->flour || $egg > $user->egg || $meat > $user->meat || $oil > $user->oil || $iron > $user->iron || $wood > $user->wood || $cloth > $user->cloth){
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
                'eternite1' => $user->eternite1 - 100
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
                'eternite1' => $user->eternite1 - 150
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
                'eternite1' => $user->eternite1 - 300
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
            $user->update([
                'eternite1' => $user->eternite1 - 350
            ]);
            Log::create([
                'amount' => 350,
                'before' => $user->eternite1,
                'after' => $user->eternite1 - 350,
                'math' => 1,
                'description' => 'Upgrade Ship Part ' . $request->ship,
                'user_id' => Auth::id(),
                'period' => $user->period->name,
            ]);
        } else if ($level == 4 && $user->eternite1 >= 400) {
            $level++;
            $user->update([
                'eternite1' => $user->eternite1 - 400
            ]);
            Log::create([
                'amount' => 400,
                'before' => $user->eternite1,
                'after' => $user->eternite1 - 400,
                'math' => 1,
                'description' => 'Upgrade Ship Part ' . $request->ship,
                'user_id' => Auth::id(),
                'period' => $user->period->name,
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
}