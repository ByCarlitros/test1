@extends('templates.master')

@section('contenido-normal')

<div class="row">
    <div class="col-12 col-lg-6">
        <div class="card">
            <div class="card-header">Ingrese la propuesta a solicitar</div>
                <div class="card-body">
                    <form method="POST"action="{{route('propuestas.store')}}">
                        @csrf
                        <div class="mb-4">
                            <label for="estudiante" class="form-label">Estudiante</label>
                            <select name="estudiante" id="estudiante" class="form-control">
                                @foreach($estudiantes as $estudiante)
                                    <option value="{{$estudiante->rut}}">{{$estudiante->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="formFileSm" class="form-label">Small file input example</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary me-md-2" type="submit">Button</button>
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>



@endsection