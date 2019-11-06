<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class SaludoController extends Controller
{
    function saludar(){
    	return view('saludo');
    }
    function saludarNombre($nombre){
    	return view('saludoNombre',['nombre'=> $nombre]);
    }
    function saludarNombreColor($nombre, $colore='003AFF'){
    	return view('saludoNombreColor',['nombre'=> $nombre],['colore'=> $colore]);
    }
    function form1(){
    	return view('formNombreApellido');
    }

    public function storeForm1 (Request $request){
    	
    	$nombre=$request->input("nombre")." ".$request->input("apellido");
    	return view ("saludoNombre",['nombre'=> $nombre]);
    }
}
