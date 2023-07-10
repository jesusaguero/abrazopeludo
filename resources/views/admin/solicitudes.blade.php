@extends('layouts.app3')

@section('content')
    <h1 class="mb-4">Solicitudes de adopción</h1>

    <div class="table-responsive p-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="bg-primary text-white">ID de solicitud</th>
                    <th class="bg-primary text-white">ID de usuario</th>
                    <th class="bg-primary text-white">ID de mascota</th>
                    <th class="bg-primary text-white">ID de situación</th>
                    <th class="bg-primary text-white">Descripción</th>
                    <th class="bg-primary text-white">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($solicitudes as $solicitud)
                    <tr>
                        <td>{{ $solicitud->id_solicitud_adopcion }}</td>
                        <td>{{ $solicitud->id_users }}</td>
                        <td>{{ $solicitud->id_mascota }}</td>
                        <td>{{ $solicitud->id_situacion }}</td>
                        <td>{{ $solicitud->descripcion }}</td>
                        <td>
                            <!-- Botón para ver detalles de la adopción -->
                            @if ($solicitud->id_solicitud_adopcion)
                                <a href="{{ route('admin.solicitud.show', $solicitud->id_solicitud_adopcion) }}" class="btn btn-info">Ver</a>
                            @endif

                            <!-- Botón para editar la adopción -->
                            @if ($solicitud->id_solicitud_adopcion)
                                <a href="{{ route('admin.solicitud.edit', $solicitud->id_solicitud_adopcion) }}" class="btn btn-primary">Editar</a>
                            @endif

                            <!-- Formulario para eliminar la adopción -->
                            @if ($solicitud->id_solicitud_adopcion)
                                <form action="{{ route('admin.solicitud.destroy', $solicitud->id_solicitud_adopcion) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Botón para agregar la adopción -->
        <a href="{{ route('admin.solicitud.create') }}" class="btn btn-success">Crear mascota</a>
    </div>
@endsection
