<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('id_section')->nullabale();
            $table->foreign('id_section')->references('id')->on('sections')->nullabale();
            $table->unsignedBigInteger('id_groupe')->nullabale();
            $table->foreign('id_groupe')->references('id')->on('groupes')->nullabale();
            $table->string('type');
            $table->integer('nb_tps')->nullable();
            $table->string('classe');
            $table->unsignedBigInteger('id_prof')->nullabale();
            $table->foreign('id_prof')->references('id')->on('professeurs')->nullabale();
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
        Schema::dropIfExists('t_deriges');
    }
}
