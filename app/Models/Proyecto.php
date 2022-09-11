<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/*
* @property int $id
* @property character varying $nombre
* @property character varying $descripcion
* @property character varying $tecnologias
* @property timestamp without time zone $created_at
* @property timestamp without time zone|null $updated_at
*/

class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'proyecto';
    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'descripcion',
        'tecnologias'
    ];
}
