<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class GuardarDatosPersonRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			"nombre"=>'required',
			"segundo_nombre"=>'required',
			"apellido"=>'required',
			"segundo_apellido"=>'required',
			"cedula"=>'required',
			"estado_civil"=>'required',
			"cargas_fami"=>'required',
			"sexo"=>'required',
			// "nacionalidad"=>'required',
			"direccion"=>'required',
		];
	}

}
