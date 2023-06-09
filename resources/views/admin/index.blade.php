@extends('templates.master')

@section('contenido-normal')

<div class="row">
  <div class="col-12 col-lg-9 text-center px-4 g-2 align-items-center">
    <div class="card-group">
    <div class="card">
      <img src="{{asset('images/thumb-becas-santander.jpg')}}" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">Listado de Profesores</h5>
      <p class="card-text">Gestiona la lista de profesores registrados para revisar su informacion actualizada.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      <div class="d-grid gap-2">
        <a class="btn btn-outline-primary" href="{{route('profesores.lista')}}" type="button">Entrar</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('images/Bienvenida-PACE-propedeutico-USM-5.jpg')}}" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">Listado de alumnos</h5>
      <p class="card-text">Gestiona la lista de alumnos para asi mantener su informacion actualizada.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      <div class="d-grid gap-2">
        <a class="btn btn-outline-primary" href="{{route('estudiantes.lista')}}" type="button">Entrar</a>
      </div>
    </div>
  </div>  
  <div class="card">
    <img src="{{asset('images/webimage-4AEA2AC6-F039-4DD7-A99B9BE6F7F66CCC.jpg')}}" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">Estado de Propuestas</h5>
      <p class="card-text">Gestiona el estado de las propuestas de los alumnos para asi establecer su estado correspondiente.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      <div class="d-grid gap-2">
        <a class="btn btn-outline-primary"  href="{{route('admin.edit')}}" type="button">Entrar</a>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script-referencias')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
@endsection

@section('script-manual')
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

</script>
@endsection