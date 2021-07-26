<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CatestorgSeeder::class);
        $this->call(CatestprgSeeder::class);
        $this->call(CatparSeeder::class);
        $this->call(ClavesSeeder::class);
        $this->call(EstatusSeeder::class);
        $this->call(UsuarioSeeder::class);
    }
}
