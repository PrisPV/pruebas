@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header">Resultados de la búsqueda: {{$search}}</div>
  <div class="card-body">
  @if (isset($message))
  <div class='bg-warning' style='padding: 20px'>
  {{$message}}
  </div>
  @endif
  @if (isset($users))
  @foreach($users as $user)
  @php
    $solucion = App\Solucion::select()->where('user_id', '=', $user->id)->first();
    $cuestionario = App\Cuestionario::select()->where('id', '=', $solucion->cuestionario_id)->first();
    $asignatura = App\Asignatura::select()->where('id', '=', $cuestionario->asignatura_id)->first();
    @endphp
    <div class="card-header">Soluciones</div>
  <div class="card-body table-responsive">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Estudiante</th>
          <th>Intento</th>
          <th>Nota</th>
          <th>Fecha límite</th>
          <th>Fecha resuelto</th>
          <th>Duración</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$solucion->user->name}}</td>
          <td>{{$solucion->intentos}}</td>
          <td>{{$solucion->nota}}/100</td>
          <td>{{$solucion->fecha_limite}}</td>
          <td>{{$solucion->fecha_resuelto}}</td>
          <td>
    <a href="{{route('cuestionarios.solucion',[$asignatura->id,$solucion->id])}}" class="btn btn-sm btn-default">Ver</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  @endforeach          
  </div>
@endif
</div>
@endsection
