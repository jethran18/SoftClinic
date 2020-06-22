<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class CitaMedica extends Model
{
    protected $table = "CitaMedica";
    protected $fillable = [
        'diagnostico',
        'fechaProgramada',
        'folio',
        'horaProgramada',
        'obeservaciones'
    ];    

    public function recetados(){
        return $this->hasMany('App\model\Recetado');
    }

    public function paciente()
    {
        return $this->belongsTo('App\model\Paciente');
    }

    public function consultorio()
    {
        return $this->belongsTo('App\model\Consultorio');
    }
}
