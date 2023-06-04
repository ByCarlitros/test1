@extends('templates.master')

@section('contenido-normal')
<div class="row mt-1">
    <div class="col">
    <h4>DEBUG MODE</h4>
    </div>
</div>
<div class="row">
  <div class="col-12 col-lg-9 text-center px-4 g-2 align-items-center">
    <div class="card-group">
    <div class="card">
      <img src="{{asset('images/images.jpg')}}" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">Listado de Profesores</h5>
      <p class="card-text">Gestiona la lista de profesores registrados para revisar su informacion actualizada.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      <div class="d-grid gap-2">
        <button class="btn btn-outline-primary" type="button">Entrar</button>
      </div>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">Listado de alumnos</h5>
      <p class="card-text">Gestiona la lista de alumnos para asi mantener su informacion actualizada.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      <div class="d-grid gap-2">
        <button class="btn btn-outline-primary" type="button">Entrar</button>
      </div>
    </div>
  </div>  
  <div class="card">
    <img src="..." class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">Estado de Propuestas</h5>
      <p class="card-text">Gestiona el estado de las propuestas de los alumnos para asi establecer su estado correspondiente.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      <div class="d-grid gap-2">
        <button class="btn btn-outline-primary" type="button">Entrar</button>
      </div>
    </div>
  </div>
</div>
@endsection