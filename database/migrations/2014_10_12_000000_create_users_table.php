<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('userTitle');
            $table->string('userFname');
            $table->string('userLname');
            $table->string('userPidType');
            $table->string('userPid');
            $table->integer('userPhone');
            $table->string('userAddress');
            $table->string('userCity');
            $table->string('userCountry');
            $table->string('userAvatar')->default('https://lh3.googleusercontent.com/proxy/K_37_4LWlidlLJpe4UFC03ZSUfYGLQio6sngJIBCUX7mQ8IvP17SxAecMcgtuSk589TGuMEhOPfBpVjeo47mflufgdG2FfU');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
