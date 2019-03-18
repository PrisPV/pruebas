@extends('layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('areas.index') }}
@endsection
@section('content')
<div class="card">
  <div class="card-header">
    Areas
    @can('areas.create')
    <a href="{{route('areas.create')}}" class="btn btn-sm btn-primary float-right">Crear</a>
    @endcan
  </div>

  <div class="card-body table-responsive">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th width="10px">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($areas as $area)
        <tr>
          <td>{{$area->name}}</td>
          <td>{{$area->description}}</td>
          <td width="10px">
            <div class="dropdown">
              <button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Acciones
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @can('areas.show')
                <a href="{{route('areas.show',$area->id)}}" class="dropdown-item">Ver</a>
                @endcan
                @can('areas.edit')
                <a href="{{route('areas.edit',$area->id)}}" class="dropdown-item">Editar</a>
                @endcan
                @if($area->slug!='admin' && $area->slug!='profesor' && $area->slug!='estudiante')
                @can('areas.destroy')
                {!! Form::open(['route'=>['areas.destroy',$area->id],'method'=>'delete']) !!}
                <button class="dropdown-item">Eliminar</button>
                {!! Form::close() !!}
                @endcan
                @endif
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{$areas->render()}}
  </div>
</div>
@endsection
