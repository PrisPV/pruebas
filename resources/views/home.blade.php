@extends('layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('home') }}
@endsection
@section('content')
<div class="card">
  <div class="card-header">Bienvenido al sistema</div>
  <div class="card-body">
    <p>Gestión de cuestionarios - UTPL</p>    
  </div>
</div>
@endsection
