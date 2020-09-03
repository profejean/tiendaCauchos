<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general', function (Blueprint $table) {
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
            $table->text('pregunta_pago_movil');
            $table->text('pregunta_transferencia');
            $table->text('pregunta_efectivo');
            $table->text('pregunta_zelle');
            $table->text('tel_pago_movil');
            $table->text('cedula_pago_movil');
            $table->text('banco_pago_movil');
            $table->text('nro_cuenta_transferencia');
            $table->text('ci_transferencia');
            $table->text('tipo_cuenta_transferencia');
            $table->text('banco_transferencia');
            $table->text('nombre_transferencia');
            $table->text('correo_zelle');
            $table->text('nombre_zelle');           


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
        Schema::dropIfExists('general');
    }
}
