<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use jorgelsaud\Corcel\Page;
use App\especialidad;
use App\Universidad;
use App\Empresa;
use Illuminate\Http\Request;

class ControladorDeSolvencias extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function inicio()
	{
		
		 // $pagina = Page::slug('inicio')->first();

		 return view('Solvencias.login');

	}

	
	public function registrarse()
	{
		// $pagina = Page::slug('registrar')->first();
		$especialidades=especialidad::all();
		$universidades=Universidad::all();
		$empresas=Empresa::all();

		return view('Solvencias.registrar', compact('especialidades','universidades','empresas'));
	}

	public function crear_usuario(){

		return view('Solvencias.crear_usuario');
	}






}
