@extends('layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('areas.show', $area) }}
@endsection
@section('content')
<div class="card">
<div class="card-header">Reporte de {{$area->name}}</div>
  <div class="card-body">
    <table id="areas" class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Asignatura</th>
          <th>Cuestionario</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody>
      @foreach($area->asignaturas as $asignatura)
      @foreach($asignatura->cuestionarios as $cuestionario)
        <tr>
          <td>{{$asignatura->nombre}}</td>
          <td>{{$cuestionario->descripcion}}</td>
          <td>{{$cuestionario->estado}}</td>
          @endforeach   
        </tr>
      @endforeach  
      </tbody>
    </table>
  </div>
</div>
@endsection
