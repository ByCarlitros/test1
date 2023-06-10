<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesoresController extends Controller
{
    public function index()
    {
        return view('profesores.index');
    }

    public function show() {
        $profesores = Profesor::all();
        return view('profesores.lista', compact('profesores'));
      }
    public function create()
    {
        $profesores = Profesor::orderBy('id')->get();
        return view('profesores.lista');
    }

    public function store(Request $request){
        $profesor = new Profesor();
        $profesor->nombre= $request->nombre;
        $profesor->apellido= $request->apellido;
        $profesor->email= $request->email;
        
        $profesor->save();
        return redirect()->route('profesores.lista', compact('profesor'));
    
    }
}
