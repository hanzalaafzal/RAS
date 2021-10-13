<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id('vid');
            $table->string('vcode')->unique();
            $table->string('category');
            $table->string('vplate')->unique();
            $table->string('fleet')->nullable();
            $table->string('regno')->nullable()->unique();
            $table->string('chassisno')->unique();
            $table->string('owner');
            $table->string('vmm')->nullable();
            $table->string('apDate')->nullable();
            $table->string('exDate')->nullable();
            $table->string('validExpiry');
            $table->string('validStatus');
            $table->string('rasic');
            $table->string('inspector')->nullable();
            $table->string('vapproval')->nullable();
            $table->string('ras_center')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
