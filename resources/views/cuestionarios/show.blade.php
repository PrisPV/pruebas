@extends('layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('cuestionarios.show', $asignatura, $cuestionario) }}
@endsection
@section('content')onclick="alertaRendirCuestionario();"
<div class="card">
  <div class="card-header">
    Cuestionario
    @can('cuestionarios.rendir')
    @if($cuestionario->intentos>$cuestionario->soluciones()->where('user_id',Auth::id())->count())
    <a href="#" class="btn btn-sm btn-primary float-right" onclick="alertaRendirCuestionario();">Rendir cuestionario</a>
    @endif
    @endcan
  </div>
  <div class="card-body">
    <p><strong>Descripcion:</strong> {{$cuestionario->descripcion}}</p>
    <p><strong>Intentos permitidos:</strong> {{$cuestionario->intentos}}</p>
    <p><strong>Fecha límite:</strong> {{$cuestionario->fecha_limite}}</p>
  </div>
</div>
<hr>
<div class="card">
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
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($soluciones as $solucion)
        <tr>
          <td>{{$solucion->user->name}}</td>
          <td>{{$solucion->intentos}}</td>
          <td>{{$solucion->nota}}/100</td>
          <td>{{$solucion->fecha_limite}}</td>
          <td>{{$solucion->fecha_resuelto}}</td>
          <td>{{$solucion->fecha_inicio->diffInMinutes($solucion->fecha_resuelto)}} min </td>
          <td>
            @can('cuestionarios.solucion')
            <a href="{{route('cuestionarios.solucion',[$asignatura->id,$solucion->id])}}" class="btn btn-sm btn-default">Ver</a>
            @endcan
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{$soluciones->render()}}
  </div>
</div>
@endsection
@push('js')
<script type="text/javascript">
function alertaRendirCuestionario(){
  var confirmacion = confirm("Esta seguro de rendir el cuestionario?. Se registrara un intento de solucion");
  if(confirmacion){
    location.href = "{{route('cuestionarios.rendir',[$asignatura->id,$cuestionario->id])}}";
  }
}
</script>
@endpush
