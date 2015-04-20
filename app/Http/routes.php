<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
Route::get('/',['as'=>'inicio','uses'=>'PaginasController@inicio']);

Route::get('noticias',['as'=>'noticias','uses'=>'NoticiasController@index']);
Route::get('noticia/{id}',['as'=>'noticia','uses'=>'NoticiasController@show']);
Route::get('cursos',['as'=>'cursos','uses'=>'CursosController@index']);
Route::get('categoriaCursos/{slug}',['as'=>'cursosTipos','uses'=>'CursosController@tipos']);
Route::get('cursos/{slug}',['as'=>'detalleCursos','uses'=>'CursosController@detalles']);

Route::get('inscripciones',['as'=>'areaInscripciones','uses'=>'PaginasController@inscripciones']);
Route::get('inscripciones/beneficios',['as'=>'areaBeneficios','uses'=>'PaginasController@beneficios']);

Route::get('inscripciones/requisitos',['as'=>'areaRequisitos','uses'=>'PaginasController@requisitos']);
Route::get('inscripciones/solvencia',['as'=>'areaSolvencia','uses'=>'PaginasController@solvencia']);
Route::get('fundacionesycomisiones',['as'=>'fundacionesycomisiones', 'uses'=>'FundacionesyComisionesController@todas']);
Route::get('fundacionesycomisiones/{slug}',['as'=>'fundacion','uses'=>'FundacionesyComisionesController@individual']);
Route::get('eventos',['as'=>'eventos','uses'=>'EventosController@todos']);
Route::get('eventos/{slug}',['as'=>'eventoIndividual','uses'=>'EventosController@individual']);
Route::get('quienes-somos',['as'=>'quienes-somo','uses'=>'PaginasController@quienesSomos']);
Route::get('prueba',['as'=>'prueba','uses'=>'PaginasController@prueba']);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
