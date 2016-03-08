<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class especialidad extends Model {

	//

	protected $table='especialidades';

	public function agremiado_viejo() {

		return $this->hasMany('App\Agremiado_viejo','ESPEC','Esp_Codigo');
	}

	public function agremiado(){

		return $this->hasMany ('App\Agremiado','id_especialidad','Esp_Codigo');
	}

}
