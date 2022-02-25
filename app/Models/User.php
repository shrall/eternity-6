<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'eternite1',
        'flour',
        'egg',
        'meat',
        'oil',
        'iron',
        'wood',
        'bread',
        'cloth',
        'bakpao',
        'omelette',
        'steak',
        'sword',
        'armor',
        'furniture',
        'sail',
        'ration',
        'coal',
        'cannon',
        'cannonball',
        'coal_c',
        'cannon_c',
        'cannonball_c',
        'news6',
        'luckydraw',
        'ship1',
        'ship2',
        'ship3',
        'ship4',
        'ship5',
        'ship6',
        'auction',
        'auction_c',
        'auction_q',
        'escape',
        'eternite2',
        'easy',
        'easy1',
        'easy2',
        'easy3',
        'easy4',
        'easy5',
        'easy6',
        'easy7',
        'easy8',
        'easy9',
        'easy10',
        'easy1_c',
        'easy2_c',
        'easy3_c',
        'easy4_c',
        'easy5_c',
        'easy6_c',
        'easy7_c',
        'easy8_c',
        'easy9_c',
        'easy10_c',
        'medium',
        'medium1',
        'medium2',
        'medium3',
        'medium4',
        'medium5',
        'medium6',
        'medium1_c',
        'medium2_c',
        'medium3_c',
        'medium4_c',
        'medium5_c',
        'medium6_c',
        'hard',
        'hard1',
        'hard1_c',
        'map',
        'map1',
        'map2',
        'map3',
        'map4',
        'map5',
        'map6',
        'map7',
        'map8',
        'map9',
        'map10',
        'map11',
        'map12',
        'map13',
        'map14',
        'map15',
        'map16',
        'map17',
        'map18',
        'map19',
        'map20',
        'map_type',
        'question_pack',
        'referral_code',
        'referral_answer',
        'referral',
        'timestwo',
        'teleport',
        'freepass',
        'magnet',
        'dice1',
        'dice2',
        'dice3',
        'dice4',
        'dice5',
        'dice6',
        'x',
        'y',
        'chl1',
        'chl2',
        'chl3',
        'safe',
        'slide',
        'circuit',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function period()
    {
        return $this->belongsTo(Period::class, 'period_id', 'id');
    }
    public function logs()
    {
        return $this->hasMany(Log::class, 'user_id', 'id');
    }

    public function isPlayer()
    {
        if ($this->role == 0) {
            return true;
        }
        return false;
    }

    public function isAdmin()
    {
        if ($this->role == 1) {
            return true;
        }
        return false;
    }
}
