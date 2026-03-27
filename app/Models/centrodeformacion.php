<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CentroDeFormacion extends Model
{
    protected $table      = 'tbl_centrodeformacion';
    protected $primaryKey = 'NIS'; // ← clave primaria correcta
    public $timestamps    = false;

    protected $fillable = [
        'Codigo',
        'Denominacion',
        'Direccion',
        'Observaciones',
    ];
}
