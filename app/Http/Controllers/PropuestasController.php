<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Estudiante;
use App\Models\Propuesta;
class PropuestasController extends Controller
{
    public function enter(Request $req) {
        $estudiante = Estudiante::find($req->estudiantes);
        return redirect()->route('propuestas.show', compact('estudiante'));
    }
    
    public function index() {
        $estudiantes = Estudiante::all();
        return view('propuestas.index', compact('estudiantes'));
    }
    public function show(Estudiante $estudiante) {
        $profesores = Profesor::all();
        $propuestas = Propuesta::where('estudiante_rut', $estudiante->rut)->get();
    //    dd($propuestas);
        return view('propuestas.show', compact([
          'estudiante',
          'profesores',
          'propuestas'
        ]));
      }
      public function create(Estudiante $estudiante) {
        return view('propuestas.create', compact('estudiante'));
      }
    
    public function createComment(Estudiante $estudiante)
    {
        $profesores = Profesor::all();
        return view('propuestas.createComment', compact
        ([
            'estudiante',
            'profesores'
        ])
        );
    }
    
    public function store(Request $request)
    {
        $propuesta = new Propuesta();
        $file = $request->file('archivo');

    $fileName = $file->getClientOriginalName();
    Storage::putFileAs(
        'propuestas', $file, $fileName
    );

        Storage::setVisibility($fileName, 'public');

        $propuesta->fecha = Carbon::now();
        $propuesta->documento = $fileName;
        $propuesta->estado = 0;
        $propuesta->estudiante_rut = $estudiante->rut;
        $propuesta -> save();
        return redirect()->route('estudiantes.proyecto');
    }
    
    public function update(Request $request,Propuesta $propuesta){
        $propuesta->estado = $request->estado;
        $propuesta->save();
        return redirect()->route('admin.index');
    }

    public function subirArchivo(Request $request)
    {
        $datosArchivo = file_get_contents($archivo->getRealPath());

        $nuevoArchivo = new Archivo;
        $nuevoArchivo->nombre = $archivo->getClientOriginalName();
        $nuevoArchivo->contenido = $datosArchivo;
        $nuevoArchivo->save();

        return response()->json(['mensaje' => 'Archivo subido correctamente']);
    }
    public function destroy(Propuesta $propuesta) {
        $propuesta->delete();
        return redirect()->route('estudiantes.index');
    }
    
}
