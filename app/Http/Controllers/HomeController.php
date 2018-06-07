<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais; 

class HomeController extends Controller
{
	public function ingreso(){


    $cat = Pais::all();
    dd($cat);

    return view('la vista' , compact('cat'));
}
}
