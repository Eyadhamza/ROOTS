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
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('avatar')->nullable();
            $table->string('role')->nullable();
            $table->string('bio')->nullable();
            $table->bigInteger('number')->nullable();
            $table->string('tasks_performance')->default(0);
            $table->string('interaction_performance')->default(0);
            $table->string('knowledge_performance')->default(0);
            $table->string('google_id')->nullable();
            $table->string('telegram_url')->nullable();

            $table->string('facebook_id')->nullable();
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
