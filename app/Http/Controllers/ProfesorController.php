<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function store(Request $request){
        $profesor = new Profesor();
        $profesor->id = $request->id;
        $profesor->nombre= $request->nombre;
        $profesor->apellido= $request->apellido;
        $profesor->email= $request->email;
        $profesor->save();
    
    }
    public function create(Profesor $profesor){
        $profesores = Profesor::orderBy('rut')->get();
        
        // return view('jugadores.edit',compact('jugador'));
        return view('estudiantes.lista',compact(['estudiante']));
    }
}
