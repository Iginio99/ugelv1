<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acta extends Model
{
    use HasFactory;

    protected $table = 'actas';
    protected $fillable = [
        'dni',
        'ap_paterno',
        'ap_materno',
        'nombres',
        'tipo_doc',
        'subtipo_doc',
        'numero',
        'periodo1',
        'fecha_doc',
        'insitucion',
        'distrito',
        'firma',
        'foto',
        'fecha_registro',
        'observacion',
        'idUsuario'
    ];
}
