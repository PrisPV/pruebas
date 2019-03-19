@extends('layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('areas.edit', $role) }}
@endsection
@section('content')
<div class="card">
  <div class="card-header">Rol</div>
  <div class="card-body">
    {!!Form::model($role,['route'=>['areas.update',$role->id],'method'=>'put'])!!}
    @include('areas.partials.form')
    {!!Form::close()!!}
  </div>
</div>
@endsection
