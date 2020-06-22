<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "Usuario";
    protected $fillable = [
        'apellidos',
        'direccionVivienda',
        'email',
        'fechaNacimiento',
        'genero',
        'nombre',
        'numCelular',
        'numTelefonoCasa',
        'password'
    ];  

    public function especialista(){
        return $this->belongsTo('App\model\Especialista');
    }

    public function paciente(){
        return $this->belongsTo('App\model\Paciente');
    }


}
