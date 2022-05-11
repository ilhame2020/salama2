<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevoirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devoirs', function (Blueprint $table) {
            $table->id();
            $table->string('contenu');
            $table->string('file_path')->nullable();
            $table->date('date_limite');
            $table->unsignedBigInteger('id_prof');
            $table->foreign('id_prof')->references('id')->on('professeurs');
            $table->unsignedBigInteger('id_cours');
            $table->foreign('id_cours')->references('id')->on('cours');
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
        Schema::dropIfExists('devoirs');
    }
}
