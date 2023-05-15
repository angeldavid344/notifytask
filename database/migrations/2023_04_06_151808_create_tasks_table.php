<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_task');
            $table->integer('id_status');
            $table->text('descripcion');
            $table->unsignedBigInteger('id_user');
            $table->integer('id_client');
            $table->datetime('date_ini');
            $table->datetime('date_end');
            $table->timestamps();
        });

        
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }

};
