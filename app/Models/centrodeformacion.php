<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class centrodeformacion extends Model
{
    protected $table = 'tbl_centrodeformacion';
    protected $primaryKey = 'NIS';
    public $timestamps = false;
    protected $fillable = [
        'Numdoc',
        'Codigo ',
        'Denominacion',
        'Direccion',
        'Observaciones',
    ];

}
