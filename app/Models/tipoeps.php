<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tipoeps extends Model
{
    protected $table='tbl_tipoeps';

    protected $primaryKey = 'NIS';

    public $timestamps = false;

    protected $fillable = [
        'numdoc',
        'Denominacion',
        'Observaciones'

    ];

}
