<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropuestaController extends Controller
{
    public function store(Request $request)
    {
        $propuesta = new Propuesta();
        $propuesta -> estudiante_rut = $request->rut;
        $propuesta -> documento = $request->documento;
        $propuesta -> estado = 0;
        $propuesta -> fecha = Carbon::now('America/Santiago');
        $propuesta -> created_at = Carbon::now('America/Santiago');
        $propuesta -> updated_at = Carbon::now('America/Santiago');
        $propuesta -> save();
        return redirect()->route('estudiantes.proyecto');
    }

    public function update(Request $request,Propuesta $jugador){
        $propuesta->estado = $request->estado;
        $jugador->save();
        return redirect()->route('admin.index');
    }

    

    
}
