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

// get('/',function(){return 'hola';})
Route::get('/',['as'=>'inicio','uses'=>'PaginasController@inicio']);

Route::get('noticias',['as'=>'noticias','uses'=>'NoticiasController@index']);
Route::get('noticia/{id}',['as'=>'noticia','uses'=>'NoticiasController@show']);
Route::get('cursos',['as'=>'cursos','uses'=>'CursosController@index']);
Route::get('categoriaCursos/{slug}',['as'=>'cursosTipos','uses'=>'CursosController@tipos']);
Route::get('cursos/{slug}',['as'=>'detalleCursos','uses'=>'CursosController@detalles']);
Route::post('cursos/{slug}',['as'=>'interesadoEnCursos','uses'=>'CursosController@interesado']);
Route::get('contactanos',['as'=>'Contactanos','uses'=>'PaginasController@contacto']);
Route::post('contactanos',['as'=>'Contactanos','uses'=>'PaginasController@enviarContacto']);
Route::get('inscripciones',['as'=>'areaInscripciones','uses'=>'PaginasController@inscripciones']);
Route::get('inscripciones/beneficios',['as'=>'areaBeneficios','uses'=>'PaginasController@beneficios']);
Route::get('inscripciones/requisitos',['as'=>'areaRequisitos','uses'=>'PaginasController@requisitos']);


// Rutas Solvencia //
// Route::get('inscripciones/solvencias/login',           ['as'=>'login', 'uses'=>'ControladorSolvencias@inicio']);
// Route::post('inscripciones/solvencias/login',          ['as'=>'login', 'uses'=>'AuthController@postLogin']);

 Route::get( 'inscripciones/solvencias/auth/login',    ['as'=>'login', 'uses'=>'ControladorSolvencias@inicio']);
 Route::post('inscripciones/solvencias/auth/login',    ['as'=>'login', 'uses'=>'Auth\AuthController@postLogin']);
 // Route::get('inscripciones/solvencias/logout',    ['as'=>'login', 'uses'=>'Auth\AuthController@getLogout']);

Route::get('inscripciones/solvencias/panel_admin',    ['as'=>'validadordepanel', 'uses'=>'ControladorSolvencias@panelUserAdmin']);

 Route::get('inscripciones/solvencias/crear_usuario',   ['as'=>'crearuser',  'uses'=>'ControladorSolvencias@crear_usuario']);
 Route::post('inscripciones/solvencias/crear_usuario',  ['as'=>'crearuser',  'uses'=>'ControladorSolvencias@guardar_usuario']);
 Route::get('inscripciones/solvencias/consulta_cedula', ['as'=>'consult_ced','uses'=>'ControladorSolvencias@solicita_cedula']);
 Route::post('inscripciones/solvencias/consulta_cedula',['as'=>'consult_ced','uses'=>'ControladorSolvencias@consulta_cedula']);
 
 Route::get('inscripciones/solvencias/datosPersonales', ['as'=>'datos_personales','uses'=>'ControladorSolvencias@verificar_o_crearDatos']);
 Route::get('inscripciones/solvencias/datosAgremiados', ['as'=>'datos_agremiados','uses'=>'ControladorSolvencias@verificar_o_crearDatos2']);
 
 Route::get('inscripciones/solvencias/registrarse',     ['as'=>'registrarseperson', 'uses'=>'ControladorSolvencias@registrarse']);
 Route::post('inscripciones/solvencias/registrarse',    ['as'=>'registrarseperson', 'uses'=>'ControladorSolvencias@guardar_regperson']);
 Route::get('inscripciones/solvencias/registrarseagrem',['as'=>'registrarseagrem', 'uses'=>'ControladorSolvencias@registrarse_agrem']);
 Route::post('inscripciones/solvencias/registrarseagrem',['as'=>'registrarseagrem', 'uses'=>'ControladorSolvencias@guardar_regagrem']);

//Rutas Solvencia Administrativas //
Route::get('inscripciones/solvencias/panel_administrativo',          ['as'=>'paneladmin','uses'=>'ControladorSolvencias@panel_admin']);
Route::get('inscripciones/solvencias/panel_administrativo/persona',  ['as'=>'mostrar.persona',  'uses'=>'ControladorSolvencias@mostrar_persona_admin']);
Route::get('inscripciones/solvencias/panel_administrativo/agremiado',['as'=>'paneladmin.agremiado','uses'=>'ControladorSolvencias@agremiado_panel_admin']);
Route::get('inscripciones/solvencias/panel_administrativo/solvencia',['as'=>'paneladmin.solvencia','uses'=>'ControladorSolvencias@solvencia_panel_admin']);
Route::get('inscripciones/solvencias/panel_administrativo/solvencia_admin',['as'=>'paneladmin.solvencia_administrador','uses'=>'ControladorSolvencias@solvencia_administrador']);


Route::get('inscripciones/solvencia',['as'=>'areaSolvencia','uses'=>'PaginasController@solvencia']);
Route::get('fundacionesycomisiones',['as'=>'fundacionesycomisiones', 'uses'=>'FundacionesyComisionesController@todas']);
Route::get('fundacionesycomisiones/{slug}',['as'=>'fundacion','uses'=>'FundacionesyComisionesController@individual']);
Route::get('eventos',['as'=>'eventos','uses'=>'EventosController@todos']);
Route::get('eventos/{slug}',['as'=>'eventoIndividual','uses'=>'EventosController@individual']);

Route::get('/{slug}',['as'=>'paginas','uses'=>'PaginasController@paginas']);
Route::get('prueba',['as'=>'prueba','uses'=>'PaginasController@prueba']);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
