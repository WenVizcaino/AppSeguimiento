<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class enteconformador extends Model
{
    protected $table = 'tbl_enteconformador';

    protected $primaryKey = 'NIS';

    public $timestamps = false;

    protected $fillable = [
        'tdoc',
        'Numdoc',
        'RazonSocial',
        'Direccion',
        'Telefono',
        'CorreoInstitucional'

    ];

}
