<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contingut extends Model
{
    use HasFactory;

    protected $table = 'continguts';

    protected $fillable = [
        'titol',
        'contingut',
        'visibilitat',
    ];

    public static function getContingut() {
        return self::all();
    }
}