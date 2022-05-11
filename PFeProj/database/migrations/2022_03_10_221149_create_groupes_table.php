<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupes', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->foreignId('id_section')->references('id')->on('sections')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('id_filiere')->references('id')->on('filieres')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('nom_groupe')->nullable();
            $table->string('annee_universitaire')->nullable();
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
        Schema::dropIfExists('groupes');
    }
}
