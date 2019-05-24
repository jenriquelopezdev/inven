@extends('layouts.app')
@section('titulo')
  Inicio
@endsection
@section('contenedor')
  @include('admin.navegacion')
  <div class="container">
    <h1 class="display-5 mt-3">Listado de equipos</h1>
    @include('admin.equipos.acciones')
    {{$equipo}}
    
  </div>
@endsection
