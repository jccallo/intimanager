<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class liability extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}