<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgremiadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agremiados', function(Blueprint $table)
		{
			$table->integer('id_persona');
			$table->integer('id_especialidad')->unsigned()->index();
			$table->integer('id_universidad')->unsigned()->index();
			$table->integer('civ');
			$table->string('email');
			$table->string('fecha_grado');
			$table->date('fecha_inscripcion');
			$table->date('fecha_ultimo_pago');
			$table->string('cond_laboral');
			$table->string('empresa_labora');
			$table->string('comision');
			$table->increments('id');
			$table->integer('usuario_id')->unsigned();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agremiados');
	}

}
