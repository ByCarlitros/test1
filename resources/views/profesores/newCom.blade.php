@extends('templates.master')

@section('contenido-normal')
<div class="row">
    <div class="col-3">
    <div class="col-8">
        <form method="POST" class="p-3"action="{{route('propuestas.storeComment', $estudiante)}}">
            @method('POST')
        </form>
    </div>
    </div>
</div>
@endsection