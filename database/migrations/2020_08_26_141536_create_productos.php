<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            $table->text('categoria');
            $table->text('nombre');
            $table->longText('descripcion');
            $table->decimal('precio_dolar', 20,2);
            $table->integer('inventario');
            $table->text('marca');
            $table->text('ancho');
            $table->text('diametro');
            $table->text('perfil');
            $table->text('imagen_1')->nullable;
            $table->text('imagen_2')->nullable;


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
        Schema::dropIfExists('productos');
    }
}
