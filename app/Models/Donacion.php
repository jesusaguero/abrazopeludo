<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    use HasFactory;

    protected $table = 'donacion'; // Nombre de la tabla

    public $timestamps = false; // Desactivar los timestamps

    protected $primaryKey = 'id_donacion'; // Columna de la clave primaria

    protected $fillable = [
        'id_usuario',
        'id_medio_de_pago',
        'monto',
        'fecha',
    ];

    // Relaciones y otros métodos del modelo
}
