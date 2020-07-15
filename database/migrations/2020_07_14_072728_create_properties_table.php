<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('propertyName');
            $table->string('propertyAddress');
            $table->string('propertyCity');
            $table->text('propertyMap');
            $table->string('propertyType');
            $table->string('propertyFacilities');
            $table->string('propertyImg1');
            $table->string('propertyImg2');
            $table->string('propertyImg3');
            $table->string('propertyImg4');
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
        Schema::dropIfExists('properties');
    }
}
