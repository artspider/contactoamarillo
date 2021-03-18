<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToExpertTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expert_tag', function (Blueprint $table) {
            $table->foreign('expert_id')->references('id')->on('experts')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
        Schema::table('expert_tag', function (Blueprint $table) {
            $table->dropForeign('expert_tag_expert_id_foreign');
            $table->dropForeign('expert_tag_tag_id_foreign');
        });
    }
}
