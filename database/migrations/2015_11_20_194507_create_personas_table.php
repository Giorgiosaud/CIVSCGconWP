<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas', function(Blueprint $table)
		{
			$table->string('nombre');
			$table->string('segundo_nombre');
			$table->string('apellido');
			$table->string('segundo_apellido');
			$table->string('cedula');
			$table->string('estado_civil');
			$table->integer('cargas_fami');
			$table->string('sexo');
			$table->string('nacionalidad');
			$table->text('direccion');
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
		Schema::drop('personas');
	}

}
