@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Editar Cita</h2>
    <form action="{{ route('citas.update', $cita->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombrepaciente">Paciente</label>
            <input type="text" class="form-control" id="nombrepaciente" name="nombrepaciente" value="{{ $cita->nombrepaciente }}" required>
        </div>
       
        <div class="form-group">
            <label for="nombremedico">Medico</label>
            <input type="text" class="form-control" id="nombremedico" name="nombremedico" value="{{ $cita->nombremedico }}" required>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="text" class="form-control" id="fecha" name="fecha" value="{{ $cita->fecha }}" required>
        </div>

        <div class="form-group">
            <label for="motivo">Motivo</label>
            <input type="text" class="form-control" id="motivo" name="motivo" value="{{ $cita->motivo }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection