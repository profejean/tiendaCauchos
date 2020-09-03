<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\General;

$factory->define(General::class, function (Faker $faker) {
    return [
        'logo' => $faker->numberBetween($min = 1, $max = 10),
        'pregunta_twitter' => $faker->randomElement($array = array ('SI', 'NO')),
    	'pregunta_instagram'=> $faker->randomElement($array = array ('SI', 'NO')),
    	'pregunta_facebook' => $faker->randomElement($array = array ('SI', 'NO')),
    	'pregunta_whatsapp' => $faker->randomElement($array = array ('SI', 'NO')),
    	'twitter' => $faker->name,
    	'instagram' => $faker->name,
    	'whatsapp' => $faker->name,
    	'facebook' => $faker->name,
    	'pregunta_contactanos' => $faker->randomElement($array = array ('SI', 'NO')),
    	'contactanos' => $faker->name,
    	'icono_carrito' => $faker->name,
        'pregunta_pago_movil' => $faker->randomElement($array = array ('SI', 'NO')),
        'pregunta_transferencia' => $faker->randomElement($array = array ('SI', 'NO')),
        'pregunta_efectivo' => $faker->randomElement($array = array ('SI', 'NO')),
        'pregunta_zelle' => $faker->randomElement($array = array ('SI', 'NO')),
    	'tel_pago_movil' => $faker->phoneNumber,
        'cedula_pago_movil' => $faker->name,
        'banco_pago_movil' => $faker->name,
        'cedula_pago_movil' => $faker->name,
        'banco_pago_movil' => $faker->name,
        'nro_cuenta_transferencia' => $faker->numerify('####-####-####-####-####'),
        'ci_transferencia' => $faker->name,
        'tipo_cuenta_transferencia' => $faker->randomElement($array = array ('Corriente', 'Ahorro')),
        'banco_transferencia' => $faker->name,
        'nombre_transferencia' => $faker->name,
        'correo_zelle' => $faker->name,
        'nombre_zelle' => $faker->name,
        

        'usuario_creador' => $faker->name,
    	'usuario_editor' => $faker->name,
    	'fecha_creacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
    	'fecha_edicion' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
