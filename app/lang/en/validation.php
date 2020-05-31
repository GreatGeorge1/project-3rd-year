<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "The :attribute must be accepted.",
	"active_url"           => ":attribute не є URL.",
	"after"                => ":attribute повинен бути датою після :date.",
	"alpha"                => ":attribute може містити тільки літери.",
	"alpha_dash"           => ":attribute може містити тільки літери, числа, роздільники (\\,/,|)",
	"alpha_num"            => ":attribute може містити тільки літери та числа,",
	"array"                => ":attribute має бути масивом",
	"before"               => ":attribute повинен бути датою до :date.",
	"between"              => array(
		"numeric" => ":attribute повинен бути між :min та :max.",
		"file"    => ":attribute повинен бути між :min та :max кілобайт.",
		"string"  => ":attribute повинен бути між :min та :max символів.",
		"array"   => ":attribute повинен бути між :min та :max елементів.",
	),
	"boolean"              => ":attribute поле має бути true або false.",
	"confirmed"            => ":attribute не підтверджено",
	"date"                 => ":attribute недійсна дата",
	"date_format"          => ":attribute не відповідає формтау :format.",
	"different"            => ":attribute та :other повинні відрізнятися.",
	"digits"               => ":attribute мають бути :digits цифрами.",
	"digits_between"       => ":attribute має бути між :min та :max цифрами.",
	"email"                => ":attribute має бути дійсною електронною поштою",
	"exists"               => "Обраний :attribute не дійсний.",
	"image"                => ":attribute має бути зображенням",
	"in"                   => "Обраний :attribute не дійсний.",
	"integer"              => ":attribute має бути цілим числом",
	"ip"                   => ":attribute має бути IP адресою",
	"max"                  => array(
		"numeric" => ":attribute не може бути більше ніж :max.",
		"file"    => ":attribute не може бути більше ніж :max кілобайт.",
		"string"  => ":attribute не може бути більше ніж :max символів.",
		"array"   => ":attribute не може бути більше ніж :max елементів.",
	),
	"mimes"                => ":attribute має бути файл типу: :values.",
	"min"                  => array(
		"numeric" => ":attribute має бути не менше ніж :min.",
		"file"    => ":attribute має бути не менше ніж :min кілобайт.",
		"string"  => ":attribute має бути не менше ніж :min символів.",
		"array"   => ":attribute має бути не менше ніж :min елементів.",
	),
	"not_in"               => "Обраний :attribute не дійсний.",
	"numeric"              => ":attribute має бути числом.",
	"regex"                => ":attribute формат не дійсний.",
	"required"             => ":attribute поле обовя\'зкове.",
	"required_if"          => ":attribute  поле обовя\'зкове коли :other дорівнює :value.",
	"required_with"        => ":attribute поле обовя\'зкове  коли :values присутнє.",
	"required_with_all"    => ":attribute поле обовя\'зкове  коли  :values присутнє.",
	"required_without"     => ":attribute поле обовя\'зкове  коли  :values не присутнє.",
	"required_without_all" => ":attribute поле обовя\'зкове  коли  жодне з :values не присутнє.",
	"same"                 => ":attribute та :other мають співпадати.",
	"size"                 => array(
		"numeric" => ":attribute має бути розміру :size.",
		"file"    => ":attribute має бути розміру  :size кілобайт.",
		"string"  => ":attribute має бути розміру :size символів.",
		"array"   => ":attribute має містити :size елементів.",
	),
	"unique"               => ":attribute вже зайнятий.",
	"url"                  => ":attribute формат невірний.",
	"timezone"             => ":attribute має бути дійсною часовою зоною",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
		'attribute-name' => array(
			'rule-name' => 'custom-message',
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
