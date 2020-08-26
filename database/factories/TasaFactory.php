<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Tasa;

$factory->define(Tasa::class, function (Faker $faker) {
    return [
       
        'id_sustrato' => $number ++,
    	'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
    	'hora' => $faker->time($format = 'H:i:s', $max = 'now'),
    	'monto' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 300000, $max = 1000000),



        'usuario_creador' => $faker->name,
    	'usuario_editor' => $faker->name,
    	'fecha_creacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
    	'fecha_edicion' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
