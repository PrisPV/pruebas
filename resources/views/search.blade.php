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
<hr />
@if (isset($users))
        @foreach($users as $user):
            $resultado = App\User::select()->where('id', '=', $user->id)->first();
            <p>{{$resultado->name}}</p>
        @endforeach
@endif
  </div>
</div>
@endsection
