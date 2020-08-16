<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->string('zipcode');
            $table->string('city');
            $table->string('phone')->nullable();
            $table->string('mobile');
            $table->string('cv_email');
            $table->date('birthday');
            $table->string('nationality');
            $table->string('language1')->nullable();
            $table->string('language2')->nullable();
            $table->string('language3')->nullable();
            $table->text('profilesummary')->nullable();
            $table->text('technicalSkills')->nullable();;
            $table->text('personalInterest')->nullable();;
            $table->boolean('complete')->default(false);
            $table->timestamps();
        });
    }
// firstname
// lastname
// address
// zipcode
// city
// phone
// mobile
// cv_email
// birthday
// nationality
// language1
// language2
// language3
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cvs');
    }
}
