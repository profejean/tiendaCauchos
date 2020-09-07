<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\DetalleCompra;

$factory->define(DetalleCompra::class, function (Faker $faker) {
    static $number = 1;
    return [
        'pedido_id' => 1,
        'producto_id' => $number ++,
    	'precio_dolar' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 1000),
    	'cantidad' => $faker->numberBetween($min = 1, $max = 100),
    	'imagen' => $faker->name,

        'usuario_creador' => $faker->name,
    	'usuario_editor' => $faker->name,
    	'fecha_creacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
    	'fecha_edicion' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
