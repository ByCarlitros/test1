@extends('templates.master')

@section('contenido-normal')
<div class="row">
    <div class="col-12 col-lg-9 order-last order-lg-first">
        <div class="card">
            <div class="card-header">Lista de propuestas ingresadas</div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Rut</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($propuestas as $index => $propuesta)
                    <tr>
                        <td class="align-middle">{{$propuesta->id}}</td>
                        <td class="align-middle">{{$propuesta->estudiante_rut}}</td>
                        <td class="align-middle">{{$propuesta->fecha}}</td>
                        <td class="align-middle">{{$propuesta->documento}}</td>
                        <td class="align-middle">{{$propuesta->estado}}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="{{route(''),$propuesta->id}}">
                                        <span class="material.icons">save</span>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-primary me-md-2" type="button">Cambiar a profesores</button>
    <button class="btn btn-primary" type="button">Volver al menu</button>
</div>
@endsection