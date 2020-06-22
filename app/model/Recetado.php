<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Recetado extends Model
{
    protected $table = "Recetado";
    protected $fillable = [
        'dosis',
        'folio',
        'intervaloDias',
        'intervaloHoras',
        'medicamento',
        'tipoAplicacion'

    ];

    public function citaMedica()
    {
        return $this->belongsTo('App\model\CitaMedica');
    }

}
