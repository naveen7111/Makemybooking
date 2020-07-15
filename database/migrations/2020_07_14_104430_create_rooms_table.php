<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('roomType');
            $table->string('roomBedtype');
            $table->string('roomBenefits');
            $table->string('roomImg1')->default('https://cdn1.iconfinder.com/data/icons/real-estate-set-2/512/39-512.png');
            $table->string('roomImg2')->default('https://cdn1.iconfinder.com/data/icons/real-estate-set-2/512/39-512.png');
            $table->string('roomImg3')->default('https://cdn1.iconfinder.com/data/icons/real-estate-set-2/512/39-512.png');
            $table->string('roomImg4')->default('https://cdn1.iconfinder.com/data/icons/real-estate-set-2/512/39-512.png');
            $table->string('roomImg5')->default('https://cdn1.iconfinder.com/data/icons/real-estate-set-2/512/39-512.png');
            $table->string('roomImg6')->default('https://cdn1.iconfinder.com/data/icons/real-estate-set-2/512/39-512.png');
            $table->string('roomImg7')->default('https://cdn1.iconfinder.com/data/icons/real-estate-set-2/512/39-512.png');
            $table->string('roomImg8')->default('https://cdn1.iconfinder.com/data/icons/real-estate-set-2/512/39-512.png');
            $table->string('roomImg9')->default('https://cdn1.iconfinder.com/data/icons/real-estate-set-2/512/39-512.png');
            $table->string('roomImg10')->default('https://cdn1.iconfinder.com/data/icons/real-estate-set-2/512/39-512.png');
            $table->string('roomImg11')->default('https://cdn1.iconfinder.com/data/icons/real-estate-set-2/512/39-512.png');
            $table->string('roomImg12')->default('https://cdn1.iconfinder.com/data/icons/real-estate-set-2/512/39-512.png');
            $table->date('roomFrom');
            $table->date('roomTo');
            $table->integer('roomDPrice');
            $table->integer('roomAPrice');
            $table->integer('pId');
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
        Schema::dropIfExists('rooms');
    }
}
