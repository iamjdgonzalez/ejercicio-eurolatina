<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdministrarProyecto extends Model
{
    use HasFactory;

    protected $table = 'administrar_proyecto';
    public $timestamps = true;

    protected $fillable = [
        'cooperante_id',
        'proyecto_id',
        'fecha_asignacion',
        'monto'
    ];
}
