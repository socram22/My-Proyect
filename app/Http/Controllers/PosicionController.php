<?php

namespace App\Http\Controllers;

use App\Posicion;
use Illuminate\Http\Request;

class PosicionController extends Controller
{

    public function index()
    {
        $posicion=Posicion::all();
        return view('ofertas_de_trabajo',['posicion'=>$posicion,]);
    }

    public function addPosicion(){
        $p=Posicion::create(['posicion' => request()->input('posicion')]);

        $posicion=new Posicion();
        $empresa= request()->input('empresa');
        $titulo= request()->input('titulo');
        $descripcion= request()->input('descripcion');
        $cantidad_depersonas= request()->input('cantidad_de_personas');
        $limite_de_aplicantes= request()->input('limite_de_aplicantes');
        $activa= request()->input('activa');


        $posicion->empresa=$empresa;
        $posicion->titulo=$titulo;
        $posicion->descripcion=$descripcion;
        $posicion->cantidad_depersonas=$cantidad_depersonas;
        $posicion->limite_de_aplicantes=$limite_de_aplicantes;
        $posicion->activa=$activa;
        $posicion->save();




        return response()->json(['p' => $p,'posicion'=>$posicion,]);
    }
    public function editPosicion(){
        $id=request()->input('id');
        $p= Posicion::find($id);
        $p->p=request()->input('p');
        $p->save();




        $posicion=Posicion::find($id);
        $empresa= request()->input('empresa');
        $titulo= request()->input('titulo');
        $descripcion= request()->input('descripcion');
        $cantidad_depersonas= request()->input('cantidad_depersonas');
        $limite_de_aplicantes= request()->input('limite_de_aplicantes');
        $activa= request()->input('activa');


        $posicion->empresa=$empresa;
        $posicion->titulo=$titulo;
        $posicion->descripcion=$descripcion;
        $posicion->cantidad_depersonas=$cantidad_depersonas;
        $posicion->limite_de_aplicantes=$limite_de_aplicantes;
        $posicion->activa=$activa;
        $posicion->save();




        return response()->json(['p' => $p,'posicion'=>$posicion,]);
    }
    public function deletePosicion(){
        $id=request()->input('id');
        Posicion::find($id)->delete();

        return response()->json(['id' => $id]);

    }
}
