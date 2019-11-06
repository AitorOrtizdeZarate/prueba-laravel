<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('contacto', function () {
    return view('contacto');
});
Route::get('blog/{id}', function ($id) {
    return view('blog', ['identificador'=> $id]);
});
Route::get('blog2/{id}/{nombre}', function ($id, $nombre) {
    return view('blog2', ['identificador2'=> $id, 'nombre' => $nombre]);
})->where(array('nombre'=>'[a-zA-Z]+','id'=>'[0-9]+'));

//Otra forma para lode los numero y las letras

/*Route::pattern('id', '[0-9]+');
Route::pattern('nombre', '[a-zA-Z]+');*/


Route::get('saludo', 'SaludoController@saludar');
Route::get('saludoNombre/{nombre}', 'SaludoController@saludarNombre');
Route::get('saludoNombreColor/{nombre}/{colore?}', 'SaludoController@saludarNombreColor');


Route::get('formNombreApellido', 'SaludoController@form1')->name('viewForm1');
Route::get('form1/get', 'SaludoController@storeForm1')->name('storeForm1');

Route::get('formPost', 'SaludoController@form2')->name('viewForm2');
Route::post('form2/post', 'SaludoController@storeForm2')->name('storeForm2');

Route::get('form3', 'SaludoController@form3')->name('viewForm3');
Route::post('form3/post', 'SaludoController@storeForm3')->name('storeForm3');

Route::get('val1', 'SaludoController@val1')->name('formval1');
Route::post('val1/post', 'SaludoController@validacion1')->name('storeVal1');
	

    