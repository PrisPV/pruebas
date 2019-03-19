@extends('layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('areas.show', $area) }}
@endsection
@section('content')
<div class="card">
  <div class="card-header">Rol</div>
  <div class="card-body">
    <p><strong>Nombre</strong> {{$area->name}}</p>
    <p><strong>Descripcion</strong> {{$area->id}}</p>
  </div>
</div>
@endsection
