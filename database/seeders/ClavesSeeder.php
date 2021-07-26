<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClavesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catclaves')->insert([
            'clave' => '14010101-203A000001-010201010201',
            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('catclaves')->insert([
            'clave' => '14010101-2032000001-010201010202',
            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('catclaves')->insert([
            'clave' => '14010101-2032100001-010201010401',
            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('catclaves')->insert([
            'clave' => '14010101-2031342000-010202010105',
            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('catclaves')->insert([
            'clave' => '14010101-2030400001-010202010301',
            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
