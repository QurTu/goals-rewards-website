<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_adds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('type');
            $table->date('due_date')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('goal_id')->nullable();
            $table->foreign('goal_id')->references('id')->on('goals');
            $table->string('done')->default(0);
            $table->decimal('points' , 8 ,1)->default(0);
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
        Schema::dropIfExists('task_adds');
    }
}
