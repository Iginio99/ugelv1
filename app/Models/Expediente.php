<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;

    protected $table = 'expedientes';
    protected $fillable = [
        'dni',
        'ap_paterno',
        'ap_materno',
        'nombres',
        'tipo_doc',
        'numero',
        'periodo1',
        'fecha_de_exp_a_devolver',
        'proveido',
        'fecha_proveido',
        'num_exp_solicitud_devolucion',
        'periodo2',
        'fecha_devolucion',
        'firma',
        'foto',
        'fecha_registro',
        'observacion',
        'idUsuario'
    ];
}
