<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        //Mandamos el catálogo de estados
      
        return view('main.index');
    }
}
