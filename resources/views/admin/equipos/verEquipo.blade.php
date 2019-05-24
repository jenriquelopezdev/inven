@extends('layouts.app')
@section('titulo')
  Equipo
@endsection
@section('contenedor')
  @include('admin.navegacion')
  <div class="container mb-5">
    <h1 class="display-5 mt-3">Equipo {{$equipo[0]->id_equipo}}</h1>
    @isset($equipo[0]->equipoPersona->persona)
      <p class="lead">Asignado a</p>
      <table class="table table-hover table-striped">
        <thead>
          <th>Código de empleado</th>
          <th>Nombre</th>
          <th>Ubicación</th>
          <th>Jefe</th>
          <th>Correo</th>
          <th></th>
        </thead>
        <tbody>
          <tr>
            <td>{{$equipo[0]->equipoPersona->persona->codigo_empleado}}</td>
            <td>{{$equipo[0]->equipoPersona->persona->nombre}}</td>
            <td>{{$equipo[0]->equipoPersona->persona->ubicacion->planta}} {{$equipo[0]->equipoPersona->persona->ubicacion->departamento}}</td>
            <td>{{$equipo[0]->equipoPersona->persona->jefe}}</td>
            <td>{{$equipo[0]->equipoPersona->persona->correo}}</td>
            <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
          </tr>
        </tbody>
      </table>
      @else
        <button class="btn btn-success">Asignar este equipo</button>
    @endisset
    <hr>
    <div class="row">
      <div class="form-group col-4">
        <label for="">Tipo</label>
        <input type="text" class="form-control" value="{{$equipo[0]->tipo}}" readonly>
      </div>
      <div class="form-group col-4">
        <label for="">Marca</label>
        <input type="text" class="form-control" value="{{$equipo[0]->marca}}" readonly>
      </div>
      <div class="form-group col-4">
        <label for="">Modelo</label>
        <input type="text" class="form-control" value="{{$equipo[0]->modelo}}" readonly>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-4">
        <label for="">Procesador</label>
        <input type="text" class="form-control" value="{{$equipo[0]->procesador}}" readonly>
      </div>
      <div class="form-group col-4">
        <label for="">RAM</label>
        <input type="text" class="form-control" value="{{$equipo[0]->ram}}" readonly>
      </div>
      <div class="form-group col-4">
        <label for="">Disco duro</label>
        <input type="text" class="form-control" value="{{$equipo[0]->disco_duro}}" readonly>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-6">
        <label for="">Número de serie</label>
        <input type="text" class="form-control" value="{{$equipo[0]->ns}}" readonly>
      </div>
      <div class="form-group col-6">
        <label for="">Sistema operativo</label>
        <input type="text" class="form-control" value="{{$equipo[0]->sistema_operativo}}" readonly>
      </div>
    </div>

    <div class="row">
      <div class="form-group col">
        <label for="">Descripción</label>
        <textarea type="text" class="form-control" readonly>{{$equipo[0]->descripcion}}</textarea>
      </div>
    </div>

    <hr>

  </div>
@endsection
