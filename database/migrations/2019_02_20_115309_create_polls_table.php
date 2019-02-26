<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('poll_status')->nullable();
            $table->string('poll_name')->nullable();
            $table->string('poll_type')->nullable();
            $table->string('poll_question')->nullable();
            $table->string('poll_first_answer')->nullable();
            $table->string('poll_second_answer')->nullable();
            $table->string('poll_third_answer')->nullable();
            $table->string('poll_audience')->nullable();
            $table->string('poll_audience_gender')->nullable();
            $table->string('poll_audience_age_from')->nullable();
            $table->string('poll_audience_age_to')->nullable();
            $table->string('poll_audience_location')->nullable();
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
        Schema::dropIfExists('polls');
    }
}
