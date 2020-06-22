<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model
{
    protected $table = "Consultorio";
    protected $fillable = [
        'nombre'
    ];    

    public function especialistas(){
        return $this->hasMany('App\model\Especialista');
    }

    public function citaMedica()
    {
        return $this->belongsTo('App\model\CitaMedica');
    }

}
