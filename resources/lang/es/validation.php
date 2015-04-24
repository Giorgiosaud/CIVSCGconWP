<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| El Campo following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "El Campo :attribute debe ser Aceptado.",
	"active_url"           => "El Campo :attribute no es una URL Real.",
	"after"                => "El Campo :attribute debe ser un dia despues de :date.",
	"alpha"                => "El Campo :attribute solo debe contener letras. ",
	"alpha_dash"           => "El Campo :attribute solo debe contener letras, numeros, y puntos.",
	"alpha_num"            => "El Campo :attribute solo debe contener letras y numeros.",
	"array"                => "El Campo :attribute debe ser un arreglo.",
	"before"               => "El Campo :attribute debe ser una fecha antes de :date.",
	"between"              => [
		"numeric" => "El Campo :attribute debe ser entre :min y :max.",
		"file"    => "El Campo :attribute debe ser entre :min y :max kilobytes.",
		"string"  => "El Campo :attribute debe ser entre :min y :max caracteres.",
		"array"   => "El Campo :attribute debe tener entre :min y :max items.",
	],
	"boolean"              => "El Campo :attribute debe ser verdadero o falso.",
	"confirmed"            => "El Campo confirmacion de :attribute no coincide.",
	"date"                 => "El Campo :attribute no es una fecha valida.",
	"date_format"          => "El Campo :attribute no coincide con el formato :format.",
	"different"            => "El Campo :attribute y :other deben ser diferentes.",
	"digits"               => "El Campo :attribute debe ser :digits digitos.",
	"digits_between"       => "El Campo :attribute debe ser entre :min y :max digits.",
	"email"                => "El Campo :attribute debe ser una direccion de correo valida.",
	"filled"               => "El Campo :attribute field es requerido.",
	"exists"               => "El Campo seleccionado :attribute es invalido.",
	"image"                => "El Campo :attribute debe ser una imagen.",
	"in"                   => "El Campo seleccionado :attribute es invalido.",
	"integer"              => "El Campo :attribute debe ser un entero.",
	"ip"                   => "El Campo :attribute debe ser una direccion IP Valida.",
	"max"                  => [
		"numeric" => "El Campo :attribute no debe ser mayo a :max.",
		"file"    => "El Campo :attribute no debe ser mayo a :max kilobytes.",
		"string"  => "El Campo :attribute no debe ser mayo a :max caracteres.",
		"array"   => "El Campo :attribute no debe ser mas grande que :max items.",
	],
	"mimes"                => "El Campo :attribute debe ser a un archivo de tipo type: :values.",
	"min"                  => [
		"numeric" => "El Campo :attribute debe ser al menos :min.",
		"file"    => "El Campo :attribute debe ser al menos :min kilobytes.",
		"string"  => "El Campo :attribute debe ser al menos :min caracteres.",
		"array"   => "El Campo :attribute debe tener al menos :min items.",
	],
	"not_in"               => "El Campo selected :attribute es invalido.",
	"numeric"              => "El Campo :attribute debe ser un numero.",
	"regex"                => "El Campo :attribute tiene un formato invalido.",
	"required"             => "El Campo :attribute field es necesario.",
	"required_if"          => "El Campo :attribute field es necesario cuando :other exista :value.",
	"required_with"        => "El Campo :attribute field es necesario cuando :values exista.",
	"required_with_all"    => "El Campo :attribute field es necesario cuando :values exista.",
	"required_without"     => "El Campo :attribute field es necesario cuando :values no exista.",
	"required_without_all" => "El Campo :attribute field es necesario cuando ninguno de los :values existan.",
	"same"                 => "El Campo :attribute y :other must match.",
	"size"                 => [
		"numeric" => "El Campo :attribute debe ser :size.",
		"file"    => "El Campo :attribute debe ser :size kilobytes.",
		"string"  => "El Campo :attribute debe ser :size caracteres.",
		"array"   => "El Campo :attribute must contain :size items.",
	],
	"unique"               => "El Campo :attribute ya fue tomado.",
	"url"                  => "El Campo :attribute tiene un formato invalido.",
	"timezone"             => "El Campo :attribute debe ser a una zona valida.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. Thexista makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => [
		'attribute-name' => [
			'rule-name' => 'custom-message',
		],
	],

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| El Campo following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => [],

];
