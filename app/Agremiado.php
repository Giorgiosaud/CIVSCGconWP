<?php namespace App;

use App\Pago;
use App\CuotasAgremiado;
use Illuminate\Database\Eloquent\Model;

class Agremiado extends Model {

	protected $fillable = ['fecha_grado','fecha_inscripcion','cond_laboral','empresa_labora','comision'];
	protected $dates= ['fecha_ultimo_pago','created_at','fecha_inscripcion'];

	public function user(){

		return $this->belongsTo('App\User','usuario_id');
	}

	public function universidad() {

		return $this->belongsTo('App\Universidad','id_universidad','Uni_Codigo');
	}

	public function especialidad() {

		return $this->belongsTo('App\especialidad','id_especialidad','Esp_Codigo');
	}
	public function pago(){
		return $this->hasMany(Pago::class);
	}
	public function pagarCuotas($cuotas){
		if(is_a($cuotas, "Illuminate\Database\Eloquent\Collection") ){
			foreach($cuotas as $cuota){
				$this->user->GuardarPago($cuota);
			}
			return $this;
		}
		return $this->user()->GuardarPago($cuota);

	}

	public function getStatusAttribute() {
		return 'Moroso';

	}


	

}
//
//
//$agremiado_new->pagarCuotas($cuotas)->universidad->nombreUniversidad