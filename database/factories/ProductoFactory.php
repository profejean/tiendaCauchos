<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Producto;

$factory->define(Producto::class, function (Faker $faker) {
    return [
       	'nombre' => $faker->name,
    	'descripcion' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    	'precio_dolar' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 100000, $max = 5000000),
    	'inventario' =>  $faker->numberBetween($min = 1, $max = 100),


        'usuario_creador' => $faker->name,
    	'usuario_editor' => $faker->name,
    	'fecha_creacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
    	'fecha_edicion' => $faker->date($format = 'Y-m-d', $max = 'now') 
    ];
});
