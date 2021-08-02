<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatarticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catarticulos')->insert([
            'clave'=>'2111010001',
            'descripcion'=>'ACETATO 21.5CMS ANCHO X 2.8MTS LONG P/FOTOCOPIADORA',
            'precio'=>10.8500,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        
		DB::table('catarticulos')->insert([
			"clave"=> "2111010002",
			"descripcion"=> "ACETATO T/CARTA EN HOJA",
			"precio"=> 6.2473,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010004",
			"descripcion"=> "ARILLO METALICA/O 1 1/4\" DIAM COLOR NEGRA/O P/ENGARGOLAR",
			"precio"=> 6.1775,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010005",
			"descripcion"=> "ARILLO METALICA/O 1\" DIAM COLOR NEGRA/O P/ENGARGOLAR",
			"precio"=> 3.2551,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010017",
			"descripcion"=> "ARILLO PLASTICA/O 2\" DIAM COLOR NEGRA/O P/ENGARGOLAR",
			"precio"=> 3.8181,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010019",
			"descripcion"=> "ARILLO PLASTICA/O 3/8\" DIAM COLOR NEGRA/O P/ENGARGOLAR",
			"precio"=> 0.6641,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010020",
			"descripcion"=> "ARILLO PLASTICA/O 5/16\" DIAM P/ENGARGOLAR",
			"precio"=> 1.2131,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010021",
			"descripcion"=> "ARILLO PLASTICA/O 5/8\" DIAM P/ENGARGOLAR",
			"precio"=> 1.8454,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010022",
			"descripcion"=> "ARILLO PLASTICA/O 7/16\" DIAM P/ENGARGOLAR",
			"precio"=> 0.5314,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010024",
			"descripcion"=> "BLOCK CUADRO CHICO T/CARTA",
			"precio"=> 9.7705,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010025",
			"descripcion"=> "BLOCK CUADRO GRANDE T/CARTA",
			"precio"=> 8.9250,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010026",
			"descripcion"=> "BLOCK ISOMETRICO T/CARTA",
			"precio"=> 7.3907,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010044",
			"descripcion"=> "CARPETA LEFORT T/OFICIO DE BROCHE",
			"precio"=> 11.4334,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010059",
			"descripcion"=> "CINTA MASKING TAPE 1/2 ANCHO X 50 MTS.",
			"precio"=> 11.9610,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010072",
			"descripcion"=> "CLIP METALICA/O GIGANTE NO. 02",
			"precio"=> 14.8860,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010078",
			"descripcion"=> "CORRECTOR LIQUIDO MOD LAPICERO",
			"precio"=> 13.7965,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010092",
			"descripcion"=> "ETIQUETA ADHESIVA/O NO. 20",
			"precio"=> 11.5338,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010094",
			"descripcion"=> "ETIQUETA ADHESIVA/O NO. 06",
			"precio"=> 8.0900,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010096",
			"descripcion"=> "ETIQUETA ADHESIVA/O NO. 21",
			"precio"=> 7.7388,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010097",
			"descripcion"=> "ETIQUETA ADHESIVA/O NO. 24",
			"precio"=> 8.0357,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "21120100099",
			"descripcion"=> "EXACTO 1CM ANCHO CHICO",
			"precio"=> 3.1937,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010108",
			"descripcion"=> "GOMA MOD BR-80",
			"precio"=> 0.4083,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010120",
			"descripcion"=> "LIBRETA FRANCESA PASTA GRUESA RAYA",
			"precio"=> 14.7400,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010121",
			"descripcion"=> "LIBRETA ITALIANA PASTA GRUESA RAYA",
			"precio"=> 36.0825,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010128",
			"descripcion"=> "MARCADOR ACEITE COLOR AZUL",
			"precio"=> 1.8575,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010130",
			"descripcion"=> "MARCADOR AGUA MCA AQUACOLOR",
			"precio"=> 32.0920,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010142",
			"descripcion"=> "MICA TERMIPLASTIC MOD 1204 9.5 X 6.5 P/CREDENCIAL",
			"precio"=> 0.7000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010146",
			"descripcion"=> "NAVAJA 1CM ANCHO P/EXACTO CHICO",
			"precio"=> 2.0571,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010148",
			"descripcion"=> "PAPEL ALBANENE VEGETAL 0.91 MTS ANCHO X 50MTS LONG",
			"precio"=> 291.6500,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010150",
			"descripcion"=> "PASTA NEGRA T/CARTA P/ENGARGOLAR",
			"precio"=> 0.6178,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010155",
			"descripcion"=> "PAPEL CARTONCILLO 70CMS ANCHO X 50CMS LONG DIFERENTES COLORES",
			"precio"=> 0.5000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010156",
			"descripcion"=> "PAPEL CARTULINA 65CMS ANCHO X 50CMS LONG COLOR BLANCA/O",
			"precio"=> 0.6700,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010157",
			"descripcion"=> "PAPEL CARTULINA 65CMS ANCHO X 50CMS LONG DIFERENTES COLORES",
			"precio"=> 0.6900,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010158",
			"descripcion"=> "PAPEL CARTULINA OPALINA 57CMS ANCHO X 62CMS LONG",
			"precio"=> 2.1300,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010159",
			"descripcion"=> "PAPEL CARTULINA OPALINA 57CMS ANCHO X 72CMS LONG",
			"precio"=> 3.9356,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010160",
			"descripcion"=> "PAPEL CASCARON 0.71MTS ANCHO X 1.12MTS LONG COLOR BLANCA/O",
			"precio"=> 7.0200,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010162",
			"descripcion"=> "PASTA T/CARTA COLOR AZUL P/ENGARGOLAR",
			"precio"=> 2.1940,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010165",
			"descripcion"=> "PASTA T/OFICIO COLOR NEGRA/O P/ENGARGOLAR",
			"precio"=> 2.8543,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010177",
			"descripcion"=> "BOLIGRAFO PUNTO MEDIANO COLOR NEGRA/O",
			"precio"=> 4.4442,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010179",
			"descripcion"=> "PLUMA PUNTO MEDIANO COLOR NEGRA/O",
			"precio"=> 1.8895,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010210",
			"descripcion"=> "SOBRE BOLSA PAPEL T/EXTRA OFICIO",
			"precio"=> 2.3362,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010218",
			"descripcion"=> "TARJETA POST IT 1 1/2\" ANCHO X 2\" LONG C/50HJS",
			"precio"=> 7.0185,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "21610100235",
			"descripcion"=> "CUBETA PLASTICA/O NO. 14",
			"precio"=> 14.8600,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "21610200243",
			"descripcion"=> "ESPUMA LIMPIADORA",
			"precio"=> 73.6650,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "21610200246",
			"descripcion"=> "JABON LIQUIDO P/ALFOMBRAS",
			"precio"=> 60.0000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "21610100251",
			"descripcion"=> "PALO ESCOBA",
			"precio"=> 5.9761,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "25610500256",
			"descripcion"=> "PERILLA PLASTICA/O PILOTO ENCENDIDO COLOR ROJA/O P/TERMOSTATO PRECISIO",
			"precio"=> 3.9300,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "24610400284",
			"descripcion"=> "CABLE FIREWIRE 1.80MTS",
			"precio"=> 48.0000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "24610400285",
			"descripcion"=> "CABLE SERIAL MACHO-MACHO",
			"precio"=> 120.0000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "21410600311",
			"descripcion"=> "FUSOR KIT MCA OKIDATA MOD C/5300N NO. PARTE 42158601",
			"precio"=> 2023.6200,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111020320",
			"descripcion"=> "PAPEL BOND 8.2CMS ANCHO EN ROLLO P/IMPRESORA DP-8340",
			"precio"=> 14.5000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "21410600339",
			"descripcion"=> "PAPEL TERMICA/O MOD 7401-K92 114MM ANCHO X 192MTS LONG EN ROLLO",
			"precio"=> 80.0000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "21410100351",
			"descripcion"=> "TONER MCA OKIDATA MOD C/5300N COLOR AMARILLA/O NO. PARTE 42127401",
			"precio"=> 994.3500,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "21410100352",
			"descripcion"=> "TONER MCA OKIDATA MOD C/5300N COLOR MAGENTA NO. PARTE 42127402",
			"precio"=> 994.3500,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "21410600353",
			"descripcion"=> "TRANSFER BELT MCA OKIDATA MOD C/5300N NO. PARTE 42158701",
			"precio"=> 4776.2000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010355",
			"descripcion"=> "BROCHE CAIMAN",
			"precio"=> 1.1743,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010356",
			"descripcion"=> "PORTACREDENCIAL PLASTICA/O 9.5 X 6.5",
			"precio"=> 1.9100,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "2111010357",
			"descripcion"=> "TARJETA CARTULINA 1/2 CARTA 5X8 C/100",
			"precio"=> 5.4400,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "24610700359",
			"descripcion"=> "INTERRUPTOR TERMOMAGNETICO 10KV 15AMP",
			"precio"=> 225.0000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "21410600360",
			"descripcion"=> "PAPEL FOTOGRAFICO 1.07MTS ANCHO X 100MTS LONG",
			"precio"=> 2100.0000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "247102000379",
			"descripcion"=> "ABRAZADERA UÑA 1 1/2\" DIAM",
			"precio"=> 2.5900
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "247102000380",
			"descripcion"=> "ABRAZADERA UÑA 1\" DIAM",
			"precio"=> 1.0145,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "247102000381",
			"descripcion"=> "ABRAZADERA UÑA 1/2\" DIAM",
			"precio"=> 0.3800,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "247102000382",
			"descripcion"=> "ABRAZADERA UÑA 2\" DIAM",
			"precio"=> 4.1400,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "24610400385",
			"descripcion"=> "ALAMBRE COBRE 0.4MM ANCHO X 500MTS LONG EN ROLLO",
			"precio"=> 3450.0000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "247104000392",
			"descripcion"=> "ANGULO 3/4\" ANCHO X 1/8\" GROSOR",
			"precio"=> 23.5546,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "29110200396",
			"descripcion"=> "BISAGRA LIBRO 3/4\" ANCHO X 1\" LONG",
			"precio"=> 6.1144,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "29110400400",
			"descripcion"=> "BOTE ALCOHOLERO 19LTS",
			"precio"=> 18.8556,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "247103000401",
			"descripcion"=> "BRAZO HIERRO CROMADO P/REGADERA",
			"precio"=> 7.5500,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "29110200402",
			"descripcion"=> "BUJE NO. PARTE J901306",
			"precio"=> 131.0000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "29110200403",
			"descripcion"=> "BUJE NO. PARTE J903242",
			"precio"=> 574.0000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "247104000415",
			"descripcion"=> "CHAMBRANA LAMINA CLB 18 6MTS LONG MATERIAL DE HERRERIA",
			"precio"=> 240.0000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "29210100418",
			"descripcion"=> "CHAPA METALICA/O P/PUERTA DE CLOSET",
			"precio"=> 33.0500,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "247105000431",
			"descripcion"=> "CLAVO STD 1\" LONG C/CABEZA",
			"precio"=> 39.1300,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "25610200435",
			"descripcion"=> "CODO PVC 2\" DIAM X 45 GRADOS P/SANITARIO",
			"precio"=> 1.7913,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "25610200436",
			"descripcion"=> "CODO PVC 2\" DIAM X 90 GRADOS P/SANITARIO",
			"precio"=> 1.8207,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "25610200437",
			"descripcion"=> "CODO PVC 4\" DIAM X 45 GRADOS P/SANITARIO",
			"precio"=> 6.3800,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "25610200438",
			"descripcion"=> "CODO PVC 4\" DIAM X 90 GRADOS P/SANITARIO",
			"precio"=> 7.5391,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "247104000439",
			"descripcion"=> "COLA LAMINA PATO 3/4\" DIAM",
			"precio"=> 0.5000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "247101000440",
			"descripcion"=> "COLADERA FIERRO FUNDIDO (FO.FO.) 15CMS X 15CMS P/BAÑO GRANDE",
			"precio"=> 12.7400,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "24210100441",
			"descripcion"=> "COLORANTE COLOR ROJA/O P/CEMENTO",
			"precio"=> 39.1406,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "25610100442",
			"descripcion"=> "COPLE 1/2\" DIAM P/CEMENTAR",
			"precio"=> 1.6300,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "25610100443",
			"descripcion"=> "COPLE 2\" DIAM P/CEMENTAR",
			"precio"=> 7.3300,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "29110200453",
			"descripcion"=> "CUCHILLA NO. PARTE 112946 AI",
			"precio"=> 4044.0000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "25610300459",
			"descripcion"=> "EMPAQUE PLASTICA/O P/REGADERA",
			"precio"=> 8.0000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "247103000460",
			"descripcion"=> "ENSAMBLE COMPLETO EN JUEGO P/EMPOTRAR",
			"precio"=> 213.9500,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "27410100462",
			"descripcion"=> "ESTOPA",
			"precio"=> 50.8654,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "29110200463",
			"descripcion"=> "FILTRO HIDRAULICA/O NO. PARTE 1346028CL",
			"precio"=> 432.9167,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "29110200464",
			"descripcion"=> "FILTRO L/COMB NO. PARTE D145357",
			"precio"=> 123.6400,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "29110400465",
			"descripcion"=> "GARRAFON PLASTICA/O 2LTS",
			"precio"=> 4.3500,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "29110100469",
			"descripcion"=> "HILO CAÑAMO EN ROLLO",
			"precio"=> 16.8500,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "29110200472",
			"descripcion"=> "JUNTA EN JUEGO NO. PARTE A77858",
			"precio"=> 717.9100,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "29110200473",
			"descripcion"=> "JUNTA EN JUEGO NO. PARTE A77673",
			"precio"=> 1374.6200,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "29110500474",
			"descripcion"=> "PASADOR MAUSER 3\"",
			"precio"=> 6.0000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "29110200475",
			"descripcion"=> "MENSULA P/MALACATE",
			"precio"=> 178.0800,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "25610400486",
			"descripcion"=> "LIGA NO. PARTE 238-5273",
			"precio"=> 26.0000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "25610400487",
			"descripcion"=> "LIGA NO. PARTE 238-5277",
			"precio"=> 90.0000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "247103000493",
			"descripcion"=> "LLAVE INDIVIDUAL SOLDABLE EN JUEGO C/MANERAL C/2PZAS",
			"precio"=> 189.0000,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "247103000496",
			"descripcion"=> "MANERAL FUTURA EN JUEGO S/CHAPA C/2PZAS",
			"precio"=> 79.6100,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		 ]);
		DB::table('catarticulos')->insert([
			"clave"=> "29110100497",
			"descripcion"=> "MANGUERA PLASTICA/O TRAMADA 1/4\" DIAM",
			"precio"=> 5.8500,
            'bactivo'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
		]);

    }

}
