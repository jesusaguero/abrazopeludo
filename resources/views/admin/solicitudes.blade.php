@extends('layouts.app3')

@section('content')
    <h1 class="mb-4">Solicitudes de adopción</h1>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID de solicitud</th>
                    <th>ID de usuario</th>
                    <th>ID de mascota</th>
                    <th>ID de situación</th>
                    <th>Descripción</th>
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

