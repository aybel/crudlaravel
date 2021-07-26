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
            'name' => 'Abel',
            'ap_paterno' => 'Vera',
            'ap_materno' => 'Cruz',
            'email' => 'correo@correo.com',
            'password'=>Hash::make('12345678'),

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'Adrian',
            'ap_paterno' => 'Gonzales',
            'ap_materno' => 'Peres',
            'email' => 'correo2@correo.com',
            'password'=>Hash::make('12345678'),
            
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

    }
}
