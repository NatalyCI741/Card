<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHerramientasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herramientas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_registro');
            $table->string('nombre_herramienta');
            $table->string('marca');
            $table->string('tipo');
            $table->decimal('valor_unidad',10,2);
            $table->string('cantidad');
            $table->string('proveedor');
            $table->string('estado');
            $table->decimal('total_herramientas',10,2);
            $table->boolean('disponibilidad');
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
        Schema::dropIfExists('herramientas');
    }
}
