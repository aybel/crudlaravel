<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function index()
    {
        //Mandamos el catálogo de estados
        $comboEstados = ['Baja California', 'Baja California Sur', 'Campeche'];
        $comboCategoria = ['Nacional', 'Extranjero'];
        return view('proveedores.index', compact('comboEstados', 'comboCategoria'));
    }
}
