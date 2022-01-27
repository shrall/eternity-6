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
        $user->egg = 20000;
        $user->sail = 20000;
        $user->password = Hash::make('wars1234');
        $user->save();
    }
}
