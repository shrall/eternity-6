<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if ($user->ship1 == 5) {
            $request->shipa = 0;
        }
        if ($user->ship2 == 5) {
            $request->shipb = 0;
        }
        if ($user->ship3 == 5) {
            $request->shipc = 0;
        }
        if ($user->ship4 == 5) {
            $request->shipd = 0;
        }
        if ($user->ship5 == 5) {
            $request->shipe = 0;
        }
        if ($user->ship6 == 5) {
            $request->shipf = 0;
        }
        if ($user->ship1 == 0 && $request->math == 0) {
            $request->shipa = 0;
        }
        if ($user->ship2 == 0 && $request->math == 0) {
            $request->shipb = 0;
        }
        if ($user->ship3 == 0 && $request->math == 0) {
            $request->shipc = 0;
        }
        if ($user->ship4 == 0 && $request->math == 0) {
            $request->shipd = 0;
        }
        if ($user->ship5 == 0 && $request->math == 0) {
            $request->shipe = 0;
        }
        if ($user->ship6 == 0 && $request->math == 0) {
            $request->shipf = 0;
        }
        if ($request->math == 1) {
            $user->update([
                'eternite1' => $user->eternite1 + $request->eternite,
                'flour' => $user->flour + $request->flour,
                'egg' => $user->egg + $request->egg,
                'meat' => $user->meat + $request->meat,
                'oil' => $user->oil + $request->oil,
                'iron' => $user->iron + $request->iron,
                'wood' => $user->wood + $request->wood,
                'cloth' => $user->cloth + $request->cloth,
                'bread' => $user->bread + $request->bread,
                'bakpao' => $user->bakpao + $request->bakpao,
                'omelette' => $user->omelette + $request->omelette,
                'steak' => $user->steak + $request->steak,
                'sword' => $user->sword + $request->sword,
                'furniture' => $user->furniture + $request->furniture,
                'armor' => $user->armor + $request->armor,
                'sail' => $user->sail + $request->sail,
                'ship1' => $user->ship1 + $request->shipa,
                'ship2' => $user->ship2 + $request->shipb,
                'ship3' => $user->ship3 + $request->shipc,
                'ship4' => $user->ship4 + $request->shipd,
                'ship5' => $user->ship5 + $request->shipe,
                'ship6' => $user->ship6 + $request->shipf,
            ]);
        } else {
            $user->update([
                'eternite1' => $user->eternite1 - $request->eternite,
                'flour' => $user->flour - $request->flour,
                'egg' => $user->egg - $request->egg,
                'meat' => $user->meat - $request->meat,
                'oil' => $user->oil - $request->oil,
                'iron' => $user->iron - $request->iron,
                'wood' => $user->wood - $request->wood,
                'cloth' => $user->cloth - $request->cloth,
                'bread' => $user->bread - $request->bread,
                'bakpao' => $user->bakpao - $request->bakpao,
                'omelette' => $user->omelette - $request->omelette,
                'steak' => $user->steak - $request->steak,
                'sword' => $user->sword - $request->sword,
                'furniture' => $user->furniture - $request->furniture,
                'armor' => $user->armor - $request->armor,
                'sail' => $user->sail - $request->sail,
                'ship1' => $user->ship1 - $request->ship1,
                'ship2' => $user->ship2 - $request->ship2,
                'ship3' => $user->ship3 - $request->ship3,
                'ship4' => $user->ship4 - $request->ship4,
                'ship5' => $user->ship5 - $request->ship5,
                'ship6' => $user->ship6 - $request->ship6,
            ]);
        }
        return redirect()->route('admin.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
