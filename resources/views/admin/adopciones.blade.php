@extends('layouts.app3')

@section('content')
    <div class="table-responsive p-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="bg-primary text-white">ID_MASCOTA</th>
                    <th class="bg-primary text-white">ID_ESTADO</th>
                    <th class="bg-primary text-white">Nombre</th>
                    <th class="bg-primary text-white">Especie</th>
                    <th class="bg-primary text-white">Raza</th>
                    <th class="bg-primary text-white">Edad</th>
                    <th class="bg-primary text-white">Género</th>
                    <th class="bg-primary text-white">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mascotas as $mascota)
                    <tr>
                        <td>{{ $mascota->id_mascota }}</td>
                        <td>{{ $mascota->id_estado }}</td>
                        <td>{{ $mascota->nombre }}</td>
                        <td>{{ $mascota->especie }}</td>
                        <td>{{ $mascota->raza }}</td>
                        <td>{{ $mascota->edad }}</td>
                        <td>{{ $mascota->genero }}</td>
                        <td>
                            <!-- Botón para ver detalles de la adopción -->
                            <a href="{{ route('admin.adopciones.show', $mascota->id_mascota) }}" class="btn btn-info">Ver</a>

                            <!-- Botón para agregar la adopción -->
                            <a href="{{ route('admin.adopciones.create') }}" class="btn btn-success">Crear mascota</a>

                            <!-- Botón para editar la adopción -->
                            <a href="{{ route('admin.adopciones.edit', $mascota->id_mascota) }}" class="btn btn-primary">Editar</a>

                            <!-- Formulario para eliminar la adopción -->
                            <form action="{{ route('admin.adopciones.destroy', $mascota->id_mascota) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
