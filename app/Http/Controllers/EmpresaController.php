<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function mostrar_empresa(){
        return view('Empresa');

    }
}
