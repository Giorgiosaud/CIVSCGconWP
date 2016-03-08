<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model {

	protected $table='personas';

	protected $fillable= ['nombre','segundo_nombre','apellido','segundo_apellido','cedula','estado_civil','cargas_fami','sexo','nacionalidad','direccion'];

	public function user(){

		return $this->belongsTo('App\User','usuario_id');
	}

	public function nacionalidad() {

		return $this->belongsTo('App\Nacionalidad','nacionalidad','nacionalidad');
	}

}
