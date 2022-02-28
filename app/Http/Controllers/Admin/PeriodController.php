<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Period;
use App\Models\User;
use Illuminate\Http\Request;

class PeriodController extends Controller
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
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function show(Period $period)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function edit(Period $period)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Period $period)
    {
        if ($request->escape != null) {
            $period->update([
                'name2' => $request->period,
                'board_shop' => $request->board_shop,
            ]);
            if ($request->period == '3') {
                $users = User::where('role', 0)->where('escape', 1)->get();
                foreach ($users as $key => $user) {
                    if ($user->referral != 1) {
                        $user->update([
                            'map' => 0,
                            'map1' => 0,
                            'map2' => 0,
                            'map3' => 0,
                            'map4' => 0,
                            'map5' => 0,
                            'map6' => 0,
                            'map7' => 0,
                            'map8' => 0,
                            'map9' => 0,
                            'map10' => 0,
                            'map11' => 0,
                            'map12' => 0,
                            'map13' => 0,
                            'map14' => 0,
                            'map15' => 0,
                            'map16' => 0,
                            'map17' => 0,
                            'map18' => 0,
                            'map19' => 0,
                            'map20' => 0,
                        ]);
                    }
                }
            }
            return redirect()->route('admin.escape');
        } else {
            $users = User::where('role', 0)->get();
            foreach ($users as $key => $value) {
                $value->update([
                    'luckydraw' => 0
                ]);
            }
            if ($request->period == 1) {
                foreach ($users as $key => $value) {
                    $value->update([
                        'eternite1' => 500,
                        'flour' => 0,
                        'egg' => 0,
                        'meat' => 0,
                        'oil' => 0,
                        'iron' => 0,
                        'wood' => 0,
                        'cloth' => 0,
                        'bread' => 0,
                        'bakpao' => 0,
                        'omelette' => 0,
                        'steak' => 0,
                        'sword' => 0,
                        'armor' => 0,
                        'furniture' => 0,
                        'sail' => 0,
                        'ration' => 0,
                        'coal' => 0,
                        'cannon' => 0,
                        'cannonball' => 0,
                        'luckydraw' => 0,
                        'ship1' => 0,
                        'ship2' => 0,
                        'ship3' => 0,
                        'ship4' => 0,
                        'ship5' => 0,
                        'ship6' => 0,
                    ]);
                }
            }
            if ($request->period == 2) {
                $period->update([
                    'news' => 'Perlahan para penduduk dapat bertahan hidup dari musibah kelaparan yang terjadi pekan lalu, namun penduduk diharapkan untuk tetap berjaga-jaga karena kondisi E-Nation belum sepenuhnya stabil. Peneliti memperkirakan pulau-pulau yang kemarin disinggahi oleh penduduk ini memiliki banyak lahan yang luas yang dapat dikembangkan. Sehingga penduduk tertarik untuk mengeksplor pulau-pulau selanjutnya untuk memanfaatkan lahan yang ada untuk dikelola sehingga bisa menghasilkan. Untuk menjangkau pulau-pulau selanjutnya dibutuhkan kapal yang lebih memadai karena jarak yang ditempuh akan semakin jauh dan memakan waktu yang cukup lama apabila kapal memiliki fasilitas yang kurang memadai. ',
                    'flour' => 95,
                    'egg' => 137,
                    'meat' => 183,
                    'oil' => 80,
                    'iron' => 122,
                    'wood' => 98,
                    'cloth' => 86,
                    'bread' => 261,
                    'bakpao' => 307,
                    'omelette' => 246,
                    'steak' => 293,
                    'sword' => 295,
                    'armor' => 281,
                    'furniture' => 399,
                    'sail' => 252,
                    'flour_math' => 1,
                    'egg_math' => 1,
                    'meat_math' => 1,
                    'oil_math' => 1,
                    'bread_math' => 1,
                    'bakpao_math' => 1,
                    'omelette_math' => 1,
                    'steak_math' => 1,
                    'iron_math' => 0,
                    'wood_math' => 0,
                    'cloth_math' => 0,
                    'sword_math' => 0,
                    'armor_math' => 0,
                    'furniture_math' => 0,
                    'sail_math' => 0,
                ]);
            } else if ($request->period == 4) {
                $period->update([
                    'news' => 'Badan pemantau kepulauan E-Nation memprediksi bahwa destinasi selanjutnya yaitu pulau ke enam adalah pulau yang sangat luas dan dikenal sebagai pulau yang agraris dan berkelimpahan sumber daya alam di tengah hamparan samudra yang memiliki tingkat kepadatan penduduk yang minim, di mana permintaan tidaklah terlalu banyak.',
                    'flour' => 85,
                    'egg' => 123,
                    'meat' => 164,
                    'oil' => 72,
                    'iron' => 233,
                    'wood' => 187,
                    'cloth' => 164,
                    'bread' => 235,
                    'bakpao' => 276,
                    'omelette' => 222,
                    'steak' => 263,
                    'sword' => 560,
                    'furniture' => 757,
                    'armor' => 533,
                    'sail' => 478,
                    'flour_math' => 0,
                    'egg_math' => 0,
                    'meat_math' => 0,
                    'oil_math' => 0,
                    'bread_math' => 0,
                    'bakpao_math' => 0,
                    'omelette_math' => 0,
                    'steak_math' => 0,
                    'iron_math' => 1,
                    'wood_math' => 1,
                    'cloth_math' => 1,
                    'sword_math' => 1,
                    'armor_math' => 1,
                    'furniture_math' => 1,
                    'sail_math' => 1,
                ]);
            } else if ($request->period == 6) {
                $period->update([
                    'news' => 'Beberapa waktu lalu terjadi bencana alam di pulau ke delapan dan sepuluh yang membuat dampak yang cukup besar di mana sektor-sektor mengalami penurunan yang cukup signifikan. Tetapi diprediksi beberapa sektor mulai kembali. Dimana  sektor industri peralatan penunjang kapal penduduk sudah mulai bangkit sehingga peralatan kapal penduduk semakin mudah untuk dicari.
                Sektor pangan sampai saat ini dapat dibilang masih terdampak akibat bencana beberapa waktu lalu. Saat ini sawah dan lahan kebun sedang dalam proses dikelola kembali untuk menghasilkan bahan makanan untuk dilakukannya produksi batch selanjutnya. Persediaan di gudang sedikit sehingga terjadi kelangkaan bahan makanan untuk pemenuhan kebutuhan hidup masyarakat.
                ',
                    'flour' => 51,
                    'egg' => 74,
                    'meat' => 99,
                    'oil' => 43,
                    'iron' => 140,
                    'wood' => 112,
                    'cloth' => 98,
                    'bread' => 164,
                    'bakpao' => 194,
                    'omelette' => 155,
                    'steak' => 184,
                    'sword' => 336,
                    'furniture' => 454,
                    'armor' => 320,
                    'sail' => 287,
                    'flour_math' => 0,
                    'egg_math' => 0,
                    'meat_math' => 0,
                    'oil_math' => 0,
                    'bread_math' => 0,
                    'bakpao_math' => 0,
                    'omelette_math' => 0,
                    'steak_math' => 0,
                    'iron_math' => 0,
                    'wood_math' => 0,
                    'cloth_math' => 0,
                    'sword_math' => 0,
                    'armor_math' => 0,
                    'furniture_math' => 0,
                    'sail_math' => 0,
                ]);
            } else if ($request->period == 8) {
                $period->update([
                    'news' => 'Pulau ke sepuluh termasuk salah satu dari pulau yang maju di E-Nation. Sektor manufaktur kembali pulih seiring dengan berjalannya waktu. Suatu trend diperkirakan akan berkembang di pulau ke sepuluh yang mengakibatkan tingginya permintaan atas makanan yang membuat pabrik harus meningkatkan hasil produksi dan memperbesar kapasitas gudang untuk menyimpan persediaan. Selain itu, dalam waktu dekat ini, akan ada opening resources market yang menjual peralatan kapal sehingga diprediksi permintaan produksi peralatan kapal juga meningkat. ',
                    'flour' => 89,
                    'egg' => 129,
                    'meat' => 173,
                    'oil' => 75,
                    'iron' => 98,
                    'wood' => 79,
                    'cloth' => 69,
                    'bread' => 280,
                    'bakpao' => 329,
                    'omelette' => 264,
                    'steak' => 313,
                    'sword' => 235,
                    'furniture' => 318,
                    'armor' => 224,
                    'sail' => 201,
                    'flour_math' => 1,
                    'egg_math' => 1,
                    'meat_math' => 1,
                    'oil_math' => 1,
                    'bread_math' => 1,
                    'bakpao_math' => 1,
                    'omelette_math' => 1,
                    'steak_math' => 1,
                    'iron_math' => 0,
                    'wood_math' => 0,
                    'cloth_math' => 0,
                    'sword_math' => 0,
                    'armor_math' => 0,
                    'furniture_math' => 0,
                    'sail_math' => 0,
                ]);
            } else if ($request->period == 10) {
                $period->update([
                    'news' => 'Pulau ke dua belas adalah pulau yang paling maju dan modern di E-Nation di mana pusat pemerintahan ada di pulau ini. Opening resources market yang dibuka mendapat sambutan yang meriah dari netizen di media sosial sehingga #resourcesmarket menjadi trending topik dalam 2 pekan ini dan diprediksi dapat bertahan dalam beberapa pekan kedepan.
                Namun, di samping itu ada kabar yang mengejutkan bahwa ditemukan beberapa video viral di media sosial makanan yang selama ini dikenal memiliki kualitas yang tinggi kini mengalami penurunan kualitas pada makanan akibat kurangnya quality control oleh hampir seluruh pemilik usaha makanan. Dimana pada video tersebut menunjukkan bahwa adanya belatung hampir di seluruh makanan sehingga menimbulkan banyak komentar dari netizen. ',
                    'flour' => 170,
                    'egg' => 245,
                    'meat' => 328,
                    'oil' => 143,
                    'iron' => 186,
                    'wood' => 149,
                    'cloth' => 131,
                    'bread' => 475,
                    'bakpao' => 559,
                    'omelette' => 448,
                    'steak' => 533,
                    'sword' => 447,
                    'furniture' => 604,
                    'armor' => 425,
                    'sail' => 382,
                    'flour_math' => 1,
                    'egg_math' => 1,
                    'meat_math' => 1,
                    'oil_math' => 1,
                    'bread_math' => 1,
                    'bakpao_math' => 1,
                    'omelette_math' => 1,
                    'steak_math' => 1,
                    'iron_math' => 1,
                    'wood_math' => 1,
                    'cloth_math' => 1,
                    'sword_math' => 1,
                    'armor_math' => 1,
                    'furniture_math' => 1,
                    'sail_math' => 1,
                ]);
            } else if ($request->period == 12) {
                $period->update([
                    'news' => 'Pulau ke dua belas adalah pulau yang paling maju dan modern di E-Nation di mana pusat pemerintahan ada di pulau ini. Opening resources market yang dibuka mendapat sambutan yang meriah dari netizen di media sosial sehingga #resourcesmarket menjadi trending topik dalam 2 pekan ini dan diprediksi dapat bertahan dalam beberapa pekan kedepan.
                Namun, di samping itu ada kabar yang mengejutkan bahwa ditemukan beberapa video viral di media sosial makanan yang selama ini dikenal memiliki kualitas yang tinggi kini mengalami penurunan kualitas pada makanan akibat kurangnya quality control oleh hampir seluruh pemilik usaha makanan. Dimana pada video tersebut menunjukkan bahwa adanya belatung hampir di seluruh makanan sehingga menimbulkan banyak komentar dari netizen. ',
                    'flour' => 153,
                    'egg' => 221,
                    'meat' => 295,
                    'oil' => 129,
                    'iron' => 223,
                    'wood' => 179,
                    'cloth' => 157,
                    'bread' => 428,
                    'bakpao' => 503,
                    'omelette' => 404,
                    'steak' => 479,
                    'sword' => 537,
                    'furniture' => 725,
                    'armor' => 510,
                    'sail' => 458,
                    'flour_math' => 0,
                    'egg_math' => 0,
                    'meat_math' => 0,
                    'oil_math' => 0,
                    'bread_math' => 0,
                    'bakpao_math' => 0,
                    'omelette_math' => 0,
                    'steak_math' => 0,
                    'iron_math' => 1,
                    'wood_math' => 1,
                    'cloth_math' => 1,
                    'sword_math' => 1,
                    'armor_math' => 1,
                    'furniture_math' => 1,
                    'sail_math' => 1,
                ]);
            }
            $period->update([
                'name' => $request->period,
            ]);
        }
        return redirect()->route('admin.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function destroy(Period $period)
    {
        //
    }
}
