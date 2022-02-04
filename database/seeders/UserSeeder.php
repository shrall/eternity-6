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
        $user->save();

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@eternity.com';
        $user->eternite1 = 0;
        $user->role = 1;
        $user->password = Hash::make('wars1234');
        $user->save();
    }
}
