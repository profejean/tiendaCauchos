<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenCompras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_compras', function (Blueprint $table) {
            $table->id();
            $table->integer('nro_pedido');
            $table->decimal('precio_total_bs', 20,2);
            $table->decimal('precio_total_dolares', 20,2);
            $table->date('fecha');
            $table->time('hora');
            $table->integer('usuario_id');
            $table->text('metodo_pago');
            $table->text('referencias');
            $table->text('capture');
            $table->text('efectivo');
            $table->text('status');            

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
        Schema::dropIfExists('orden_compras');
    }
}
