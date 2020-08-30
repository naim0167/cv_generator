<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsWork extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('cvs_work', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();;
            $table->string('company_name')->nullable();;
            $table->string('job_location')->nullable();;
            $table->date('job_start_date')->nullable();
            $table->date('job_end_date')->nullable();
            $table->text('workdetails')->nullable();
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
        Schema::dropIfExists('cvs_work');
    }
}
