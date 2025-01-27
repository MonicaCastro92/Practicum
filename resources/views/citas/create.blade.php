@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Crear Medico</h2>
    <form action="{{ route('citas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombrepaciente">Paciente</label>
            <input type="text" class="form-control" id="nombrepaciente" name="nombrepaciente" required>
        </div>
       
        <div class="form-group">
            <label for="nombremedico">Medico</label>
            <input type="text" class="form-control" id="nombremedico" name="nombremedico" required>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="text" class="form-control" id="fecha" name="fecha" required>
        </div>

        <div class="form-group">
            <label for="motivo">Motivo</label>
            <input type="text" class="form-control" id="motivo" name="motivo" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection