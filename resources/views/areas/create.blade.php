@extends('layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('areas.create') }}
@endsection
@section('content')
<div class="card">
  <div class="card-header">Area</div>
  <div class="card-body">
    {!!Form::open(['route'=>'areas.store'])!!}
    @include('areas.partials.form')
    {!!Form::close()!!}
  </div>
</div>
@endsection
