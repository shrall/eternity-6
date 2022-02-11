<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'User';
        $user->email = 'user@eternity.com';
        $user->eternite1 = 20000;
        $user->password = Hash::make('wars1234');
        $user->question_pack = 2;
        $user->map_type = 2;
        $user->escape = 1;
        $user->easy = 1;
        $user->save();

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('wars1234');
        $user->save();

        $user = new User();
        $user->name = '001-AOW';
        $user->email = 'Player001@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 1;
        $user->password = Hash::make('6017001');
        $user->save();

        $user = new User();
        $user->name = '002-Aladdin';
        $user->email = 'Player002@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 2;
        $user->password = Hash::make('6017002');
        $user->save();

        $user = new User();
        $user->name = '003-Da wo baba';
        $user->email = 'Player003@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 3;
        $user->password = Hash::make('6017003');
        $user->save();

        $user = new User();
        $user->name = '004-Cuan';
        $user->email = 'Player004@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 4;
        $user->password = Hash::make('6017004');
        $user->save();

        $user = new User();
        $user->name = '005-SMA DHARMA LOKA';
        $user->email = 'Player005@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 5;
        $user->password = Hash::make('6017005');
        $user->save();

        $user = new User();
        $user->name = '006-ETERNITY.TIM CLAIRE';
        $user->email = 'Player006@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 6;
        $user->password = Hash::make('6017006');
        $user->save();

        $user = new User();
        $user->name = '007-Gaje';
        $user->email = 'Player007@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 7;
        $user->password = Hash::make('6017007');
        $user->save();

        $user = new User();
        $user->name = '008-TENNET';
        $user->email = 'Player008@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 8;
        $user->password = Hash::make('6017008');
        $user->save();

        $user = new User();
        $user->name = '009-bolte';
        $user->email = 'Player009@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 9;
        $user->password = Hash::make('6017009');
        $user->save();

        $user = new User();
        $user->name = '010-SMA DHARMA LOKA 2';
        $user->email = 'Player010@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 10;
        $user->password = Hash::make('6017010');
        $user->save();

        $user = new User();
        $user->name = '011-brotong';
        $user->email = 'Player011@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 1;
        $user->password = Hash::make('6017011');
        $user->save();

        $user = new User();
        $user->name = '012-Avocado toast';
        $user->email = 'Player012@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 2;
        $user->password = Hash::make('6017012');
        $user->save();

        $user = new User();
        $user->name = '013-GGANBU';
        $user->email = 'Player013@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 3;
        $user->password = Hash::make('6017013');
        $user->save();

        $user = new User();
        $user->name = '014-The Chronicles';
        $user->email = 'Player014@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 4;
        $user->password = Hash::make('6017014');
        $user->save();

        $user = new User();
        $user->name = '015-cuanciak';
        $user->email = 'Player015@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 5;
        $user->password = Hash::make('6017015');
        $user->save();

        $user = new User();
        $user->name = '016-SMADA KUTIM';
        $user->email = 'Player016@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 6;
        $user->password = Hash::make('6017016');
        $user->save();

        $user = new User();
        $user->name = '017-Bebas';
        $user->email = 'Player017@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 7;
        $user->password = Hash::make('6017017');
        $user->save();

        $user = new User();
        $user->name = '018-Stonks';
        $user->email = 'Player018@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 8;
        $user->password = Hash::make('6017018');
        $user->save();

        $user = new User();
        $user->name = '019-Daddy Roy';
        $user->email = 'Player019@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 9;
        $user->password = Hash::make('6017019');
        $user->save();

        $user = new User();
        $user->name = '020-yuhuu';
        $user->email = 'Player020@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 10;
        $user->password = Hash::make('6017020');
        $user->save();

        $user = new User();
        $user->name = '021-Future-Z';
        $user->email = 'Player021@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 1;
        $user->password = Hash::make('6017021');
        $user->save();

        $user = new User();
        $user->name = '022-sightly';
        $user->email = 'Player022@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 2;
        $user->password = Hash::make('6017022');
        $user->save();

        $user = new User();
        $user->name = '023-EUPHORIA';
        $user->email = 'Player023@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 3;
        $user->password = Hash::make('6017023');
        $user->save();

        $user = new User();
        $user->name = '024-THE STEALER';
        $user->email = 'Player024@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 4;
        $user->password = Hash::make('6017024');
        $user->save();

        $user = new User();
        $user->name = '025-Taipan';
        $user->email = 'Player025@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 5;
        $user->password = Hash::make('6017025');
        $user->save();

        $user = new User();
        $user->name = '026-MasakoMantoel';
        $user->email = 'Player026@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 6;
        $user->password = Hash::make('6017026');
        $user->save();

        $user = new User();
        $user->name = '027-Ryan Kendrick Hoatmodjo';
        $user->email = 'Player027@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 7;
        $user->password = Hash::make('6017027');
        $user->save();

        $user = new User();
        $user->name = '028-Pengwins';
        $user->email = 'Player028@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 8;
        $user->password = Hash::make('6017028');
        $user->save();

        $user = new User();
        $user->name = '029-FTW';
        $user->email = 'Player029@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 9;
        $user->password = Hash::make('6017029');
        $user->save();

        $user = new User();
        $user->name = '030-Daisy';
        $user->email = 'Player030@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 10;
        $user->password = Hash::make('6017030');
        $user->save();

        $user = new User();
        $user->name = '031-Bisniche';
        $user->email = 'Player031@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 1;
        $user->password = Hash::make('6017031');
        $user->save();

        $user = new User();
        $user->name = '032-ROSE';
        $user->email = 'Player032@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 2;
        $user->password = Hash::make('6017032');
        $user->save();

        $user = new User();
        $user->name = '033-JPC';
        $user->email = 'Player033@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 3;
        $user->password = Hash::make('6017033');
        $user->save();

        $user = new User();
        $user->name = '034-Nathan Family';
        $user->email = 'Player034@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 4;
        $user->password = Hash::make('6017034');
        $user->save();

        $user = new User();
        $user->name = '035-Mamat Family';
        $user->email = 'Player035@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 5;
        $user->password = Hash::make('6017035');
        $user->save();

        $user = new User();
        $user->name = '036-Endeavour';
        $user->email = 'Player036@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 6;
        $user->password = Hash::make('6017036');
        $user->save();

        $user = new User();
        $user->name = '037-UC Selalu Dihati';
        $user->email = 'Player037@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 7;
        $user->password = Hash::make('6017037');
        $user->save();

        $user = new User();
        $user->name = '038-Trasama lasan';
        $user->email = 'Player038@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 8;
        $user->password = Hash::make('6017038');
        $user->save();

        $user = new User();
        $user->name = '039-deus vindice';
        $user->email = 'Player039@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 9;
        $user->password = Hash::make('6017039');
        $user->save();

        $user = new User();
        $user->name = '040-L-K2';
        $user->email = 'Player040@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 10;
        $user->password = Hash::make('6017040');
        $user->save();

        $user = new User();
        $user->name = '041-Elyxion';
        $user->email = 'Player041@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 1;
        $user->password = Hash::make('6017041');
        $user->save();

        $user = new User();
        $user->name = '042-FLEUR';
        $user->email = 'Player042@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 2;
        $user->password = Hash::make('6017042');
        $user->save();

        $user = new User();
        $user->name = '043-MARVALIX';
        $user->email = 'Player043@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 3;
        $user->password = Hash::make('6017043');
        $user->save();

        $user = new User();
        $user->name = '044-Adventuresome';
        $user->email = 'Player044@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 4;
        $user->password = Hash::make('6017044');
        $user->save();

        $user = new User();
        $user->name = '045-Sixteen';
        $user->email = 'Player045@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 5;
        $user->password = Hash::make('6017045');
        $user->save();

        $user = new User();
        $user->name = '046-TheMerge';
        $user->email = 'Player046@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 6;
        $user->password = Hash::make('6017046');
        $user->save();

        $user = new User();
        $user->name = '047-MVP';
        $user->email = 'Player047@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 7;
        $user->password = Hash::make('6017047');
        $user->save();

        $user = new User();
        $user->name = '048-HIGH SEDES';
        $user->email = 'Player048@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 8;
        $user->password = Hash::make('6017048');
        $user->save();

        $user = new User();
        $user->name = '049-Emotional Demeg';
        $user->email = 'Player049@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 9;
        $user->password = Hash::make('6017049');
        $user->save();

        $user = new User();
        $user->name = '050-arcane';
        $user->email = 'Player050@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 10;
        $user->password = Hash::make('6017050');
        $user->save();

        $user = new User();
        $user->name = '051-SMANSA DC';
        $user->email = 'Player051@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 1;
        $user->password = Hash::make('6017051');
        $user->save();

        $user = new User();
        $user->name = '052-IMMORTAL';
        $user->email = 'Player052@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 2;
        $user->password = Hash::make('6017052');
        $user->save();

        $user = new User();
        $user->name = '053-WJD';
        $user->email = 'Player053@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 3;
        $user->password = Hash::make('6017053');
        $user->save();

        $user = new User();
        $user->name = '054-SKY';
        $user->email = 'Player054@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 4;
        $user->password = Hash::make('6017054');
        $user->save();

        $user = new User();
        $user->name = '055-Katoda';
        $user->email = 'Player055@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 5;
        $user->password = Hash::make('6017055');
        $user->save();

        $user = new User();
        $user->name = '056-Hikari';
        $user->email = 'Player056@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 6;
        $user->password = Hash::make('6017056');
        $user->save();

        $user = new User();
        $user->name = '057-SMA Team';
        $user->email = 'Player057@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 7;
        $user->password = Hash::make('6017057');
        $user->save();

        $user = new User();
        $user->name = '058-Deradadum';
        $user->email = 'Player058@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 8;
        $user->password = Hash::make('6017058');
        $user->save();

        $user = new User();
        $user->name = '059-Sumber Makmur';
        $user->email = 'Player059@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 9;
        $user->password = Hash::make('6017059');
        $user->save();

        $user = new User();
        $user->name = '060-ESASI Stellarflare';
        $user->email = 'Player060@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 10;
        $user->password = Hash::make('6017060');
        $user->save();

        $user = new User();
        $user->name = '061-Kamfē';
        $user->email = 'Player061@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 1;
        $user->password = Hash::make('6017061');
        $user->save();

        $user = new User();
        $user->name = '062-The Phantera';
        $user->email = 'Player062@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 2;
        $user->password = Hash::make('6017062');
        $user->save();

        $user = new User();
        $user->name = '063-Pasti Menang';
        $user->email = 'Player063@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 3;
        $user->password = Hash::make('6017063');
        $user->save();

        $user = new User();
        $user->name = '064-SOLID';
        $user->email = 'Player064@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 4;
        $user->password = Hash::make('6017064');
        $user->save();

        $user = new User();
        $user->name = '065-H2SO4';
        $user->email = 'Player065@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 5;
        $user->password = Hash::make('6017065');
        $user->save();

        $user = new User();
        $user->name = '066-PEMASUKAN';
        $user->email = 'Player066@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 6;
        $user->password = Hash::make('6017066');
        $user->save();

        $user = new User();
        $user->name = '067-Gyro';
        $user->email = 'Player067@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 7;
        $user->password = Hash::make('6017067');
        $user->save();

        $user = new User();
        $user->name = '068-Grateful';
        $user->email = 'Player068@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 8;
        $user->password = Hash::make('6017068');
        $user->save();

        $user = new User();
        $user->name = '069-Fitriana Defita Sari';
        $user->email = 'Player069@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 9;
        $user->password = Hash::make('6017069');
        $user->save();

        $user = new User();
        $user->name = '070-Bella Ciao';
        $user->email = 'Player070@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 10;
        $user->password = Hash::make('6017070');
        $user->save();

        $user = new User();
        $user->name = '071-KUMA';
        $user->email = 'Player071@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 1;
        $user->password = Hash::make('6017071');
        $user->save();

        $user = new User();
        $user->name = '072-Infinity';
        $user->email = 'Player072@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 2;
        $user->password = Hash::make('6017072');
        $user->save();

        $user = new User();
        $user->name = '073-Fabiro';
        $user->email = 'Player073@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 3;
        $user->password = Hash::make('6017073');
        $user->save();

        $user = new User();
        $user->name = '074-CH3OOH';
        $user->email = 'Player074@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 4;
        $user->password = Hash::make('6017074');
        $user->save();

        $user = new User();
        $user->name = '075-CAT';
        $user->email = 'Player075@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 5;
        $user->password = Hash::make('6017075');
        $user->save();

        $user = new User();
        $user->name = '076-Yeyey';
        $user->email = 'Player076@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 6;
        $user->password = Hash::make('6017076');
        $user->save();

        $user = new User();
        $user->name = '077-RESTU IBU';
        $user->email = 'Player077@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 7;
        $user->password = Hash::make('6017077');
        $user->save();

        $user = new User();
        $user->name = '078-Tuktuk';
        $user->email = 'Player078@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 8;
        $user->password = Hash::make('6017078');
        $user->save();

        $user = new User();
        $user->name = '079-Player';
        $user->email = 'Player079@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 9;
        $user->password = Hash::make('6017079');
        $user->save();

        $user = new User();
        $user->name = '080-Player';
        $user->email = 'Player080@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 10;
        $user->password = Hash::make('6017080');
        $user->question_pack = 3;
        $user->save();

        $user = new User();
        $user->name = '081-Player';
        $user->email = 'Player081@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 1;
        $user->password = Hash::make('6017081');
        $user->save();

        $user = new User();
        $user->name = '082-Player';
        $user->email = 'Player082@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 2;
        $user->password = Hash::make('6017082');
        $user->save();

        $user = new User();
        $user->name = '083-Player';
        $user->email = 'Player083@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 3;
        $user->password = Hash::make('6017083');
        $user->save();

        $user = new User();
        $user->name = '084-Player';
        $user->email = 'Player084@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 4;
        $user->password = Hash::make('6017084');
        $user->save();

        $user = new User();
        $user->name = '085-Player';
        $user->email = 'Player085@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 5;
        $user->password = Hash::make('6017085');
        $user->save();

        $user = new User();
        $user->name = '086-Player';
        $user->email = 'Player086@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 6;
        $user->password = Hash::make('6017086');
        $user->save();

        $user = new User();
        $user->name = '087-Player';
        $user->email = 'Player087@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 7;
        $user->password = Hash::make('6017087');
        $user->save();

        $user = new User();
        $user->name = '088-Player';
        $user->email = 'Player088@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 8;
        $user->password = Hash::make('6017088');
        $user->save();

        $user = new User();
        $user->name = '089-Player';
        $user->email = 'Player089@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 9;
        $user->password = Hash::make('6017089');
        $user->save();

        $user = new User();
        $user->name = '090-Player';
        $user->email = 'Player090@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 10;
        $user->password = Hash::make('6017090');
        $user->save();

        $user = new User();
        $user->name = '091-Player';
        $user->email = 'Player091@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 1;
        $user->password = Hash::make('6017091');
        $user->save();

        $user = new User();
        $user->name = '092-Player';
        $user->email = 'Player092@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 2;
        $user->password = Hash::make('6017092');
        $user->save();

        $user = new User();
        $user->name = '093-Player';
        $user->email = 'Player093@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 3;
        $user->password = Hash::make('6017093');
        $user->save();

        $user = new User();
        $user->name = '094-Player';
        $user->email = 'Player094@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 4;
        $user->password = Hash::make('6017094');
        $user->save();

        $user = new User();
        $user->name = '095-Player';
        $user->email = 'Player095@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 5;
        $user->password = Hash::make('6017095');
        $user->save();

        $user = new User();
        $user->name = '096-Player';
        $user->email = 'Player096@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 6;
        $user->password = Hash::make('6017096');
        $user->save();

        $user = new User();
        $user->name = '097-Player';
        $user->email = 'Player097@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 7;
        $user->password = Hash::make('6017097');
        $user->save();

        $user = new User();
        $user->name = '098-Player';
        $user->email = 'Player098@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 8;
        $user->password = Hash::make('6017098');
        $user->save();

        $user = new User();
        $user->name = '099-Player';
        $user->email = 'Player099@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 9;
        $user->password = Hash::make('6017099');
        $user->save();

        $user = new User();
        $user->name = '100-Player';
        $user->email = 'Player100@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 10;
        $user->password = Hash::make('6017100');
        $user->save();

        $user = new User();
        $user->name = '101-Player';
        $user->email = 'Player101@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 1;
        $user->password = Hash::make('6017101');
        $user->save();

        $user = new User();
        $user->name = '102-Player';
        $user->email = 'Player102@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 2;
        $user->password = Hash::make('6017102');
        $user->save();

        $user = new User();
        $user->name = '103-Player';
        $user->email = 'Player103@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 3;
        $user->password = Hash::make('6017103');
        $user->save();

        $user = new User();
        $user->name = '104-Player';
        $user->email = 'Player104@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 4;
        $user->password = Hash::make('6017104');
        $user->save();

        $user = new User();
        $user->name = '105-Player';
        $user->email = 'Player105@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 5;
        $user->password = Hash::make('6017105');
        $user->save();

        $user = new User();
        $user->name = '106-Player';
        $user->email = 'Player106@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 6;
        $user->password = Hash::make('6017106');
        $user->save();

        $user = new User();
        $user->name = '107-Player';
        $user->email = 'Player107@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 7;
        $user->password = Hash::make('6017107');
        $user->save();

        $user = new User();
        $user->name = '108-Player';
        $user->email = 'Player108@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 8;
        $user->password = Hash::make('6017108');
        $user->save();

        $user = new User();
        $user->name = '109-Player';
        $user->email = 'Player109@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 9;
        $user->password = Hash::make('6017109');
        $user->save();

        $user = new User();
        $user->name = '110-Player';
        $user->email = 'Player110@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 10;
        $user->password = Hash::make('6017110');
        $user->save();

        $user = new User();
        $user->name = '111-Player';
        $user->email = 'Player111@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 1;
        $user->password = Hash::make('6017111');
        $user->save();

        $user = new User();
        $user->name = '112-Player';
        $user->email = 'Player112@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 2;
        $user->password = Hash::make('6017112');
        $user->save();

        $user = new User();
        $user->name = '113-Player';
        $user->email = 'Player113@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 3;
        $user->password = Hash::make('6017113');
        $user->save();

        $user = new User();
        $user->name = '114-Player';
        $user->email = 'Player114@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 4;
        $user->password = Hash::make('6017114');
        $user->save();

        $user = new User();
        $user->name = '115-Player';
        $user->email = 'Player115@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 5;
        $user->password = Hash::make('6017115');
        $user->save();

        $user = new User();
        $user->name = '116-Player';
        $user->email = 'Player116@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 6;
        $user->password = Hash::make('6017116');
        $user->save();

        $user = new User();
        $user->name = '117-Player';
        $user->email = 'Player117@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 7;
        $user->password = Hash::make('6017117');
        $user->save();

        $user = new User();
        $user->name = '118-Player';
        $user->email = 'Player118@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 8;
        $user->password = Hash::make('6017118');
        $user->save();

        $user = new User();
        $user->name = '119-Player';
        $user->email = 'Player119@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 9;
        $user->password = Hash::make('6017119');
        $user->save();

        $user = new User();
        $user->name = '120-Player';
        $user->email = 'Player120@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 10;
        $user->password = Hash::make('6017100');
        $user->save();

        $user = new User();
        $user->name = '121-Player';
        $user->email = 'Player121@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 1;
        $user->password = Hash::make('6017121');
        $user->save();

        $user = new User();
        $user->name = '122-Player';
        $user->email = 'Player122@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 2;
        $user->password = Hash::make('6017122');
        $user->save();

        $user = new User();
        $user->name = '123-Player';
        $user->email = 'Player123@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 3;
        $user->password = Hash::make('6017123');
        $user->save();

        $user = new User();
        $user->name = '124-Player';
        $user->email = 'Player124@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 4;
        $user->password = Hash::make('6017124');
        $user->save();

        $user = new User();
        $user->name = '125-Player';
        $user->email = 'Player125@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 5;
        $user->password = Hash::make('6017125');
        $user->save();

        $user = new User();
        $user->name = '126-Player';
        $user->email = 'Player126@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 6;
        $user->password = Hash::make('6017126');
        $user->save();

        $user = new User();
        $user->name = '127-Player';
        $user->email = 'Player127@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 7;
        $user->password = Hash::make('6017127');
        $user->save();

        $user = new User();
        $user->name = '128-Player';
        $user->email = 'Player128@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 8;
        $user->password = Hash::make('6017128');
        $user->save();

        $user = new User();
        $user->name = '129-Player';
        $user->email = 'Player129@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 9;
        $user->password = Hash::make('6017129');
        $user->save();

        $user = new User();
        $user->name = '130-Player';
        $user->email = 'Player130@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 10;
        $user->password = Hash::make('6017130');
        $user->save();

        $user = new User();
        $user->name = '131-Player';
        $user->email = 'Player131@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 1;
        $user->password = Hash::make('6017131');
        $user->save();

        $user = new User();
        $user->name = '132-Player';
        $user->email = 'Player132@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 2;
        $user->password = Hash::make('6017132');
        $user->save();

        $user = new User();
        $user->name = '133-Player';
        $user->email = 'Player133@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 3;
        $user->password = Hash::make('6017133');
        $user->save();

        $user = new User();
        $user->name = '134-Player';
        $user->email = 'Player134@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 4;
        $user->password = Hash::make('6017134');
        $user->save();

        $user = new User();
        $user->name = '135-Player';
        $user->email = 'Player135@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 5;
        $user->password = Hash::make('6017135');
        $user->save();

        $user = new User();
        $user->name = '136-Player';
        $user->email = 'Player136@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 6;
        $user->password = Hash::make('6017136');
        $user->save();

        $user = new User();
        $user->name = '137-Player';
        $user->email = 'Player137@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 7;
        $user->password = Hash::make('6017137');
        $user->save();

        $user = new User();
        $user->name = '138-Player';
        $user->email = 'Player138@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 8;
        $user->password = Hash::make('6017138');
        $user->save();

        $user = new User();
        $user->name = '139-Player';
        $user->email = 'Player139@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 9;
        $user->password = Hash::make('6017139');
        $user->save();

        $user = new User();
        $user->name = '140-Player';
        $user->email = 'Player140@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 10;
        $user->password = Hash::make('6017140');
        $user->save();

        $user = new User();
        $user->name = '141-Player';
        $user->email = 'Player141@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 1;
        $user->password = Hash::make('6017141');
        $user->save();

        $user = new User();
        $user->name = '142-Player';
        $user->email = 'Player142@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 2;
        $user->password = Hash::make('6017142');
        $user->save();

        $user = new User();
        $user->name = '143-Player';
        $user->email = 'Player143@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 3;
        $user->password = Hash::make('6017143');
        $user->save();

        $user = new User();
        $user->name = '144-Player';
        $user->email = 'Player144@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 4;
        $user->password = Hash::make('6017144');
        $user->save();

        $user = new User();
        $user->name = '145-Player';
        $user->email = 'Player145@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 5;
        $user->password = Hash::make('6017145');
        $user->save();

        $user = new User();
        $user->name = '146-Player';
        $user->email = 'Player146@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 6;
        $user->password = Hash::make('6017146');
        $user->save();

        $user = new User();
        $user->name = '147-Player';
        $user->email = 'Player147@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 7;
        $user->password = Hash::make('6017147');
        $user->save();

        $user = new User();
        $user->name = '148-Player';
        $user->email = 'Player148@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 8;
        $user->password = Hash::make('6017148');
        $user->save();

        $user = new User();
        $user->name = '149-Player';
        $user->email = 'Player149@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 9;
        $user->password = Hash::make('6017149');
        $user->save();

        $user = new User();
        $user->name = '150-Player';
        $user->email = 'Player150@eternity.com';
        $user->eternite1 = 500;
        $user->auction_q = 10;
        $user->password = Hash::make('6017150');
        $user->save();


        $user = new User();
        $user->name = 'Admin01';
        $user->email = 'admin01@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin02';
        $user->email = 'admin02@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin03';
        $user->email = 'admin03@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin04';
        $user->email = 'admin04@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin05';
        $user->email = 'admin05@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin06';
        $user->email = 'admin06@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin07';
        $user->email = 'admin07@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin08';
        $user->email = 'admin08@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin09';
        $user->email = 'admin09@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin10';
        $user->email = 'admin10@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin11';
        $user->email = 'admin11@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin12';
        $user->email = 'admin12@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin13';
        $user->email = 'admin13@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin14';
        $user->email = 'admin14@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin15';
        $user->email = 'admin15@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin16';
        $user->email = 'admin16@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin17';
        $user->email = 'admin17@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin18';
        $user->email = 'admin18@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin19';
        $user->email = 'admin19@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin20';
        $user->email = 'admin20@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin21';
        $user->email = 'admin21@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin22';
        $user->email = 'admin22@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin23';
        $user->email = 'admin23@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin24';
        $user->email = 'admin24@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin25';
        $user->email = 'admin25@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin26';
        $user->email = 'admin26@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin27';
        $user->email = 'admin27@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin28';
        $user->email = 'admin28@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin29';
        $user->email = 'admin29@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin30';
        $user->email = 'admin30@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin31';
        $user->email = 'admin31@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin32';
        $user->email = 'admin32@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin33';
        $user->email = 'admin33@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin34';
        $user->email = 'admin34@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin35';
        $user->email = 'admin35@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin36';
        $user->email = 'admin36@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin37';
        $user->email = 'admin37@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin38';
        $user->email = 'admin38@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin39';
        $user->email = 'admin39@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin40';
        $user->email = 'admin40@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('admin');
        $user->save();
    }
}
