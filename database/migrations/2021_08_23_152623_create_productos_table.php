<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
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
            $table->string('nombre',45);
            $table->string('descripcion',130)->nullable();
            $table->string('imagen')->nullable();
            $table->double('precio')->nullable();
            $table->double('oferta')->nullable();
            $table->integer('cantidad')->nullable();
            $table->char('activo',2)->default(1);
            $table->unsignedBigInteger('cate_id');
            $table->foreign('cate_id')->references('id')->on('categorias');
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
