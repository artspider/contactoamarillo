<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo')->nullable();
            $table->unsignedInteger('categoria_id')->index('services_categoria_id_foreign');
            $table->unsignedInteger('subcategoria_id')->index('services_subcategoria_id_foreign');
            $table->unsignedInteger('expert_id')->index('services_expert_id_foreign');
            $table->unsignedInteger('precio');
            $table->unsignedInteger('tiempo_de_entrega');
            $table->string('producto_a_entregar');

            $table->foreign('expert_id')->references('id')->on('experts')->onUpdate('RESTRICT')->onDelete('CASCADE');

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
        Schema::dropIfExists('services');
    }
}
