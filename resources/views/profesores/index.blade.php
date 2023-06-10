@extends('templates.master')

@section('contenido-normal')
<div class="row">
    <div class="col-12 col-lg-9">
        <div class="card-group">
            <div class="card">
                <img src="{{asset('images/depositphotos_120809516-stock-photo-business-partners-reviewing-some-documents.jpg')}}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Revisar propuestas</h5>
                    <p class="card-text">Revisa las propuestas de los estudiantes, revisadas por administradores.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <div class="d-grid gap-2">
                        <a class="btn btn-outline-primary" href="#" type="button">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/comentarios-destacados.jpg')}}" class="card-img-top" >
                <div class="card-body">
                    <h5 class="card-title">Comentarios</h5>
                    <p class="card-text">Revisa o realiza comentarios con respecto a las propuestas de los estudiantes.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <div class="d-grid gap-2">
                        <a class="btn btn-outline-primary" href="#" type="button">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/persona-usando-computadora-sobre-mesa_10551_10667.jpg')}}" class="card-img-top" >
                <div class="card-body">
                    <h5 class="card-title">Modificar Comentarios</h5>
                    <p class="card-text">Revise y compurebe que sus comentarios con respecto a la propuesta estan bien</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <div class="d-grid gap-2">
                        <a class="btn btn-outline-primary" href="{{route('estudiantes.lista')}}" type="button">Entrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
