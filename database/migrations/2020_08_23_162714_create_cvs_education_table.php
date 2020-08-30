<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs_education', function (Blueprint $table) {
            $table->id();
            $table->string('education_institute')->nullable();;
            $table->string('education_location')->nullable();;
            $table->string('education_degree')->nullable();;
            $table->string('education_subject')->nullable();;
            $table->date('education_start_date')->nullable();
            $table->date('education_end_date')->nullable();
            $table->unsignedBigInteger('cv_id');
            $table->foreign('cv_id')->references('id')->on('cvs');
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
        Schema::dropIfExists('cvs_education');
    }
}
