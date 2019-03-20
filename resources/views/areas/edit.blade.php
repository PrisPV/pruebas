@extends('layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('areas.edit', $area) }}
@endsection
@section('content')
<div class="card">
  <div class="card-header">AreaS</div>
  <div class="card-body">
    {!!Form::model($area,['route'=>['areas.update',$area->id],'method'=>'put'])!!}
    @include('areas.partials.form')
    {!!Form::close()!!}
  </div>
</div>
@endsection
