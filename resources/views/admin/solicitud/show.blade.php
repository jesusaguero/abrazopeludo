@extends('layouts.app')

@section('content')
    <div class="row mt-3">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Detalles de la Solicitud de Adopción</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $solicitud->id_solicitud_adopcion }}</td>
                            </tr>
                            <tr>
                                <th>ID Usuario</th>
                                <td>{{ $solicitud->id_users }}</td>
                            </tr>
                            <tr>
                                <th>ID Mascota</th>
                                <td>{{ $solicitud->id_mascota }}</td>
                            </tr>
                            <tr>
                                <th>ID Situación</th>
                                <td>{{ $solicitud->id_situacion }}</td>
                            </tr>
                            <tr>
                                <th>Descripción</th>
                                <td>{{ $solicitud->descripcion }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
