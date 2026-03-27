<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enteconformador extends Model
{
    protected $table      = 'tbl_enteconformador'; // ← nombre exacto de tu tabla
    protected $primaryKey = 'Numdoc';              // ← clave primaria correcta
    public $timestamps    = false;

    protected $fillable = [
        'tdoc',
        'Numdoc',
        'RazonSocial',
        'Direccion',
        'Telefono',
        'CorreoInstitucional',
    ];
}
