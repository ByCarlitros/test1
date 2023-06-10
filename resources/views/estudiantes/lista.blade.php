@extends('templates.master')

@section('contenido-normal')
<div class="row">
    <div class="col-12 col-lg-9 order-last order-lg-first">
        <div class="card">
            <div class="card-header">Lista de alumnos ingresados</div>
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
                @foreach($estudiantes as $index => $estudiante)
                    <tr>
                        <td class="align-middle">{{$estudiante->rut}}</td>
                        <td class="align-middle">{{$estudiante->nombre}}</td>
                        <td class="align-middle">{{$estudiante->apellido}}</td>
                        <td class="align-middle">{{$estudiante->email}}</td>
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
                    <form  action="{{route('estudiantes.store')}}">
                        @method('POST')
                        @csrf
                        <div class="mb-3">
                            <label for="rut">Rut</label>
                            <input type="text" id="rut" name="rut" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="apellido">Apellido</label>
                            <input type="text" id="apellido" name="apellido" class="form-control">
                        </div>
                        <div class="input-group flex-nowrap ">
                            <span class="input-group-text text-end" id="addon-wrapping">@</span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <br>
                        <div class="mb-3">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="submit">Agregar</button>
                                <button class="btn btn-primary" type="button">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    
    <a class="btn btn-primary me-md-2" href="{{route('profesores.lista')}}"type="button">Cambiar a profesores</a>
</div>

@endsection