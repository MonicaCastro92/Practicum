@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Editar Paciente</h2>
    <form action="{{ route('pacientes.update', $paciente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="cedula">Cedula</label>
            <input type="text" class="form-control" id="cedula" name="cedula" value="{{ $paciente->cedula }}" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $paciente->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="apellido">Edad</label>
            <input type="text" class="form-control" id="edad" name="edad" value="{{ $paciente->edad }}" required>
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $paciente->telefono }}" required>
        </div>
       
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection