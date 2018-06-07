<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais; 

class PaisController extends Controller
{
    function index()
    {
    
    	$aux=Pais::All();
    	dd($aux);
    }

public function validar(Request $request){

	
	$aux= Pais::getPaisByName($request->name);
	dd($aux);
}
}
