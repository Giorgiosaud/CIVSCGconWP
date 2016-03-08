<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CuotasAgremiado extends Model {
	protected $table='cuotas_agremiado';
	protected $dates=['Cag_Fhasta'];

	public function agremiadoViejo(){

	return $this->belongsTo('App\Agremiado_viejo','NCIV','Cag_Civ');
	}
}