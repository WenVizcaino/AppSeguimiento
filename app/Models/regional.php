<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class regional extends Model
{
    protected $table='tbl_Regional';

    protected $primaryKey = 'NIS';

    public $timestamps = false;

    protected $fillable = [
        'Codigo',
        'Denominacion',
        'Observaciones'

    ];
}
