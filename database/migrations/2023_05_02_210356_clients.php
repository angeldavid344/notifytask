<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users');
        });

        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('Surname');
            $table->string('second_surname');
            $table->integer('identification_document');
            $table->string('nationality');
            $table->char('sex',2);
            $table->date('birthdate');
            $table->string('email')->unique();
            $table->integer('mobile number');
            $table->string('country');
            $table->string('home');
            $table->char('state',2);
            


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
        Schema::dropIfExists('client');
    }
};
