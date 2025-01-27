@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Crear Paciente</h2>
    <form action="{{ route('pacientes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cedula">Cedula</label>
            <input type="text" class="form-control" id="cedula" name="cedula" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="text" class="form-control" id="edad" name="edad" required>
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>
       
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection