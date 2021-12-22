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
        $user->name = 'Salsabila Daranti';
        $user->email = 'salsa@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();
    }
}