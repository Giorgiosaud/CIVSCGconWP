<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model {

	//

	protected $table="universidades";

	public function agremiadoViejo(){

		return $this ->hasMany('App\Agremiado_viejo','UNIV','Uni_Codigo');


	}
	public function agremiado(){

		return $this ->hasMany('App\Agremiado','id_universidad','Uni_Codigo');


	}

}
