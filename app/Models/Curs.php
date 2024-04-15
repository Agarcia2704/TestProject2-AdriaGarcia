<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curs extends Model
{
    use HasFactory;

    protected $table = 'curs'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nom',
        'etapa',
        'descripcio',
        'visible',
    ];

    public static function getCurs() {
        return self::all();
    }
}