<?php namespace App\Http\Controllers;

use App\User;
use App\Empresa;
use App\Persona;
use App\Agremiado;
use App\Universidad;
use App\especialidad;
use App\Comision;
use App\Http\Requests;
use App\Agremiado_viejo;
use App\CuotasAgremiado;
use Illuminate\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConsultarCedula;
use App\Http\Requests\RegistrarUsuarioRequest;
use App\Http\Requests\GuardarDatosAgremRequest;
use App\Http\Requests\GuardarDatosPersonRequest;
use App\Http\Controllers\Redirect;

class ControladorSolvencias extends Controller {
	

	/**
 	* Variable para autentificacion
 	* @var Guard
 	*/
 	protected $auth;
 	/**
 	 * Constructor para crear instancias a usar en el controlador
 	 * @param Guard $auth variable de autenticacion
 	 */
 	public function __construct(Guard $auth){

 		$this->auth=$auth;
 	}

 	// public function __construct(){

 	// 	$this->middleware('auth');
 	// }

 	public function inicio()
 	{

		 // $pagina = Page::slug('inicio')->first();s

 		return view('Solvencias.login');

 	}

 	public function panelUserAdmin() {


 		$user=$this->auth->user();
 		if($user->role!="admin") {
 			return view('Solvencias_admin.panel');
 		}
 		return view('Solvencias_admin.paneladministrador');
 	}

 	public function authenticate(){

 		if (Auth::attempt(['email' => $email, 'password' => $password]))
 		{
 			return redirect()->intended('dashboard');
 		}
 	}

	/**
	 * Crear usuario
	 * @return view vista de creacion de usuario
	 */
	
	public function crear_usuario(){

		return view('Solvencias.crear_usuario');
	}

	/**
	 * guardar datos de usuario
	 * @param  RegistrarUsuarioRequest $data datos de usuario pasados por formulario
	 * @return view                        mostrar formulario para solicitar cedula de identidad
	 */
	public function guardar_usuario(RegistrarUsuarioRequest $data){
		$user = new User($data->all());
		$user->password=\Hash::make($user->password);
		$user->role='user';
		$user->save();
		$this->auth->login($user);

		return redirect()->route('consult_ced');


	}

	public function solicita_cedula(){

		return view('Solvencias.solicita_cedula');

	}

	public function consulta_cedula(ConsultarCedula $consulta) {

		//Consultando cedula en base de datos vieja
		$CEDULA=$consulta->input('CEDULA');
		$agremiado_viejo=Agremiado_viejo::where('CEDULA','=',$CEDULA)->get()->first();


		// return $agremiado_viejo;
		if($agremiado_viejo){
			$persona_new=$this->obtenerDatosPersonaVieja($agremiado_viejo);
			$this->auth->user()->datosPersonales()->save($persona_new);
			$agremiado_new=$this->obtenerDatosAgremiadoViejo($agremiado_viejo);
			$this->auth->user()->agremiado()->save($agremiado_new);
			
			$this->auth->user()->agremiado->pagarCuotas($agremiado_viejo->cuotas);
			return redirect()->route('datos_personales' ,compact('persona_new','agremiado_new'));
		}

		$user=$this->auth->user();
		$persona= new Persona();
		$user->datosPersonales()->save($persona);
		$agremiado= new Agremiado();
		$user->agremiado()->save($agremiado);

		return redirect()->route('datos_personales');
		// return redirect()->route('datos_personales' ,compact('persona','agremiado'));
	}

	//crear agremiado con datos viejos
	private function obtenerDatosPersonaVieja(Agremiado_viejo $agremiado_viejo) {
		$persona_new= new Persona(); 

		$nombres=explode(" ",$agremiado_viejo->NOMBRES);
		$persona_new ->nombre = $nombres[0];
		if($nombres[1]){
			$persona_new ->segundo_nombre=$nombres[1];
		}
		
		$apellidos=explode(" ",$agremiado_viejo->APELLIDOS);
		$persona_new->apellido= $apellidos[0];
		if($apellidos[1]){
			$persona_new->segundo_apellido=$apellidos[1];
		}

		$persona_new->direccion=$agremiado_viejo->DIRDOM;
		$persona_new->cedula=$agremiado_viejo->CEDULA;
		$persona_new->nacionalidad=$agremiado_viejo->NACIONALIDAD;

		return $persona_new;
	}


