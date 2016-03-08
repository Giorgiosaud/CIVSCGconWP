<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Agremiado_viejo extends Model {

	protected $table = 'agremiados_viejos' ;

	protected $fillable = ['CEDULA'];
	// protected $dates = ['FECHGRA'];
	public function getFechaGraduacionAttribute(){
		
		$fecha=$this->attributes['FECHINS'];
		$date = Carbon::createFromFormat('d/m/Y', $fecha);
		return $date;
	}

	public function cuotas(){

		return $this->hasMany('App\CuotasAgremiado','Cag_Civ','NCIV');	
	}

	public function universidad(){

		return $this->belongsTo('App\Universidad','UNIV','Uni_Codigo');
	}

	public function especialidad(){

		return $this->belongsTo('App\especialidad','ESPEC','Esp_Codigo');
	}
	

}
