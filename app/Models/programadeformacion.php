<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class programadeformacion extends Model
{
    protected $table = 'tbl_programadeformacion';

    protected $primaryKey = 'NIS';

    public $timestamps = false;

    protected $fillable = [
        'NIS ',
        'Codigo',
        'Denominacion',
        'Direccion',
        'Observaciones'
    ];
}
