<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aprendices extends Model
{
    protected $table = 'tbl_aprendices';
    protected $primaryKey = 'NIS';
    public $timestamps = false;

    protected $fillable = [
        'Numdoc',
        'Nombres',
        'Apellidos',
        'Direccion',
        'Telefono',
        'CorreoInstitucional',
        'CorreoPersonal',
        'sexo',
        'fechaNacimiento'
    ];
}
