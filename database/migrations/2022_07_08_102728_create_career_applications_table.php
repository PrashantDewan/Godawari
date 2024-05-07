<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cv');
            $table->longText('description');
            $table->unsignedBigInteger('position_id');
            $table->foreign('position_id')->references('career_id')->on('careers')->onDelete('cascade');
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
        Schema::dropIfExists('career_applications');
    }
}
