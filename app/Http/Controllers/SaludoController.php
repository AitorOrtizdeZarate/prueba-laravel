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

    function form2(){
    	return view('formPost');
    }
	 public function storeForm2 (Request $request){
    	$json = File::get(base_path('database/data/saludos.json'));
    	$idiomas = json_decode ($json);
    	$nombre=$request->input("nombre")." ".$request->input("apellido");
    	return view ("saludoIdiomas",['nombre'=> $nombre, 'idiomas'=>$idiomas]);
    }

     /*function form3(){
    	return view('form3');
    }
	 public function storeForm3 (Request $request){
    	$json = File::get(base_path('database/data/saludos.json'));
    	$idiomas = json_decode ($json);
    	$nombre=$request->input("nombre")." ".$request->input("apellido");
    	return view ("saludoIdiomas",['nombre'=> $nombre, 'idiomas'=>$idiomas]);
    }*/

    function val1(){
    	return view('formValidacion');
    }
     public function validacion1 (Request $request){
    	$validatedData = $request->validate([
    		'nombre' => 'required|min:2|max:15',
    		'apellido' => 'required|min:2|max:20',
    		'email' => 'required|email',
    		'telefono' => 'regex:/[679][0-9]{8}/'
    	]);
    	return view('nuevocontacto')->with('nombre', $request->input('nombre'))->with('apellido', $request->input('apellido'))->with('email', $request->input('email'))->with('telefono', $request->input('telefono'));
    

}
}