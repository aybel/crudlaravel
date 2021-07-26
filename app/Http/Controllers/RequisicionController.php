<?php

namespace App\Http\Controllers;

use App\Models\Requisicion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequisicionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('requisiciones.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $comboDependencias = DB::table('catestorg')->get()->pluck('nombre', 'id');
        $comboPartidas = [1 => '2111-Materiales, útiles y equipos menores de oficina', 2 => '2161-Material de limpieza', 3 => '3111-Servicio de energía eléctrica', 4 => '3121-Servicio de gas', 5 => '3131-Servicio de agua'];
        $comboClaves = [1 => '14010101-020103010101-224C0213010000L', 2 => '14010101-020203010201-224C0213010000L', 3 => '14010101-020203010202-224C0214000500T'];
        $comboMeses = [1 => 'Enero', 2 => 'Febrero', '3' => 'Marzo', 4 => 'Abril', '5' => 'Mayo', '6' => 'Junio', '7' => 'Julio', '8' => 'Agosto', '9' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', 12 => 'Diciembre'];

        return view('requisiciones.create', compact('comboDependencias', 'comboPartidas', 'comboClaves', 'comboMeses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'fecha_elaboracion' => 'required|max:10',
            'catestorg_id' => 'required',
            'claves_id' => 'required',
            'catpar_id' => 'required',
            'mes' => 'required',
            'concepto' => 'required',
            'revisa' => 'required',
            'autoriza' => 'required'
        ]);

        DB::table('requisiciones')->insert([
            'fecha_elaboracion' => $data['fecha_laboracion'],
            'catestorg_id' => $data['catestorg_id'],
            'claves_id' => $data['claves_id'],
            'fecha_elcatpar_idaboracion' => $data['catpar_id'],
            'mes' => $data['mes'],
            'revisa' => $data['revisa'],
            'catstatus_id' => '1', //1 creado
            'autoriza' => $data['autoriza'],

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Requisicion  $requisicion
     * @return \Illuminate\Http\Response
     */
    public function show(Requisicion $requisicion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Requisicion  $requisicion
     * @return \Illuminate\Http\Response
     */
    public function edit(Requisicion $requisicion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Requisicion  $requisicion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requisicion $requisicion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Requisicion  $requisicion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requisicion $requisicion)
    {
        //
    }
}