	private function obtenerDatosAgremiadoViejo (Agremiado_viejo $agremiado_viejo) {
		$agremiado_new= new Agremiado();
		$CuotasAgremiado= new CuotasAgremiado(); 
		
		$agremiado_new->civ=$agremiado_viejo->NCIV;
		$agremiado_new->fecha_grado=$agremiado_viejo->FECHGRA;
		$agremiado_new->id_especialidad=$agremiado_viejo->ESPEC;

		$agremiado_new->id_universidad=$agremiado_viejo->universidad->Uni_Codigo;
		$agremiado_new->id_especialidad=$agremiado_viejo->especialidad->Esp_Codigo;

		// comparar para mandar el nombre de la univ $agremiado_new->id_universidad=
		$agremiado_new->fecha_inscripcion=$agremiado_viejo->FECHINSC;
		$agremiado_new->email=$agremiado_viejo->Email;
		$agremiado_new->fecha_ultimo_pago=$agremiado_viejo->cuotas->last()->Cag_Fhasta;
		
		//$agremiado_viejo->cuotas_pagadas=$agremiado_viejo->cuotas->all()->Cag_Cuotas;

		return $agremiado_new;

	}

	public function verificar_o_crearDatos(){
		
		$user=$this->auth->user();
		$persona_new = $user->datosPersonales;
		if($user->datosPersonales){
			return view('Solvencias.registrar_personal', compact('persona_new'));
		}
		return view('Solvencias.registrar_newpersonal');
	}

	protected function guardar_regperson(GuardarDatosPersonRequest $data){

		$especialidades=especialidad::all();
		$universidades=Universidad::all();
		$empresas=Empresa::all();

		$user=$this->auth->user();
		$persona=new Persona($data->all());
		$user->datosPersonales()->update($persona->toArray());
		
		return redirect()->route('datos_agremiados');
	}

	public function verificar_o_crearDatos2(){


		$especialidades=especialidad::all();
		$universidades=Universidad::all();
		$empresas=Empresa::all();
		$comisiones=Comision::all();


		$user=$this->auth->user();
		$agremiado_new = $user->agremiado;
		if ($user->agremiado)	{
			return view('Solvencias.registrar_agremiado' , compact('especialidades','universidades','empresas','agremiado_new','comisiones'));
		}

		return view ('Solvencias.registrar_newagremiado', compact('especialidades','universidades','empresas','comisiones'));
	}


	public function guardar_regagrem(GuardarDatosAgremRequest $data) {

		$especialidades=especialidad::all();
		$universidades=Universidad::all();
		$empresas=Empresa::all();
		$comisiones=Comision::all();

		
		$usuario=$this->auth->user();
		$agremiado = new Agremiado($data->all());
		

		$usuario->agremiado()->update($agremiado->toArray());


		return redirect()->route('paneladmin');
	}

	    //Solvencias Admin

	public function panel_admin(){

		return view('Solvencias_admin.panel');

	}

	public function mostrar_persona_admin(){

		$user=$this->auth->user();
		$persona=$user->datosPersonales;
		if ($user->datosPersonales) {
			return view ('Solvencias_admin.ver_datospersonal' ,compact('persona'));
		}
		return view ('Solvencias_admin.ver_newdatospersonal' ,compact('persona'));
	}

	public function agremiado_panel_admin() {

		$user=$this->auth->user();
		$agremiado=$user->agremiado;
		return view('Solvencias_admin.ver_agremiado', compact('agremiado'));	
	}

	


	public function solvencia_panel_admin() {

		$datosAgremiado=$this->auth->user()->agremiado;
		$datosPersonales=$this->auth->user()->datosPersonales;
		$pagos=$this->auth->user()->pago;
		$deudas=$this->auth->user()->deudas;
		$mesesDeudores=$this->auth->user()->mesesDeudores;



		return view('Solvencias_admin.solvencia', compact('datosAgremiado','datosPersonales','pagos'));
	}

	public function solvencia_administrador(){

		$users=User::all();

		return view('Solvencias_admin.solvenciadmin', compact('users'));
	}

}
