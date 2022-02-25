<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $users = User::where('role', 0)->get();
        return view('admin.user.index', compact('users'));
    }
    public function escape()
    {
        $users = User::where('role', 0)->get();
        return view('admin.user.escape', compact('users'));
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
        if ($request->escape != null) {
            $users = User::where('role', 0)->get();
            foreach ($users as $user) {
                $user->update([
                    'escape' => $request['escape_' . $user->id] ?? 0,
                ]);
            };
            return redirect()->route('admin.user.escape');
        }
        $users = User::where('role', 0)->get();
        foreach ($users as $user) {
            if ($request['random_' . $user->id] == 1) {
                $array = [1, 0, 0, 0, 0, 0, 0];
            } else if ($request['random_' . $user->id] == 2) {
                $array = [1, 1, 0, 0, 0, 0, 0];
            } else if ($request['random_' . $user->id] == 3) {
                $array = [1, 1, 1, 0, 0, 0, 0];
            } else if ($request['random_' . $user->id] == 4) {
                $array = [1, 1, 1, 1, 0, 0, 0];
            } else if ($request['random_' . $user->id] == 5) {
                $array = [1, 1, 1, 1, 1, 0, 0];
            } else if ($request['random_' . $user->id] == 6) {
                $array = [1, 1, 1, 1, 1, 1, 0];
            } else if ($request['random_' . $user->id] == 7) {
                $array = [1, 1, 1, 1, 1, 1, 1];
            } else {
                $array = [0, 0, 0, 0, 0, 0, 0];
            }
            shuffle($array);
            $flour = $array[0];
            $egg = $array[1];
            $meat = $array[2];
            $oil = $array[3];
            $iron = $array[4];
            $wood = $array[5];
            $cloth = $array[6];
            $user->update([
                'flour' => $user->flour + $flour,
                'egg' => $user->egg + $egg,
                'meat' => $user->meat + $meat,
                'oil' => $user->oil + $oil,
                'iron' => $user->iron + $iron,
                'wood' => $user->wood + $wood,
                'cloth' => $user->cloth + $cloth,
            ]);
            if ($array != [0, 0, 0, 0, 0, 0, 0]) {
                Log::create([
                    'amount' => 0,
                    'before' => $user->eternite1,
                    'after' => $user->eternite1,
                    'math' => 0,
                    'description' => 'Added Random Items',
                    'user_id' => $user->id,
                    'period' => $user->period->name,
                ]);
            }
        };
        return redirect()->route('admin.user.index');
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
        if ($request->math == 99) {
            if ($request->random == 1) {
                $array = [1, 0, 0, 0, 0, 0, 0];
            } else if ($request->random == 2) {
                $array = [1, 1, 0, 0, 0, 0, 0];
            } else if ($request->random == 3) {
                $array = [1, 1, 1, 0, 0, 0, 0];
            } else if ($request->random == 4) {
                $array = [1, 1, 1, 1, 0, 0, 0];
            } else if ($request->random == 5) {
                $array = [1, 1, 1, 1, 1, 0, 0];
            } else if ($request->random == 6) {
                $array = [1, 1, 1, 1, 1, 1, 0];
            } else if ($request->random == 7) {
                $array = [1, 1, 1, 1, 1, 1, 1];
            }
            shuffle($array);
            $flour = $array[0];
            $egg = $array[1];
            $meat = $array[2];
            $oil = $array[3];
            $iron = $array[4];
            $wood = $array[5];
            $cloth = $array[6];
            $user->update([
                'flour' => $user->flour + $flour,
                'egg' => $user->egg + $egg,
                'meat' => $user->meat + $meat,
                'oil' => $user->oil + $oil,
                'iron' => $user->iron + $iron,
                'wood' => $user->wood + $wood,
                'cloth' => $user->cloth + $cloth,
            ]);
        } else if ($request->math == 55) {
            $map = $request->map1 + $request->map2 + $request->map3 + $request->map4 + $request->map5 + $request->map6 + $request->map7 + $request->map8 + $request->map9 + $request->map10 + $request->map11 + $request->map12 + $request->map13 + $request->map14 + $request->map15 + $request->map16 + $request->map17 + $request->map18 + $request->map19 + $request->map20;
            $user->update([
                'eternite2' => $user->eternite2 + $request->eternite,
                'map' => $map,
                'map1' => $request->map1,
                'map2' => $request->map2,
                'map3' => $request->map3,
                'map4' => $request->map4,
                'map5' => $request->map5,
                'map6' => $request->map6,
                'map7' => $request->map7,
                'map8' => $request->map8,
                'map9' => $request->map9,
                'map10' => $request->map10,
                'map11' => $request->map11,
                'map12' => $request->map12,
                'map13' => $request->map13,
                'map14' => $request->map14,
                'map15' => $request->map15,
                'map16' => $request->map16,
                'map17' => $request->map17,
                'map18' => $request->map18,
                'map19' => $request->map19,
                'map20' => $request->map20,
                'easy' => $request->easy,
                'medium' => $request->medium,
                'hard' => $request->hard,
                'chl1' => $request->chl1,
                'chl2' => $request->chl2,
                'chl3' => $request->chl3,
            ]);
            return redirect()->route('admin.escape');
        } else {
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
