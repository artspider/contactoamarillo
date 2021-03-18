<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToExpertLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expert_language', function (Blueprint $table) {
            $table->foreign('expert_id')->references('id')->on('experts')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('language_id')->references('id')->on('languages')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expert_language', function (Blueprint $table) {
            $table->dropForeign('expert_language_expert_id_foreign');
            $table->dropForeign('expert_language_language_id_foreign');
        });
    }
}
