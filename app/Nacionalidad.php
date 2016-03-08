<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model {


protected $table="nacionalidades";

public function persona(){

	return $this ->hasOne('App\Persona','nacionalidad','nacionalidad');
}


}
