<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informacion extends Model
{
    use HasFactory;

    protected $table = 'informacion'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nom',
        'etapa',
        'descripcio',
        'visible',
    ];

    public static function getInformacion() {
        return self::all();
    }
}