<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScreeningQuestionairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screening_questionaires', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('location')->nullable();
            $table->boolean('salary_expectation')->nullable();
            $table->boolean('job_type')->nullable();
            $table->boolean('stack_option')->nullable();
            $table->boolean('post_school_obligation')->nullable();
            $table->boolean('work_engagement')->nullable();
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
        Schema::dropIfExists('screening_questionaires');
    }
}
