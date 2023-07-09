@extends('layouts.app3')

@section('content')
    <div class="card">
        <div class="card-header">Eliminar mascota</div>
        <div class="card-body">
            <p>¿Estás seguro de que deseas eliminar la mascota "{{ $mascota->nombre }}"?</p>
            <form action="{{ route('admin.adopciones.destroy', $mascota->id_mascota) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                <a href="{{ route('admin.adopciones.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
