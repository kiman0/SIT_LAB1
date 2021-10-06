<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('tasks', function (Blueprint $table) {
            $table->id('task_id')->unique();
            $table->unsignedBigInteger('tas_id')->nullable();
            $table->foreign('tas_id')->references('id')->on('users');
            $table->text('task_text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
