<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatparSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('catpar')->insert([
            'tipo' => 'C',
            'clave' => '2000',
            'nombre' => 'Materiales y suministros',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('catpar')->insert([
            'tipo' => 'S',
            'clave' => '2100',
            'nombre' => 'Materiales de administración, emisión de documentos y artículos oficiales',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('catpar')->insert([
            'tipo' => 'G',
            'clave' => '2110',
            'nombre' => 'Materiales, útiles y equipos menores de oficina',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('catpar')->insert([
            'tipo' => 'P',
            'clave' => '2111',
            'nombre' => 'Materiales y útiles de oficina',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('catpar')->insert([
            'tipo' => 'P',
            'clave' => '2112',
            'nombre' => 'Enseres de oficina',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('catpar')->insert([
            'tipo' => 'G',
            'clave' => '2120',
            'nombre' => 'Materiales y útiles de impresión y reproducción',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('catpar')->insert([
            'tipo' => 'P',
            'clave' => '2121',
            'nombre' => 'Material y útiles de imprenta y reproducción',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('catpar')->insert([
            'tipo' => 'G',
            'clave' => '2160',
            'nombre' => 'Material de limpieza',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('catpar')->insert([
            'tipo' => 'P',
            'clave' => '2161',
            'nombre' => 'Material y enseres de limpieza',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('catpar')->insert([
            'tipo' => 'C',
            'clave' => '3000',
            'nombre' => 'Servicios generales',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('catpar')->insert([
            'tipo' => 'S',
            'clave' => '3100',
            'nombre' => 'Servicios básicos',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('catpar')->insert([
            'tipo' => 'G',
            'clave' => '3110',
            'nombre' => 'Energía eléctrica',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('catpar')->insert([
            'tipo' => 'P',
            'clave' => '3111',
            'nombre' => 'Servicio de energía eléctrica',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('catpar')->insert([
            'tipo' => 'P',
            'clave' => '3112',
            'nombre' => 'Servicio de energía eléctrica para alumbrado público',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('catpar')->insert([
            'tipo' => 'G',
            'clave' => '3160',
            'nombre' => 'Servicios de telecomunicaciones y satélites',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('catpar')->insert([
            'tipo' => 'P',
            'clave' => '3161',
            'nombre' => 'Servicios de radiolocalización y telecomunicación',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('catpar')->insert([
            'tipo' => 'P',
            'clave' => '3162',
            'nombre' => 'Servicios de conducción de señales analógicas y digitales',

            'bactivo' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
