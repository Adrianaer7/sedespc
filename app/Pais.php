<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table='pais';

    static function getPaisByName($nombre){
    	$valor=Pais::where('nombre',$nombre)->get();
    	return $valor;
    }


  
}
