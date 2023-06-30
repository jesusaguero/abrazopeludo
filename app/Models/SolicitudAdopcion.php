<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolicitudAdopcion extends Model
{
    protected $table = 'solicitud_adopcion'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'id_solicitud_adopcion'; // Clave primaria de la tabla

    protected $fillable = [
        'id_usuario',
        'id_mascota',
        'id_situacion',
        'descripcion',
        // otros campos rellenables aquí si los tienes
    ];

    public $timestamps = false; // Si no necesitas los campos de timestamp (created_at, updated_at)
}
