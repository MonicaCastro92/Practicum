@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Detalles del Paciente</h2>
    <p><strong>Cedula:</strong> {{ $paciente->cedula }}</p>
    <p><strong>Nombre:</strong> {{ $paciente->nombre }}</p>
    <p><strong>Edad:</strong> {{ $paciente->edad }}</p>
    <p><strong>Telefono:</strong> {{ $paciente->telefono }}</p>
    
    <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
