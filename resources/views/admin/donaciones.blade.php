@extends('layouts.app3')

@section('content')
    <div class="table-responsive p-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="bg-primary text-white">ID DONACIÓN</th>
                    <th class="bg-primary text-white">ID USUARIO</th>
                    <th class="bg-primary text-white">ID MEDIO DE PAGO</th>
                    <th class="bg-primary text-white">MONTO</th>
                    <th class="bg-primary text-white">FECHA</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donaciones as $donacion)
                    <tr>
                        <td>{{ $donacion->id_donacion }}</td>
                        <td>{{ $donacion->id_users }}</td>
                        <td>{{ $donacion->id_medio_de_pago }}</td>
                        <td>{{ $donacion->monto }}</td>
                        <td>{{ $donacion->fecha }}</td>
                    </tr>
                @endforeach
            </tbody>
     </table>
    </div>

    <a href="{{route('admin.donar.informeDonacion')}}" class="btn btn-success">Descargar Reporte</a>

@endsection