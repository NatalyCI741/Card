<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha', 'nombre', 'tipo', 'valor_unidad', 'cantidad', 'total', 'proveedor', 'disponibilidad'
    ];
}
