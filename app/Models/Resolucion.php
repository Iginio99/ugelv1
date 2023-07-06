<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resolucion extends Model
{
    use HasFactory;

    protected $table = 'resoluciones';
    protected $fillable = [
        'dni',
        'ap_paterno',
        'ap_materno',
        'nombres',
        'num_rd',
        'periodo',
        'fecha',
        'asunto',
        'proy',
        'not_oficiona',
        'not_notificador',
        'fecha_notificacion',
        'firma',
        'foto',
        'fecha_registro',
        'observacion',
        'idUsuario'
    ];
}
