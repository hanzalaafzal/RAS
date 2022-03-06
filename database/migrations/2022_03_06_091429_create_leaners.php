<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaners', function (Blueprint $table) {
            $table->id('learner_id');
            $table->string('learner_name')->nullable();
            $table->string('learner_vcode')->nullable()->unique();
            $table->string('learner_nationality')->nullable()->unique();
            $table->string('image_path')->nullable();
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
        Schema::dropIfExists('leaners');
    }
}
