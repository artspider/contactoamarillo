<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');
            $table->smallInteger('status')->default(0);
            $table->date('fecha_entrega');
            $table->integer('precio_acordado');
            $table->smallInteger('calificacion_experto')->nullable();
            $table->smallInteger('calificacion_empleador')->nullable();
            $table->text('resena')->nullable();
            $table->unsignedInteger('expert_id');
            $table->unsignedInteger('employer_id');
            $table->string('titulo')->nullable();
            $table->boolean('ok_expert')->default(0);
            $table->boolean('ok_employer')->default(0);
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
        Schema::dropIfExists('orders');
    }
}
