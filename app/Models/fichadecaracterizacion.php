<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fichadecaracterizacion extends Model
{
    protected $table      = 'tbl_fichadecaracterizacion';
    protected $primaryKey = 'NIS';
    public $incrementing  = true;
    protected $keyType    = 'int';
    public $timestamps    = false;

    public function getRouteKeyName()
    {
        return 'NIS';
    }

    protected $fillable = [
        'Codigo',
        'Denominacion',
        'Cupo',
        'fechaInicio',
        'fechaFin',
        'Observaciones',
    ];
}
