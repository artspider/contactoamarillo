<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_nacimiento')->nullable;
            $table->string('pais')->nullable;
            $table->string('estado')->nullable;
            $table->string('ciudad')->nullable;
            $table->string('facebook')->nullable;
            $table->string('twitter')->nullable;
            $table->string('dribbble')->nullable;
            $table->string('github')->nullable;
            $table->string('curriculum_path')->nullable;
            $table->text('quien_soy')->nullable;
            $table->unsignedInteger('expert_id')->constrained();
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
        Schema::dropIfExists('perfiles');
    }
}
