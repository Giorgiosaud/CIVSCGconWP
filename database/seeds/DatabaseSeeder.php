<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
		$this->call('HistorialSolvenciaTableSeeder');
		$this->call('NacionalidadesTableSeeder');
		$this->call('ComisionesTableSeeder');
		// $this->call('UserTableSeeder');
	}


}

class UserTableSeeder extends Seeder {


public function run() {

	// DB::table('usuarios')->insert([

	// 	'name' => 'Jorge',
	// 	'role' => 'admin',
	// 	'email' => 'sk8_jota@hotmail.com',


	App\User::create([

		'name' => 'Jorge',
		'role' => 'user',
		'email' => 'sk8_jota@hotmail.com',
		'password' => \Hash::make('secret'),
		// 'remember_token' => str_random(10)
		]);

	App\User::create([

		'name' => 'Administrador',
		'role' => 'admin',
		'email' => 'civscg.presidencia@gmail.com',
		'password' => \Hash::make('secret'),
		// 'remember_token' => str_random(10)
		]);
	
	}
}

class HistorialSolvenciaTableSeeder extends Seeder {

	public function run() {

		App\HistorialSolvencia::create([


		'fecha_desde' => '1999-01-01',
		'monto' => '3.00'
		]);
		App\HistorialSolvencia::create([
		 'fecha_desde' => '2005-04-01' ,
		 'monto' => '6.00' 
		 ]);
		App\HistorialSolvencia::create([
		'fecha_desde' => '2008-08-01' ,
		'monto' => '12.00'
		]);
		App\HistorialSolvencia::create([
		'fecha_desde' => '2010-06-01' ,
		'monto' => '24.00'
		]);
		App\HistorialSolvencia::create([
		'fecha_desde' => '2012-01-01' ,
		'monto' => '50.00'
		]);
		App\HistorialSolvencia::create([
		'fecha_desde' => '2015-03-01' ,
		'monto' => '125.00',
		]);
		App\HistorialSolvencia::create([
		'fecha_desde' => '2015-08-01' ,
		'monto' => '350.00',
		]);
		App\HistorialSolvencia::create([
		'fecha_desde' => '2016-01-01' ,
		'monto' => '750.00',
		]);
	}
}

class NacionalidadesTableSeeder extends Seeder {


public function run() {

	App\Nacionalidad::create([
		'nacionalidad' => 'Venezuela',
		]);
	App\Nacionalidad::create([
		'nacionalidad' => 'Estados Unidos',
		]);
	App\Nacionalidad::create([
		'nacionalidad' => 'Chile',
		]);
	App\Nacionalidad::create([
		'nacionalidad' => 'Mexico',
		]);
	App\Nacionalidad::create([
		'nacionalidad' => 'Brasil',
		]);
	App\Nacionalidad::create([
		'nacionalidad' => 'Filipinas',
		]);	
	}	
}

class ComisionesTableSeeder extends Seeder {


public function run() {

	App\Comision::create([
		'comision' => 'Oficina de Jóvenes Profesionales',
		]);
	App\Comision::create([
		'comision' => 'Recreación, Cultura y Deporte',
		]);
	App\Comision::create([
		'comision' => 'Ciudad y Ambiente',
		]);
	App\Comision::create([
		'comision' => 'Desarrollo Tecnológico e Investigación',
		]);
	App\Comision::create([
		'comision' => 'Comité de Damas',
		]);
	App\Comision::create([
		'comision' => 'Información y Relaciones Institucionales',
		]);
	App\Comision::create([
		'comision' => 'Desarrollo Energético y Minas',
		]);
	App\Comision::create([
		'comision' => 'Desarrollo Forestales y Agro',
		]);
	App\Comision::create([
		'comision' => 'Desarrollo Industrial y Empresas Básicas',
		]);
	App\Comision::create([
		'comision' => 'Equipo de Integración de la Plataforma Informática del CIV',
		]);
		
	}
}