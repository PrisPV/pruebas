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
    $solucion = App\Solucion::select()->where('id', '=', $user->user_id)->first();
  @endphp
  <table>
  <td>{{$user->name}}</td>
  </table>
  @endforeach          
  </div>
@endif
</div>
@endsection
