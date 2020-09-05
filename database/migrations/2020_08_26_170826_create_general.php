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

            $table->text('logo')->nullable();
            $table->text('pregunta_twitter')->nullable();
            $table->text('pregunta_instagram')->nullable();
            $table->text('pregunta_facebook')->nullable();
            $table->text('pregunta_whatsapp')->nullable();
            $table->text('twitter')->nullable();
            $table->text('instagram')->nullable();
            $table->text('facebook')->nullable();
            $table->text('whatsapp')->nullable();
            $table->text('pregunta_contactanos')->nullable();
            $table->text('contactanos')->nullable();
            $table->text('icono_carrito')->nullable();
            $table->text('pregunta_pago_movil')->nullable();
            $table->text('pregunta_transferencia')->nullable();
            $table->text('pregunta_efectivo')->nullable();
            $table->text('pregunta_zelle')->nullable();
            $table->text('tel_pago_movil')->nullable();
            $table->text('cedula_pago_movil')->nullable();
            $table->text('banco_pago_movil')->nullable();
            $table->text('nro_cuenta_transferencia')->nullable();
            $table->text('ci_transferencia')->nullable();
            $table->text('tipo_cuenta_transferencia')->nullable();
            $table->text('banco_transferencia')->nullable();
            $table->text('nombre_transferencia')->nullable();
            $table->text('correo_zelle')->nullable();
            $table->text('nombre_zelle')->nullable();           


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
