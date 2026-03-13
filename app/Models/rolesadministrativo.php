<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rolesadministrativo extends Model
{
    protected $table='tbl_Rolesadministrativos ';

    protected $primaryKey = 'NIS';

    public $timestamps = false;

    protected $fillable = [
        'Descripcion'


    ];
}
