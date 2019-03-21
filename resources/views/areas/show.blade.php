@extends('layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('areas.show', $area) }}
@endsection
@section('content')
<div class="card">
<div class="card-header">Reporte</div>
  <div class="card-body">
    <table id="areas" class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Area</th>
          <th>Asignatura</th>
          <th>Cuestionario</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$area->name}}</td>
          <td>{{$area->id}}</td>
          <td></td>
        </tr>
      </tbody>
    </table>


  </div>
</div>
@endsection
