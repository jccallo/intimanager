<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'tipo_carrera',
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
