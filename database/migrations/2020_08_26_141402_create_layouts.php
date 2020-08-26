<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layouts', function (Blueprint $table) {
            $table->id();

            $table->text('logo');
            $table->text('pregunta_twitter');
            $table->text('pregunta_instagram');
            $table->text('pregunta_facebook');
            $table->text('pregunta_whatsapp');
            $table->text('twitter');
            $table->text('instagram');
            $table->text('facebook');
            $table->text('whatsapp');
            $table->text('pregunta_contactanos');
            $table->text('contactanos');
            $table->text('icono_carrito');

            $table->date('fecha_creacion');
            $table->date('fecha_edicion');
            $table->text('usuario_editor');
            $table->text('usuario_creador');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layouts');
    }
}
