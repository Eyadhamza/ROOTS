<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('committee_id')->nullable();
            $table->boolean('chat_followup')->nullable();
            $table->boolean('task_followup')->nullable();
            $table->boolean('problem_followup')->nullable();
            $table->boolean('activity_followup')->nullable();
            $table->boolean('interaction_followup')->nullable();
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
        Schema::dropIfExists('ckeck_lists');
    }
}
