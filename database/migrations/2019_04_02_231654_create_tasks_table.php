<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
        $table->increments('id');
        $table->unsignedInteger('project_id');
        $table->foreign('project_id')->references('id')->on('projects');
        $table->unsignedInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users');
        $table->unsignedInteger('creator_id');
        $table->foreign('creator_id')->references('id')->on('users');
        $table->string('name');
        $table->text('description')->nullable();
        $table->integer('hours')->default(1);
        $table->datetime('limit_date')->nullable();
        $table->string('status')->default('Open');
        $table->string('priority')->default('Normal');
        $table->string('tags')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
