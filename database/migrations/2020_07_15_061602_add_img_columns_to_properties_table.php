<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImgColumnsToPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->string('propertyImg5');
            $table->string('propertyImg6');
            $table->string('propertyImg7');
            $table->string('propertyImg8');
            $table->string('propertyImg9');
            $table->string('propertyImg10');
            $table->string('propertyImg11');
            $table->string('propertyImg12');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            //
        });
    }
}
