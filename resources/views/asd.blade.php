
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
                'eternite1' => $user->eternite1 + $eternite
            ]);
            return redirect()->route('rally_trading_trading_market')->with('Message', 'Item Sold');
