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
        'news6',
        'luckydraw',
        'ship1',
        'ship2',
        'ship3',
        'ship4',
        'ship5',
        'ship6',
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
