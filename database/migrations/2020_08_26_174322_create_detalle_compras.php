<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleCompras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compras', function (Blueprint $table) {
            $table->id();

            $table->integer('producto_id');
            $table->decimal('precio_bs', 20,2);
            $table->decimal('precio_dolar', 20,2);
            $table->integer('cantidad');

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
        Schema::dropIfExists('detalle_compras');
    }
}
