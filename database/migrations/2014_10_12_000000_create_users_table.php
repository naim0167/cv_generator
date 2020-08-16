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
            // $table->string('firstname')->nullable();
            // $table->string('lastname')->nullable();
            // $table->string('address')->nullable();
            // $table->string('zipcode')->nullable();
            // $table->string('city')->nullable();
            // $table->string('phone')->nullable();
            // $table->string('mobile')->nullable();
            // $table->string('cv_email')->nullable();
            // $table->string('birthday')->nullable();
            // $table->string('nationality')->nullable();
            // $table->string('language1')->nullable();
            // $table->string('language2')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
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
