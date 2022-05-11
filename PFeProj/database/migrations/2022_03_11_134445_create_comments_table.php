<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_post');
            $table->foreign('id_post')->references('id')->on('posts');
            $table->unsignedBigInteger('id_etud')->nullabale();
            $table->foreign('id_etud')->references('id')->on('users')->nullabale();
            $table->unsignedBigInteger('id_prof')->nullabale();
            $table->foreign('id_prof')->references('id')->on('professeurs')->nullabale();
              $table->text('body');
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
        Schema::dropIfExists('comments');
    }
}
