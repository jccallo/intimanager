<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'telefono',
        'direccion',
        'correo',
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
