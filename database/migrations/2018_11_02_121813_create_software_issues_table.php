<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftwareIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software_issues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('software_name');
            $table->string('software_key');
            $table->string('software_issue')->nullable();
            $table->string('software_status')->nullable();
            $table->string('reporter_ip')->nullable();
            $table->string('reporter_browser')->nullable();
            $table->string('reporter_location')->nullable();
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
        Schema::dropIfExists('software_issues');
    }
}
