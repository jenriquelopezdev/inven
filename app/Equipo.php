<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $primaryKey = 'id_equipo';

    public function equipoPersona(){
      return $this->hasMany('App\EquipoPersona','id_equipo','id_equipo');
    }
}
