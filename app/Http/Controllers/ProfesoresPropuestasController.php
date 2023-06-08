<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesoresPropuestasController extends Controller
{
    public function store(Request $request){
        $profesor_propuesta = new ProfesorPropuesta();
        $profesor_propuesta->profesor_id = $request->profesor_id;
        $profesor_propuesta->propuesta_id= $request->propuesta_id;
        $profesor_propuesta->created_at = Carbon::now('America/Santiago');
        $profesor_propuesta->updated_at = Carbon::now('America/Santiago');
        $profesor_propuesta->comentario =$request->comentario;
        $profesor->save();
    
    }
    public function destroy(ProfesorPropuesta $profesor_propuesta){
        $jugador->delete();
        return redirect()->route('profesores.index');
    }
}
