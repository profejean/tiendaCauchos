<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasas', function (Blueprint $table) {
            $table->id();

            $table->date('fecha');
            $table->time('hora');
            $table->decimal('monto', 20,2);
            $table->text('comentarios');

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
        Schema::dropIfExists('tasas');
    }
}
