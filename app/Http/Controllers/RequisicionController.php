<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Catpar;
use App\Models\Catclave;
use App\Models\Catestorg;
use App\Models\Requisicion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
        //Requisiciones del usuario
        $requisiciones = auth()->user()->requisiciones_rel;
        return view('requisiciones.index', compact('requisiciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $comboDependencias = Catestorg::where('tipo', 'UE')->orderBy('clave')->get();
        $comboPartidas = Catpar::where('tipo', 'P')->orderBy('clave')->get();
        $comboClaves = Catclave::all(['id', 'clave']);
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
            'catestorgs_id' => 'required',
            'catclaves_id' => 'required',
            'catpars_id' => 'required',
            'mes' => 'required',
            'concepto' => 'required',
            'revisa' => 'required',
            'autoriza' => 'required'
        ]);



        DB::table('requisicions')->insert([
            'folio' => 1,
            'fecha_elaboracion' => $data['fecha_elaboracion'],
            'catestorg_id' => $data['catestorgs_id'],
            'catclave_id' => $data['catclaves_id'],
            'catpar_id' => $data['catpars_id'],
            'mes' => $data['mes'],
            'revisa' => $data['revisa'],
            'catstatu_id' => '1', //1 creado
            'autoriza' => $data['autoriza'],
            'user_id' => Auth::user()->id,
            'concepto' => $data['concepto']
        ]);

        //Redirecciona al action de la vista de todas las requisiciones
        return Redirect::route('requisiciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Requisicion  $requisicion
     * @return \Illuminate\Http\Response
     */
    public function show(Requisicion $requisicion)
    {
        return view('requisiciones.show', compact('requisicion'));
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
        $this->authorize('delete', $requisicion);

        $requisicion->delete();
        return Redirect::route('requisiciones.index');
    }
}
