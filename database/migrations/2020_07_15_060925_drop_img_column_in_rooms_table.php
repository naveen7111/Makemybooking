<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropImgColumnInRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->string('roomImg');
            $table->dropColumn('roomImg1');
            $table->dropColumn('roomImg2');
            $table->dropColumn('roomImg3');
            $table->dropColumn('roomImg4');
            $table->dropColumn('roomImg5');
            $table->dropColumn('roomImg6');
            $table->dropColumn('roomImg7');
            $table->dropColumn('roomImg8');
            $table->dropColumn('roomImg9');
            $table->dropColumn('roomImg10');
            $table->dropColumn('roomImg11');
            $table->dropColumn('roomImg12');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rooms', function (Blueprint $table) {
            //
        });
    }
}
