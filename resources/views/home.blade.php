@extends('layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('home') }}
@endsection
@section('content')
<div class="card">
  <div class="card-header">Bienvenido al sistema - Gestión de Cuestionarios</div>
  @if(Auth::user()->esAdministrador())
  <div class="card-body">
  Buscador de resultados:
  <p>Buscar por cédula
  <form class="navbar-form navbar-left" role="search" action="{{url('home/searchredirect')}}">
  <div class="form-group">
  <input type="text" class="form-control" name='search' placeholder="Ingrese la cédula" />
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
</form>
</p>
<p>Buscar por Apellido:
 <form class="navbar-form navbar-left" role="search" action="{{url('home/searchredirect')}}">
 <div class="form-group">
  <input type="text" class="form-control" name='search' placeholder="Ingrese el apellido" />
 </div>
 <button type="submit" class="btn btn-default">Buscar</button>
</form>
</p>
</div>
@endif
  </div>
@endsection
