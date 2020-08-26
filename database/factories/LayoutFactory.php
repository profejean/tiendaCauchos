<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Layout;

$factory->define(Layout::class, function (Faker $faker) {
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
    	
        'usuario_creador' => $faker->name,
    	'usuario_editor' => $faker->name,
    	'fecha_creacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
    	'fecha_edicion' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
