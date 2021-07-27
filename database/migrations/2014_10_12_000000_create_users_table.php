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
            $table->bigIncrements('user_id');
            $table->string('user_name')->nullable(false);
            $table->string('user_email')->unique()->nullable(false);
            $table->string('user_password')->nullable(false);
            $table->boolean('user_verified')->default(false);
            $table->string('user_phone')->nullable();
            $table->string('user_address')->nullable();
            $table->unsignedInteger('user_point')->nullable()->default(0);
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
