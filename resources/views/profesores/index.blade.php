@extends('templates.master')

@section('contenido-normal')
<div class="card">
    <img src="..." class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">Revisar propuestas</h5>
        <p class="card-text">Revisa las propuestas de los estudiantes, revisadas por administradores.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        <div class="d-grid gap-2">
            <button class="btn btn-outline-primary" type="button">Entrar</button>
        </div>
    </div>
</div>
<div class="card">
    <img src="..." class="card-img-top" >
    <div class="card-body">
        <h5 class="card-title">Comentarios</h5>
        <p class="card-text">Revisa o realiza comentarios con respecto a las propuestas de los estudiantes.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        <div class="d-grid gap-2">
            <button class="btn btn-outline-primary" type="button">Entrar</button>
        </div>
    </div>
</div>
<div class="card">
    <img src="..." class="card-img-top" >
    <div class="card-body">
        <h5 class="card-title">Modificar Comentarios</h5>
        <p class="card-text">Edita o borra comentarios de los maestro.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        <div class="d-grid gap-2">
            <button class="btn btn-outline-primary" type="button">Entrar</button>
        </div>
    </div>
</div>
@endsection
