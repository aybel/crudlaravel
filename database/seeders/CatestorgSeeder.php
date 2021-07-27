<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catestorgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catestorgs')->insert([
            'tipo'=>'UR',
            'clave'=>'2030000000',
            'nombre'=>'Secretaría de Finanzas',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('catestorgs')->insert([
            'tipo'=>'UE',
            'clave'=>'203A000000',
            'nombre'=>'Oficina del C. Srio. Finanzas',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('catestorgs')->insert([
            'tipo'=>'CC',
            'clave'=>'203A000001',
            'nombre'=>'Oficina del C. Srio. Finanzas',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('catestorgs')->insert([
            'tipo'=>'UE',
            'clave'=>'2030200000',
            'nombre'=>'Coordinación Administrativa',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('catestorgs')->insert([
            'tipo'=>'CC',
            'clave'=>'2030200001',
            'nombre'=>'Coordinación Administrativa',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('catestorgs')->insert([
            'tipo'=>'UE',
            'clave'=>'2030400000',
            'nombre'=>'Unidad de Información, Planeación, Programación y Evaluación',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('catestorgs')->insert([
            'tipo'=>'CC',
            'clave'=>'2030400001',
            'nombre'=>'Unidad de Información, Planeación, Programación y Evaluación',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('catestorgs')->insert([
            'tipo'=>'UE',
            'clave'=>'2031300000',
            'nombre'=>'Dirección General de Fiscalización',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('catestorgs')->insert([
            'tipo'=>'CC',
            'clave'=>'20313A0000',
            'nombre'=>'Oficina del C. Director General',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('catestorgs')->insert([
            'tipo'=>'CC',
            'clave'=>'2031342000',
            'nombre'=>'Delegación de Fiscalización Toluca',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('catestorgs')->insert([
            'tipo'=>'CC',
            'clave'=>'2031343000',
            'nombre'=>'Delegación de Fiscalización Naucalpan',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('catestorgs')->insert([
            'tipo'=>'UE',
            'clave'=>'2032000000',
            'nombre'=>'Subsecretaría de Planeación y Presupuesto',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('catestorgs')->insert([
            'tipo'=>'CC',
            'clave'=>'2032000001',
            'nombre'=>'Subsecretaría de Planeación y Presupuesto',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('catestorgs')->insert([
            'tipo'=>'UE',
            'clave'=>'2032100000',
            'nombre'=>'Dirección General de Planeación y Gasto Público',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('catestorgs')->insert([
            'tipo'=>'CC',
            'clave'=>'2032100001',
            'nombre'=>'Dirección General de Planeación y Gasto Público',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);


        DB::table('catestorgs')->insert([
            'tipo'=>'UE',
            'clave'=>'2033200000',
            'nombre'=>'Dirección General de Financiamiento de Proyectos',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('catestorgs')->insert([
            'tipo'=>'CC',
            'clave'=>'2033200001',
            'nombre'=>'Dirección General de Financiamiento de Proyectos',
           
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

    }
}
