<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = "Paciente";
    protected $fillable = [
        'altura',
        'enfermedadesCronicas',
        'imc',
        'peso'
    ];

    public function citasMedica(){
        return $this->hasMany('App\model\CitaMedica');
    }
    
    public function usuario()
    {
        return $this->belongsTo('App\model\Usuario');
    }

}
