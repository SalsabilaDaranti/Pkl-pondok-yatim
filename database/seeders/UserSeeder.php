<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
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

    $admin = Role::create([
        'name' => 'admin',
        'display_name' => 'User Administrator'
    ]);

    $pengguna = Role::create([
        'name' => 'pengguna',
        'display_name' => 'User Biasa'
    ]);
        
        $user = new User();
        $user->name = 'Salsabila Daranti';
        $user->email = 'salsa@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        $penggunjung = new User();
        $penggunjung->name = 'pengunjung';
        $penggunjung->email = 'pengunjung@gmail.com';
        $penggunjung->password = Hash::make('12345678');
        $penggunjung->save();

        $user->attachRole($admin);
        $penggunjung->attachRole($pengguna);

        
    }
}
