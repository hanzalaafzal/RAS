<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeanerPrograms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaner_programs', function (Blueprint $table) {
            $table->id('lp_id');
            $table->unsignedBigInteger('fk_learner');
            $table->string('course')->nullable();
            $table->string('category')->nullable();
            $table->text('tr_center')->nullable();
            $table->text('as_center')->nullable();
            $table->date('expiry')->nullable();
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
        Schema::dropIfExists('leaner_programs');
    }
}
