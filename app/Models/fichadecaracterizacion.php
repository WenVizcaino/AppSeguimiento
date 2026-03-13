<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fichadecaracterizacion extends Model
{
    protected $table='tbl_fichadecaracterizacion';

    protected $primaryKey = 'NIS';

    public $timestamps = false;

    protected $fillable = [
        'Codigo',
        'Denominacion',
        'Direccion ',
        'Observaciones'

    ];
}
