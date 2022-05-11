<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cour_section', function (Blueprint $table) {
            $table->unsignedBigInteger('id_cours')->nullabale();
            $table->foreign('id_cours')->references('id')->on('cour')->nullabale();
            $table->unsignedBigInteger('id_section')->nullabale();
            $table->foreign('id_section')->references('id')->on('sections')->nullabale();
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cour_section');
    }
}
