<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tiposdocumento extends Model
{
    protected $table='tbl_Tiposdocumento';

    protected $primaryKey = 'NIS';

    public $timestamps = false;

    protected $fillable = [
        'Denominacion',
        'Observaciones'

    ];
}
