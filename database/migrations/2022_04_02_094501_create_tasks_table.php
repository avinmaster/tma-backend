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
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->dateTimeTz('start_time');
            $table->dateTime('duration');
            $table->time('delay');
            $table->boolean('completed');
            $table->timestamps();

            $table->foreignId('plan_id')
                ->constrained()
                ->cascadeOnUpdate();

            $table->foreignId('task_id')
                ->nullable()
                ->default(null)
                ->constrained()
                ->cascadeOnUpdate();
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
