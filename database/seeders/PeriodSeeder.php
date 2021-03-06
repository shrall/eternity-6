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
        $period->news = 'Perkembangan kehidupan yang semakin cepat membuat manusia semakin serakah sehingga tidak mempedulikan satu dengan yang lain. Hal ini membuat penduduk E-Nation dilanda musibah kelaparan, padi gagal panen, kekeringan terjadi akibat cuaca yang ekstrem. Semua penduduk berusaha bertahan hidup, mereka harus mengeksplor pulau-pulau yang ada untuk mengumpulkan bahan-bahan makanan yang ada di beberapa ladang yang masih terdapat bahan makanan yang dapat menghasilkan makanan, di sisi lain mereka juga memerlukan alat-alat yang menunjang agar bisa cepat sampai di pulau-pulau tersebut.';
        $period->flour = 100;
        $period->flour_math = 1;
        $period->egg = 100;
        $period->egg_math = 1;
        $period->meat = 100;
        $period->meat_math = 1;
        $period->oil = 100;
        $period->oil_math = 1;
        $period->iron = 100;
        $period->iron_math = 1;
        $period->wood = 100;
        $period->wood_math = 1;
        $period->cloth = 100;
        $period->cloth_math = 1;
        $period->bread = 100;
        $period->bread_math = 1;
        $period->bakpao = 100;
        $period->bakpao_math = 1;
        $period->omelette = 100;
        $period->omelette_math = 1;
        $period->steak = 100;
        $period->steak_math = 1;
        $period->sword = 100;
        $period->sword_math = 1;
        $period->armor = 100;
        $period->armor_math = 1;
        $period->furniture = 100;
        $period->furniture_math = 1;
        $period->sail = 100;
        $period->sail_math = 1;
        $period->save();
    }
}
