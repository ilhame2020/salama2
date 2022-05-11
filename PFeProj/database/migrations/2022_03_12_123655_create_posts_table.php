<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
                $table->text('body')->nullable();
                $table->string('file_path')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
