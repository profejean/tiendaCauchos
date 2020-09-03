<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\OrdenCompra;

$factory->define(OrdenCompra::class, function (Faker $faker) {
	static $number = 1;
    return [
        'nro_pedido' => $number ++,
    	'precio_total_bs' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 3000000, $max = 3000000000),
    	'precio_total_dolares' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 1000),
    	'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
    	'hora' => $faker->time($format = 'H:i:s', $max = 'now'),
    	'usuario_id' => $faker->numberBetween($min = 1, $max = 100),
    	'metodo_pago' => $faker->randomElement($array = array ('Efectivo','Transferencia', 'Pago Móvil', 'Zelle')),
    	'referencias' => $faker->name,
    	'capture' => $faker->name,
    	'efectivo' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),    	    	



        'usuario_creador' => $faker->name,
    	'usuario_editor' => $faker->name,
    	'fecha_creacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
    	'fecha_edicion' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
