<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class GuardarDatosAgremRequest extends Request {

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
			// "fecha_grado"=>'required',
			"cond_laboral"=>'required',
			// "email" => 'required|email',
			"empresa_labora"=>'required',
			"comision"=>'required',
			// ""->''
			// ""->''
			// ""->''
		];
		
	}

}
