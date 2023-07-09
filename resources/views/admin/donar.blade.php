@extends('layouts.app3')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID Donación</th>
                <th>ID Usuario</th>
                <th>ID Medio de Pago</th>
                <th>Monto</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donaron as $donare)
                <tr>
                    <td>{{ $donare->id_donacion }}</td>
                    <td>{{ $donare->id_users }}</td>
                    <td>{{ $donare->id_medio_de_pago }}</td>
                    <td>{{ $donare->monto }}</td>
                    <td>{{ $donare->fecha }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection