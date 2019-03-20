@extends('layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('areas.show', $area) }}
@endsection
@section('content')
<div class="card">
<p>hola</p>
<div class="card-header">Area: {{$area->name}}</div>
  <div class="card-body">
    <p><strong>Nombre</strong> {{$area->nombre}}</p>
  </div>
</div>
@endsection
