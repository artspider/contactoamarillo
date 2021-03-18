<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriaTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategoria_tag', function (Blueprint $table) {
            $table->unsignedInteger('subcategoria_id')->index();
            $table->unsignedInteger('tag_id')->index();
            $table->timestamps();
            $table->primary(['subcategoria_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategoria_tag');
    }
}
