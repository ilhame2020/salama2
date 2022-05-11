<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('cne')->unique();
            $table->string('id_filiere');
            $table->foreignId('id_section')->references('id')->on('sections')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('id_groupe')->references('id')->on('groupes')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('nom_etudiant')->nullable();
            $table->string('prenom_etudiant')->nullable();
            $table->string('email_etud')->nullable();
            $table->string('compte_etud')->nullable();
            $table->string('mdp_etud')->nullable();
            $table->string('adresse_etud')->nullable();
            $table->date('date_naiss_etud')->nullable();
            $table->date('date_inscription_etud')->nullable();
          
            $table->timestamp('email_verified_at')->nullable();
           
            $table->rememberToken();

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
        Schema::dropIfExists('etudiants');
    }
}
