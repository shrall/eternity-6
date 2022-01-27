<?php

namespace Database\Seeders;

use App\Models\Period;
use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $period = new Period();
        $period->name = 0;
        $period->news = 'Lorem ipsum this is period 0';
        $period->egg = 200;
        $period->egg_math = 1;
        $period->egg_change = 120;
        $period->save();
    }
}
