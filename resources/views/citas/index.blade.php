@extends ('layouts.master')

@section ('title', 'Cita')

@section ('content')

    <h1>CITA MEDICA</h1>
    <a href="{{ route('citas.create') }}" class="btn btn-primary mb-3">Nueva Cita</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre del Paciente</th>
                <th>Nombre del medico </th>
                <th>fecha</th>
                <th>Motivo</th>
            </tr>
        </thead>

        <tbody>
            @foreach($citas as $cita)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $cita->nombrepaciente }}</td>
                    <td>{{ $cita->nombremedico }}</td>
                    <td>{{ $cita->fecha }}</td>
                    <td>{{ $cita->motivo }}</td>
                    <td>
                        <a href="{{ route('citas.show', $cita->id) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('citas.destroy', $cita->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    
@endsection