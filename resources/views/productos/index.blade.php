@extends('layouts.principal')

@section('contenido')
<div class="row card-panel light-blue accent-1 center">
    <h1>Catálogo de producto</h1>
</div>

    @foreach($productos as $producto)
  <div class="row">
  <div class="card">
    <div class="card-content">
    <img src="{{ asset('img/'.$producto->imagen) }}" width="100%">
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab light-blue accent-1"><a  href="#{{ $producto->id }}">Nombre</a></li>
        <li class="tab light-blue accent-1"><a class="active" href="#{{ $producto->id }}1">Descripción</a></li>
        <li class="tab light-blue accent-1"><a href="#{{ $producto->id }}2">Precio</a></li>
      </ul>
    </div>
    <div class="card-content light-blue accent-2">
      <div id="{{ $producto->id }}">{{ $producto->nombre }}</div>
      <div id="{{ $producto->id }}1">{{ $producto->descripcion }}</div>
      <div id="{{ $producto->id }}2">{{ $producto->precio }}</div>
    </div>
  </div>
  </div>
    @endforeach
@endsection