<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertSubareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expert_subarea', function (Blueprint $table) {
            $table->unsignedInteger('expert_id')->index();
            $table->unsignedInteger('subcategoria_id')->index();
            $table->primary(['expert_id', 'subcategoria_id']);
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
        Schema::dropIfExists('expert_subarea');
    }
}
