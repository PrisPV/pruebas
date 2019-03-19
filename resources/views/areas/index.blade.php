@extends('layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('areas.index') }}
{{ Breadcrumbs::render('asignaturas.index') }}
@endsection
@section('content')
<div class="card">
<div class="card-header">
<div class="card-body table-responsive">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th width="10px">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($areas as $area)
        <tr>
          <td>{{$area->area_id}}</td>
          <td>{{$area->name}}</td>
          <td width="10px">
            <div class="dropdown">
              <button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Acciones
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @can('asignaturas.index')
                <a href="{{route('areas.index',$area->area_id)}}" class="dropdown-item">Ver Reporte</a>
                @endcan
              </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{$areas->render()}}
  </div>
  </div>
</div>
@endsection
