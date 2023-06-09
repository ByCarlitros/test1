@extends('templates.master')

@section('contenido-normal')
<div class="row">
    <div class="col-12 col-lg-9">
        <div class="card-group p-2">
            <div class="card">
                <img src="{{asset('images/Amedirh-1-d1e1ccb6.jpeg')}}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Nuevo Proyecto</h5>
                    <p class="card-text">Como estudiante, puede crear una nueva propuesta para que algun profesor pueda revisarla.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <div class="d-grid gap-2">
                        <a class="btn btn-outline-primary" href="{{route('estudiantes.proyecto')}}" type="button">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="card p-2">
                <img src="{{asset('images/images_1.jpg')}}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Revisar propuestas</h5>
                    <p class="card-text">Elija el perfil del estudiante para asi revisar el estado de sus propuestas respectivas.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <div class="d-grid gap-2">
                        <a class="btn btn-outline-primary" href="#" type="button">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/1366_2000.jpg')}}" class="card-img-top" >
                <div class="card-body">
                    <h5 class="card-title">Retroalimentaciones</h5>
                    <p class="card-text">Gestione sus propuestas ya revisadas por su profesor para asi poder determinar sus cambios.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <div class="d-grid gap-2">
                        <a class="btn btn-outline-primary" href="#" type="button">Entrar</a>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection