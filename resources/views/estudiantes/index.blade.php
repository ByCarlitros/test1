@extends('templates.master')

@section('contenido-normal')
<div class="card">
    <img src="..." class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">Nuevo Proyecto</h5>
        <p class="card-text">Como estudiante, puede crear una nueva propuesta para que algun profesor pueda revisarla.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        <div class="d-grid gap-2">
            <button class="btn btn-outline-primary" type="button">Entrar</button>
        </div>
    </div>
</div>
<div class="card">
    <img src="..." class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">Revisar propuestas</h5>
        <p class="card-text">Elija el perfil del estudiante para asi revisar el estado de sus propuestas respectivas.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        <div class="d-grid gap-2">
            <button class="btn btn-outline-primary" type="button">Entrar</button>
        </div>
    </div>
</div>
<div class="card">
    <img src="..." class="card-img-top" >
    <div class="card-body">
        <h5 class="card-title">Retroalimentaciones</h5>
        <p class="card-text">Gestione sus propuestas ya revisadas por su profesor para asi poder determinar sus cambios.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        <div class="d-grid gap-2">
            <button class="btn btn-outline-primary" type="button">Entrar</button>
        </div>
    </div>
</div>
@endsection