@extends('templates.master')

@section('contenido-normal')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">Editar propuesta del alumno de rut: {{$propuesta->estudiante_rut}}</div>
            <div class="card-body">
                <form  method ="POST" action="{{route('propuestas.update')}}">
                @method('put')
                @csrf
                <div class="mb-3">
                        <label class="form-label">Posición</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado" id="Aprobado" value=1 @if($propuesta->estado==1) checked @endif>
                            <label class="form-check-label" for="Aprobado">
                                Aprobado
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado" id="Rechazado" value=2 @if($propuesta->estado==2) checked @endif>
                            <label class="form-check-label" for="estado">
                                Rechazado
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado" id="En revision" value=0 @if($propuesta->estado==0) checked @endif>
                            <label class="form-check-label" for="En revision">
                                En revision
                            </label>
                        </div>
                
                </form>
            </div>
        </div>
    </div>
</div>
@endsection