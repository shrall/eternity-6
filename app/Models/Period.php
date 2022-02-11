<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name2',
        'news',
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
        'flour_math',
        'egg_math',
        'meat_math',
        'oil_math',
        'iron_math',
        'wood_math',
        'bread_math',
        'cloth_math',
        'bakpao_math',
        'omelette_math',
        'steak_math',
        'sword_math',
        'armor_math',
        'furniture_math',
        'sail_math',
        'flour_change',
        'egg_change',
        'meat_change',
        'oil_change',
        'iron_change',
        'wood_change',
        'bread_change',
        'cloth_change',
        'bakpao_change',
        'omelette_change',
        'steak_change',
        'sword_change',
        'armor_change',
        'furniture_change',
        'sail_change',
    ];
}
