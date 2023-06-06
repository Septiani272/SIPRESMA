<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'npm' => 'admin',
            'name' => 'admin',
            'roles' => 'ADMIN',
            'jenis_kelamin' => 'Perempuan',
            'prodi' => 'teknik',
            'phone' => '082316447875',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'npm' => 'Jumari',
            'name' => 'Jumari',
            'roles' => 'ADMIN',
            'jenis_kelamin' => 'Laki-laki',
            'prodi' => 'teknik',
            'phone' => '0823456789',
            'password' => bcrypt('jumari12'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'npm' => 'Harlen',
            'name' => 'Harlen',
            'roles' => 'ADMIN',
            'jenis_kelamin' => 'Perempuan',
            'prodi' => 'teknik',
            'phone' => '0823456789',
            'password' => bcrypt('harlen12'),
            'remember_token' => Str::random(60),
        ]);

    }
}
