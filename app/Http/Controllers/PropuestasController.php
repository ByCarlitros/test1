<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Estudiante;
use App\Models\Propuesta;
class PropuestasController extends Controller
{
    public function enter(Request $req) {
        $estudiante = Estudiante::all();
        return redirect()->route('propuestas.show', compact('estudiante'));
    }
    
    
    public function index() {
        $estudiantes = Estudiante::all();
        return view('admin.edit', compact('estudiantes'));
    }
    public function create(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.proyecto', compact('estudiantes'));
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
    
    public function destroyComment(Estudiante $estudiante, Profesor $profesor) {
        $propuesta = Propuesta::where('estudiante_rut', $estudiante->rut)->first();
        $propuesta->profesores()->detach($profesor->id);
        return redirect()->route('propuestas.show', $estudiante);
      }
    
      public function download($fileName) {
        return Storage::download('propuestas/' . $fileName);
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
        return redirect()->route('admin.change');
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
