@extends('templates.master')

@section('contenido-normal')
<div class="row">
    <div class="col-12 col-lg-9 order-last order-lg-first">
        <div class="card">
            <div class="card-header">Lista de profesores ingresados</div>
            <table class="table">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($profesores as $index => $profesor)
                    <tr>
                        <td class="align-middle">{{$index+1}}</td>
                        <td class="align-middle">{{$profesor->nombre}}</td>
                        <td class="align-middle">{{$profesor->apellido}}</td>
                        <td class="align-middle">{{$profesor->email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-12 col-lg-3 order-first order-lg-last">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <form method="POST" action="{{route('estudiantes.store')}}">
                        <div class="mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="apellido">Apellido</label>
                            <input type="text" id="apellido" name="apellido" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <span class="input-group-text" id="addon-wrapping">@</span>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="button">Agregar</button>
                                <button class="btn btn-primary" type="button">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-primary me-md-2" type="button">Cambiar a profesores</button>
    <button class="btn btn-primary" type="button">Volver al menu</button>
</div>

@endsection