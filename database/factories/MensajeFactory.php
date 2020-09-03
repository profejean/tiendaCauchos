<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Mensaje;

$factory->define(Mensaje::class, function (Faker $faker) {
    return [
        'asunto' => $faker->name,
    	'usuario_id' => $faker->numberBetween($min = 1, $max = 100),
    	'cuerpo' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true), 
    	'status' => $faker->randomElement($array = array ('Nuevo','Leído')),
	    	

        'usuario_creador' => $faker->name,
    	'usuario_editor' => $faker->name,
    	'fecha_creacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
    	'fecha_edicion' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
