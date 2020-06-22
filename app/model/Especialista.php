<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Especialista extends Model
{
    protected $table = "Especialista";
    protected $fillable = [
        'cedulaPro',
        'especialidad'
    ];    

    public function usuario()
    {
        return $this->belongsTo('App\model\Usuario');
    }

    public function consultorio()
    {
        return $this->belongsTo('App\model\Consultorio');
    }
}
