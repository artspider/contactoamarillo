<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expert_tag', function (Blueprint $table) {
            $table->unsignedInteger('expert_id')->index();
            $table->unsignedInteger('tag_id')->index();
            $table->timestamps();
            $table->primary(['expert_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expert_tag');
    }
}
