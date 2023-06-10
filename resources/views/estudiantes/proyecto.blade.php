@extends('templates.master')

@section('contenido-normal')

<div class="row">
    <div class="col-12 col-lg-6">
        <div class="card">
            <div class="card-header">Ingrese la propuesta a solicitar</div>
                <div class="card-body">
                    <form method="POST" class="form" action="{{route('propuestas.store')}}" enctype="multipart/form-data"> 
                        @method('POST')
                        @csrf
                        <div class="mb-4">
                            <label for="estudiante" class="form-label">Estudiante</label>
                            <select name="estudiante" id="estudiante" class="form-control">
                                @foreach($estudiantes as $estudiante)
                                    <option value="{{$estudiante->rut}}">{{$estudiante->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label for="propuesta"></label>
                            <input type="text" id="propuesta" name="propuesta" class="form-control" placeholder="Propuesta" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <label for="hora"></label>
                            <input type="text" id="hora" name="propuesta" class="form-control" placeholder="hora" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <label for="fecha"></label>
                            <input type="text" id="fecha" name="fecha" class="form-control" placeholder="fecha" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary me-md-2" type="submit">Enviar</button>
                            <button class="btn btn-primary" type="reset">Cancelar</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>



@endsection