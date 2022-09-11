<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/*
* @property int $id
* @property character varying $nombre
* @property character varying $email
* @property character varying $direccion
* @property timestamp without time zone $created_at
* @property timestamp without time zone|null $updated_at
*/

class Cooperante extends Model
{
    use HasFactory;

    protected $table = 'cooperante';
    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'email',
        'direccion'
    ];
}
