<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroConsumoToner extends Model
{
    public $timestamps=true;

    protected $guarded=["_token"];

    public function impresoraUbicacion(){
      return $this->hasOne('App\ImpresoraUbicacion','id_impresora_ubicacion','id');
    }
    
    public function cartucho(){
      return $this->hasOne('App\Cartucho','id_toner','id_cartucho');
    }
}
