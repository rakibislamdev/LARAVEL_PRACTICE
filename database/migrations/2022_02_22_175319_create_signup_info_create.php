<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignupInfoCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signup_info', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('semister');
            $table->integer('roll');
            $table->string('shift');
            $table->integer('registration');
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
        Schema::dropIfExists('signup_info');
    }
}
