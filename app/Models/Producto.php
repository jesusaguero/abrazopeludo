<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';
    protected $primaryKey = 'id_producto';
    public $timestamps = false;

    protected $fillable = [
        'id_tipo',
        'id_estado',
        'nombre',
        'precio',
        'descripcion',
        'cantidad',
    ];

    public function tipo()
    {
        return $this->belongsTo(Categoria::class, 'id_tipo');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
}