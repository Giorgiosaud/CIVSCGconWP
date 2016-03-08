<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/
	
	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	protected $loginPath = ('inscripciones/solvencias/auth/login');

	protected $redirectTo = ('inscripciones/solvencias/auth/login');

	protected $redirectPath = 'inscripciones/solvencias/panel_admin';
	// protected $redirectPath = ('inscripciones/solvencias/panel_administrativo');

	protected function getFailedLoginMessage(){
		
		return 'Estas credenciales no coinciden con nuestros registros ';
	}

	// public function redirectPath()
	// {
	
	//   return redirect()->route('validadordepanel');
	// }

	protected $redirectAfterLogout = ('inscripciones/solvencias/auth/login');

	

}
