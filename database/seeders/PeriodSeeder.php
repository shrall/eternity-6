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
        $period->egg = 200;
        $period->egg_math = 1;
        $period->egg_change = 120;
        $period->save();
    }
}
