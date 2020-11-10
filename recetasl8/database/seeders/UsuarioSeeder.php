<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Josue Flores',
            'email' => 'josueari20@hotmail.com',
            'password' => Hash::make('admin2020'),
            'url' => 'https://github.com/Jafmatute',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ary Flores',
            'email' => 'jafmatute@gmail.com',
            'password' => Hash::make('admin2020'),
            'url' => 'https://github.com/Jafmatute',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
