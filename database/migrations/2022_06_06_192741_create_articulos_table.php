<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo', function (Blueprint $table) {
            $table->id();
            $table->integer('estado');
            $table->string('nombre');
            $table->string('slug');
            $table->string('categoria');
            $table->text('descripcion');
            $table->string('imagen');
            $table->integer('precio',11,2);
            $table->integer('stock');
            $table->string('oferta1');
            $table->integer('oferta',11,2);
            $table->softDeletes();
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
        Schema::dropIfExists('articulo');
    }
}
