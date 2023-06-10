<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;


class EstudiantesController extends Controller
{
    public function index(){
        return view('estudiantes.index');
    }
    public function create()
  {
    return view('estudiantes.lista');
  }
  public function show() {
    $estudiantes = Estudiante::all();
    return view('estudiantes.lista', compact('estudiantes'));
  }
    public function store(Request $request){
        $estudiante = new Estudiante();
        $estudiante->rut = $request->rut;
        $estudiante->nombre= $request->nombre;
        $estudiante->apellido= $request->apellido;
        $estudiante->email= $request->email;
        $estudiante->save();
        return redirect()->route('estudiantes.lista');
    }
    public function edit(Estudiante $estudiante){
        $estudiantes = Estudiante::orderBy('rut')->get();
        
        // return view('jugadores.edit',compact('jugador'));
        return view('estudiantes.lista',compact(['estudiante']));
    }
    
}
