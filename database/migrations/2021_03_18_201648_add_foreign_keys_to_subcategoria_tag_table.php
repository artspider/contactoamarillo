<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSubcategoriaTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subcategoria_tag', function (Blueprint $table) {
            $table->foreign('subcategoria_id')->references('id')->on('subcategorias')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('tag_id')->references('id')->on('tags')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subcategoria_tag', function (Blueprint $table) {
            $table->dropForeign('subcategoria_tag_subcategoria_id_foreign');
            $table->dropForeign('subcategoria_tag_tag_id_foreign');
        });
    }
}
