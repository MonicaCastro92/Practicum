@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Detalles de la Cita</h2>
    <p><strong>Nombre:</strong> {{ $cita->nombrepaciente }}</p>
    <p><strong>Medico:</strong> {{ $cita->nombremedico }}</p>
    <p><strong>Fecha:</strong> {{ $cita->fecha }}</p>
    <p><strong>Motivo:</strong> {{ $cita->motivo }}</p>
    <a href="{{ route('citas.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection