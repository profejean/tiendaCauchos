k<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\General;

$factory->define(General::class, function (Faker $faker) {
    return [
        'logo' => 'caucho.png',
        'banner' => '1599282559firestone.png',
        'pregunta_twitter' => $faker->randomElement($array = array ('SI', 'NO')),
    	'pregunta_instagram'=> $faker->randomElement($array = array ('SI', 'NO')),
    	'pregunta_facebook' => $faker->randomElement($array = array ('SI', 'NO')),
    	'pregunta_whatsapp' => $faker->randomElement($array = array ('SI', 'NO')),
        'pregunta_tiktok' => $faker->randomElement($array = array ('SI', 'NO')),
    	'twitter' => $faker->name,
    	'instagram' => $faker->name,
    	'whatsapp' => $faker->name,
    	'facebook' => $faker->name,
        'tiktok' => $faker->name,
    	'pregunta_contactanos' => $faker->randomElement($array = array ('SI', 'NO')),
    	'contactanos' => $faker->name,
    	'icono_carrito' => $faker->name,
       

        'usuario_creador' => $faker->name,
    	'usuario_editor' => $faker->name,
    	'fecha_creacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
    	'fecha_edicion' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
