@extends('layouts.app')

@section('content')
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Lista de Solicitudes de Adopción</h5>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.adopciones.create') }}" class="btn btn-primary mb-3">Crear Solicitud de Adopción</a>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ID Usuario</th>
                                <th>ID Mascota</th>
                                <th>ID Situación</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
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
                                        <a href="{{ route('admin.adopciones.show', $solicitud->id_solicitud_adopcion) }}" class="btn btn-info btn-sm">Ver</a>
                                        <a href="{{ route('admin.adopciones.edit', $solicitud->id_solicitud_adopcion) }}" class="btn btn-primary btn-sm">Editar</a>
                                        <form action="{{ route('admin.adopciones.destroy', $solicitud->id_solicitud_adopcion) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta solicitud de adopción?')">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
